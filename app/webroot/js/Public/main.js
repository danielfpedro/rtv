$(function(){
	$('.my-media').hover(function(){
		$(this).find('.my-media-btn')
			.fadeIn('fast');
	}, function(){
		$(this).('.my-media-btn')
			.fadeOut('fast');
	});
});