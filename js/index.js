$('document').ready(function() {
	
	function numeroAleatorio(min, max) {
       return Math.round(Math.random() * (max - min) + min);
    }

    var profesor = numeroAleatorio(1,6);
    //alert(profesor);
    if(profesor == 1 ){
    	//var options = { videoId: '_6dY26Br0mI', start: 18 };
		var options = { videoId: 'QF08zUb6M74', start: 3 };
		$('#wrapper').tubular(options);
		// f-UGhWj1xww cool sepia hd
		// 49SKbS7Xwf4 beautiful barn sepia
	}else if(profesor==2){
		var options = { videoId: 'lJRNDtUnJS0', start: 6 };
		$('#wrapper').tubular(options);
	}else if(profesor==3){
		var options = { videoId: 'hwlVXPFT8yU', start: 30 };
		$('#wrapper').tubular(options);
	}else if(profesor==4){
		var options = { videoId: 'yXTlFm5MsKU', start: 15 };
		$('#wrapper').tubular(options);
	}else if(profesor==5){
		var options = { videoId: 'TJT8_G2h62U', start: 17 };
		$('#wrapper').tubular(options);
	}else if(profesor==6){
		var options = { videoId: 'AWPWeiB3P40', start: 20 };
		$('#wrapper').tubular(options);
	}
});

