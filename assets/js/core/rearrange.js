/**
 * Name: bind_rearranging
 *
 * Description:
 *
 * Author: Jeremy Pitzeruse
 */
function bind_rearranging() {
	// Establish which elements are sortable
	var sortable = [
		"header",
		"page",
		"section_content",
		"container",
		"right",
		"left"
	];

	// Loop through each of the sortable elements
	for( x in sortable ) {
		// Create a target
		var target = "#master ." + sortable[x];

		// Bind the sortable functionality
		$( target ).sortable( {
				axis : 'y',
				containment : 'parent',
				cursor : 'move',
				delay : 1000,
				tolerance : 'pointer',
				update : rearrange,
				start : function( event, ui ) {
					$( '.add' ).css( 'display', 'none' );
				},
				stop : function( event, ui ) {
					$( '.add' ).css( 'display', 'block' );
				}
			}
		);
	}
}

/**
 * Name: unbind_rearranging
 *
 * Description:
 *
 * Author: Jeremy Pitzeruse
 */
function unbind_rearranging() {
	// Establish which elements are sortable
	var sortable = [
		"page",
		"section_content",
		"container",
		"right",
		"left"
	];

	// Loop through each of the sortable elements
	for( x in sortable ) {
		// Create a target
		var target = "#master ." + sortable[x];

		// Destroy the sortable object
		$( target ).sortable( 'destroy' );
	}
}

/**
 * Name: rearrange
 *
 * Description:
 *
 * Author: Jeremy Pitzeruse
 */
function rearrange() {
	// SAME AS self.execute
}