<script src="/attache/assets/js/jquery.js"></script>
<script src="/attache/assets/js/jquery.min.js"></script>

<script src="/attache/assets/js/bootstrap.js"></script>
<script src="/attache/assets/js/bootstrap.min.js"></script>

<script src="/attache/assets/js/jquery-ui-1.9.2.custom.min.js"></script>

<script src="/attache/assets/js/core/components.js"></script>

<!-- Attache Core -->
<script></script>

<!-- Binding Initialization -->
<script>
	/**
	 * Description: Lazy Initialization
	 *
	 * Author: Jeremy Pitzeruse
	 */
	$( function() {
			// Bind the tooltip functionality to the document
			$( document ).tooltip();

			// Bind the Attache functionality
			bind_hover();
			bind_editing();
			bind_adding();
			bind_rearranging();
			bind_delete();

			// Resize the view that we are working with
			// resize_viewport();

			// Bind to the window
			// $( window ).resize( function() { resize_viewport(); } );
		}
	);

	/**
	 * Name: resize_viewport
	 *
	 * Description: Resize the viewport
	 *
	 * Author: Jeremy Pitzeruse
	 */
	function resize_viewport() {
		// Resize the resumebar / viewport
		$( ".resumebar" ).height( $( window ).height() - $( ".resumebar" ).offset().top );
	}
</script>

<!-- Hover Capabilities -->
<script>
	/**
	 * Name: bind_hover
	 *
	 * Description:
	 *
	 * Author: Jeremy Pitzeruse
	 */
	function bind_hover() {
		// Establish which elements are sortable
		var sortable = [
			"page",
			"section_content",
			"container",
			"right",
			"left"
		];

		// Loop through the sortable objects
		for( x in sortable ) {
			// Create a target
			var target = "#master .page";

			// Loop through each of the children
			$( target ).children().each( function() {
					$( this ).bind( 'mouseenter', hover_in );
					$( this ).bind( 'mouseleave', hover_out );
				}
			);
		}
	}

	/**
	 * Name: unbind_hover
	 *
	 * Description:
	 *
	 * Author: Jeremy Pitzeruse
	 */
	function bind_hover() {
		// Establish which elements are sortable
		var sortable = [
			"page",
			"section_content",
			"container",
			"right",
			"left"
		];

		// Loop through the sortable objects
		for( x in sortable ) {
			// Create a target
			var target = "#master .page";

			// Loop through each of the children
			$( target ).children().each( function() {
					$( this ).unbind( 'mouseenter', hover_in );
					$( this ).unbind( 'mouseleave', hover_out );
				}
			);
		}
	}

	/**
	 * Name: hover_in
	 *
	 * Description:
	 *
	 * Author: Jeremy Pitzeruse
	 */
	function hover_in() {}

	/**
	 * Name: hover_out
	 *
	 * Description:
	 *
	 * Author: Jeremy Pitzeruse
	 */
	function hover_out() {}
</script>

<!-- Editing Capabilities -->
<script>
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
</script>

<!-- Adding Capabilities -->
<script>
	/**
	 * Name: bind_adding
	 *
	 * Description:
	 *
	 * Author: Jeremy Pitzeruse
	 */
	function bind_adding() {}

	/**
	 * Name: unbind_adding
	 *
	 * Description:
	 *
	 * Author: Jeremy Pitzeruse
	 */
	function unbind_adding() {}

	/**
	 * Name: add
	 *
	 * Description:
	 *
	 * Author: Jeremy Pitzeruse
	 */
	function add() {}
</script>

<!-- Rearranging Capabilities -->
<script>
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
					handle : '.handle',
					tolerance : 'pointer',
					update : rearrange
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
</script>

<!-- Deleting Capabilities -->
<script>
	/**
	 * Name: bind_delete
	 *
	 * Description:
	 *
	 * Author: Jeremy Pitzeruse
	 */
	function bind_delete() {}

	/**
	 * Name: unbind_delete
	 *
	 * Description:
	 *
	 * Author: Jeremy Pitzeruse
	 */
	function unbind_delete() {}

	/**
	 * Name: remove
	 *
	 * Description:
	 *
	 * Author: Jeremy Pitzeruse
	 */
	function remove() {}
</script>