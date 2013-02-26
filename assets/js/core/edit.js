/**
 * Name: bind_editing
 *
 * Description:
 *
 * Author: Jeremy Pitzeruse
 */
function bind_editing() {
	// Bind the editing functionality
	$( "#master li" ).bind( 'click', edit );
}

/**
 * Name: unbind_editing
 *
 * Description:
 *
 * Author: Jeremy Pitzeruse
 */
function unbind_editing() {
	// Unbind the editing functionality
	$( "#master li" ).unbind( 'click', edit );
}

/**
 * Name: edit
 *
 * Description:
 *
 * Author: Jeremy Pitzeruse
 */
function edit() {
	// Localize the source
	var source = $( this );

	// Create the text field for the element
	var text = $( '<TEXTAREA>', {
			value : source.html(),
			class : source.attr( 'class' ),
			css : {
				resize : 'none',
				height : source.height() + "px",
				width : source.width() + "px"
			}
		}
	).blur( function() {
			// Set the source html
			source.html( $( this ).val() );

			// Replace this with the source
			$( this ).replaceWith( source );

			// Rebind the click
			source.bind( 'click', edit );
		}
	).focus( function() {
			$( this ).select();
		}
	);

	// Replace the original element
	source.replaceWith( text );

	// Focus on the text field
	text.focus();
}