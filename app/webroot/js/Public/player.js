$(function(){
	$('.player-wrap').hover(function(){
		$('.playlist-title').stop().fadeIn('normal');

		var $content = $('.playlist-content');
		if ($content.attr('data-hidden') == 0){
			$content.stop().fadeIn();
		}
	}, function(){
		$('.playlist-title').stop().fadeOut('normal');

		var $content = $('.playlist-content');
		if ($content.attr('data-hidden') == 0){
			$content.stop().fadeOut();
		}
	});

	$('#btn-playlist-collapse').click(function(){
		var $this = $('#btn-playlist-collapse'),
			$span = $this.find('span'),
			classActive = 'glyphicon-chevron-down',
			classInactive = 'glyphicon-chevron-up',
			expanded = $this.attr('data-expanded'),
			removeClass,
			addClass;

		if (expanded == 0) {
			addClass = classActive;
			removeClass = classInactive;
			expanded = 1;
		} else {
			addClass = classInactive;
			removeClass = classActive;
			expanded = 0;
		}

		$span.removeClass(removeClass).addClass(addClass);
		$this.attr({'data-expanded': expanded});

		$('.playlist-content').stop().fadeToggle();

		var $content = $('.playlist-content');
		if ($content.attr('data-hidden') == 1){
			$content.attr({'data-hidden': 0});
		} else {
			$content.attr({'data-hidden': 1});
		}
	});
});