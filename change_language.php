<?php
/**
 * Internationalization (i18n) with PHP and gettext
 *
 * @author   Dave Hollingworth
 * @link     http://www.udemy.com/u/davehollingworth/
 * @version  5 - Remembering the Language Preference
 */

/*include_once 'I18n.php';*/
// Initialisation
require_once('includes/init.php');

/**
 * Get the language from the querystring
 */
$lang = isset($_GET['lang']) ? $_GET['lang'] : NULL;

if ( ! is_null($lang))
{
  I18n::remember_locale($lang);
}

/**
 * Redirect back to the requesting page
 */
$url = empty($_SERVER['HTTP_REFERER']) ? '/' : $_SERVER['HTTP_REFERER'];
$url_parts = parse_url($url);
$path = $url_parts['path'];

header("Location: $path");

?>
