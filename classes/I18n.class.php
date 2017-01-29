<?php
/**
 * Internationalization (i18n) with PHP and gettext
 *
 * @author   Dave Hollingworth
 * @link     http://www.udemy.com/u/davehollingworth/
 * @version  5 - Remembering the Language Preference
 */

class I18n {

  static private $_locale;
  static private $_supported_locales = array('en_GB', 'es_ES');

  /**
   * Initialise the library.
   */
  static public function init()
  {
    $domain = 'myapp';

    // Set the domain
    textdomain($domain);

    // Specify the location of translation files
    bindtextdomain($domain, dirname(__FILE__).'/locale');
    bind_textdomain_codeset($domain, 'UTF-8');

    // Set the locale - try cookie, browser header, then default
    $locale = self::_get_locale_from_cookie();

    if (is_null($locale))
    {
      $locale = self::_get_locale_from_browser();

      if (is_null($locale))
      {
        // Default to the first supported locale
        $locale = self::$_supported_locales[0];
      }
    }

    self::set_locale($locale);
  }

  /**
   * Remember the locale in a cookie, if it's supported
   *
   * @param string $locale  The locale
   */
  static public function remember_locale($locale)
  {
    if (in_array($locale, self::$_supported_locales))
    {
      $expires = time() + 7776000;  // in 90 days
      setcookie('lang', $locale, $expires);
    }
  }

  /**
   * Set the locale.
   *
   * @param string $locale  The locale
   */
  static public function set_locale($locale)
  {
    putenv('LC_ALL='.$locale);
    setlocale(LC_ALL, $locale);

    self::$_locale = $locale;
  }

  /**
   * Return the current locale.
   *
   * @return string
   */
  static public function get_locale()
  {
    return self::$_locale;
  }
  
  /**
   * Get the accepted languages from the Accept-language header
   *
   * @return array  Keys are locale codes, values are preferences. Ordered by descending preference.
   */
  static private function _get_accepted_languages()
  {
    $languages = array();

    if (isset($_SERVER['HTTP_ACCEPT_LANGUAGE']))
    {
      $accepted_languages = explode(',', $_SERVER['HTTP_ACCEPT_LANGUAGE']);

      foreach ($accepted_languages as $lang)
      {
        // get preference (Q value) and language
        if (preg_match('/^(.*);q=(.*)$/', $lang, $matches))
        {
          $lang = $matches[1];
          $preference = (float) $matches[2];
        }
        else
        {
          $preference = 1.0;
        }

        // convert to case used by gettext locales (e.g. en-gb -> en_GB)
        if (strlen($lang) == 5)
        {
          $lang = strtolower(substr($lang, 0, 2)).'_'.strtoupper(substr($lang, 3));
        }
        else
        {
          $lang = strtolower($lang);
        }

        $languages[$lang] = $preference;
      }

      // sort in descending order of preference
      arsort($languages);
    }

    return $languages;
  }

  /**
   * Get the best locale that matches the accepted locales, according to browser preference. Matches language
   * codes only if a full locale code match isn't found.
   *
   * @return mixed  The locale string or NULL if a match isn't found.
   */
  static private function _get_locale_from_browser()
  {
    $accepted_languages = self::_get_accepted_languages();
    $locale = NULL;

    // See if any of the accepted locales is supported
    foreach ($accepted_languages as $lang => $pref)
    {
      if (in_array($lang, self::$_supported_locales))
      {
        // match found
        $locale = $lang;
        break;
      }
    }

    if (is_null($locale))
    {
      // Try without the country code - extract list of just the language codes 
      $accepted_language_codes = array_keys(array_map(function($lang) { return substr($lang, 0, 2); }, $accepted_languages));
        
      foreach (self::$_supported_locales as $supported_locale)
      {
        $lang_code = substr($supported_locale, 0, 2);

        if (in_array($lang_code, $accepted_language_codes))
        {
          $locale = $supported_locale;
          break;
        }
      }
    }

    return $locale;
  }

  /**
   * Get the locale from the cookie, if it matches the accepted locales.
   *
   * @return mixed  The locale string or NULL if the cookie isn't set or has an invalid value
   */
  static private function _get_locale_from_cookie()
  {
    if (isset($_COOKIE['lang']))
    {
      if (in_array($_COOKIE['lang'], self::$_supported_locales))
      {
        return $_COOKIE['lang'];
      }
    }
  }
}

I18n::init();

?>
