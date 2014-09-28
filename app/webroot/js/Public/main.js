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


	// var options = {
	// 	'trigger': 'hover',
	// 	'placement': 'top',
	// 	'html': true,
	// 	'delay': {'hide': 1500},
	// 	'container': 'body',
	// 	'content': function(){
	// 		return $('#popover').html();
	// 	}
	// };
	// $('a.my-media-artist-name').popover(options);

	// $('a.my-media-artist-name').click(function(){
	// 	return false;
	// });

	// $('body').on('mouseleave', 'div.popover', function(){
	// 	$('a.my-media-artist-name').popover('hide');
	// });
	// $('body').on('mouseenter', '.popover', function(){
	// 	$('.my-media-artist-name').popover('show');
	// });
});