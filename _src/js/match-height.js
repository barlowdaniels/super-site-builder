jQuery(document).ready(function($) {

	$(window).on('load resize', function() {

		// Above bootstrap 'md' setting
		if($(this).outerWidth() > 768) {
			// Flexible Content: Grid Block - Default
			matchHeight('.grid_block .default', '.col .title');
			matchHeight('.grid_block .default', '.col p');

		} else { // Unset
			// Flexible Content: Grid Block - Default
			matchHeight('.grid_block .default', '.col .title', true);
			matchHeight('.grid_block .default', '.col p', true);

		}
	
	});

	function matchHeight( $block, $element, $unset = false ) {
		$($block).each(function() {
			var matched = $(this).find($element);
			var heights = [];
			matched.css('height', '');
			matched.each(function() {
				heights.push($(this).outerHeight());
			});
			if($unset == true) {
				matched.css('height', '');
			} else {
				matched.css('height', Math.max.apply(Math, heights));
			}
		});
	}
	
});