$(function () {
	$('head').append('<link rel="stylesheet" href="css/style-0.css" rel="stylesheet">');
	$('.js-settings-panel-btn').on('click',function (e){
		var $this = $(this).parent('.js-settings-panel-item');
		$('.js-settings-panel-item').not($this).removeClass('opened');
		$this.toggleClass('opened');
	})
	$('.js-swatch-color').on('click',function (e){
		var color = $(this).attr('data-color');
		if(color != undefined){
			$('link[href*="css/style-"]').not('link[href*="css/style-rtl"]').attr('href','css/style-color-'+color+'.css');
		} else {
			$('link[href*="css/style-"]').attr('href','css/style-0.css');
		}
		$('.js-swatch-color').removeClass('active');
		$(this).toggleClass('active');
		e.preventDefault();
	});
})