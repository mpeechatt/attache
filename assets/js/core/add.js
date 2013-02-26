/**
 * Name: bind_adding
 *
 * Description:
 *
 * Author: Jeremy Pitzeruse
 */
function bind_adding() {
	// Get the addable content
	var addable = [
		"header",
		"page",
		"section_content",
		"container",
		"right",
		"left"
	];

	// Loop through the sortable objects
	for( x in addable ) {
		// Create a target
		var target = "#master ." + addable[x];

		// Define an add widget
		var addWidget = "<div class='add'><i class='icon icon-plus'></i></div>";

		// Bind enter and leave
		$( target ).append( addWidget );
	}

	// Bind the clicking function
	$( '.add' ).bind( 'click', add );
}

/**
 * Name: unbind_adding
 *
 * Description:
 *
 * Author: Jeremy Pitzeruse
 */
function unbind_adding() {
	// Remove the adding
	$( '.add' ).remove();
}

/**
 * Name: add
 *
 * Description:
 *
 * Author: Jeremy Pitzeruse
 */
function add( event ) {
	// Localize info
	var target = $( event.target );
	var internal = "<i class='icon icon-plus'></i>";

	// Empty the target
	target.empty();

	// Loop through each component
	for( x in components ) {
		// Check the comp
		if( components[x].can_add ) {
			// Append the component
			target.append(
				$( "<div class='component alert alert-info'>" ).append(
					// Append the template
					$( components[x].template ).append(
						// Append the default
						components[x].default
					)
				)
			);
		}
	}

	// Set the opacity
	target.css( 'opacity', '1' );

	// Append a cancel
	target.append(
		$( "<div class='cancel alert alert-danger'>" ).append(
			"<i class='icon icon-remove'></i>"
		).click(
			function() {
				// Revert
				target.empty().append( internal );

				// Set the opacity
				target.removeAttr( 'style' );
			}
		)
	);

	// Find and bind
	$( '.component' ).click(
		function( ev ) {
			// Prevent the propagation of the event
			ev.stopPropagation();

			// Append the selected element
			target.before( $( this ).html() );

			// Revert
			target.empty().append( internal );

			// Set the opacity
			target.removeAttr( 'style' );

			// Rebind
			unbind_all();
			bind_all();
		}
	);
}