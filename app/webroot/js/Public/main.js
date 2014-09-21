$(function(){
	$('.my-media').hover(function(){
		$(this).find('.my-media-btn')
			.stop()
			.fadeIn('fast');
	}, function(){
		$(this).find('.my-media-btn')
			.stop()
			.fadeOut('fast');
	});


	var options = {
		'trigger': 'click',
		'placement': 'top',
		'html': true,
		'container': 'body',
		'content': function(){
			return $('#popover').html();
		}
	};
	$('a.my-media-artist-name').popover(options);

	$('a.my-media-artist-name').click(function(){
		return false;
	});

	$('body').on('mouseout', 'div.popover', function(){
		alert('Saiu');
		// $('.my-media-artist-name').popover('hide');
	});
});