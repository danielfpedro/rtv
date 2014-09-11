$(function(){
	$('.player-wrap').hover(function(){
		$('.playlist')
			.fadeIn('normal');
	}, function(){
		$('.playlist')
			.fadeOut('normal');
	});
});