<script src="http://code.jquery.com/jquery.js"></script>
<script src="/attache/cgi/bootstrap/js/bootstrap.js"></script>

<script>
	//
	//	LAZY LOAD
	//
	$( function() {
			// Resize the view that we are working with
			resize_viewport();

			// Bind to the window
			$( window ).resize( function() { resize_viewport(); } );
		}
	);

	//
	//	Used to resize the view that we are working with
	function resize_viewport() {
		// Resize the resumebar / viewport
		$( ".resumebar" ).height( $( window ).height() - $( ".resumebar" ).offset().top );
	}
</script>