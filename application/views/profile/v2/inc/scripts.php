<script src="/attache/assets/js/jquery.js"></script>
<script src="/attache/assets/js/bootstrap.js"></script>
<script src="/attache/assets/js/jquery-ui-1.9.2.custom.min.js"></script>

<script src="/attache/assets/js/core/components.js"></script>
<script src="/attache/assets/js/core/edit.js"></script>
<script src="/attache/assets/js/core/add.js"></script>
<script src="/attache/assets/js/core/rearrange.js"></script>
<script src="/attache/assets/js/core/remove.js"></script>

<!-- Binding Initialization -->
<script>
	/**
	 * Description: Lazy Initialization
	 *
	 * Author: Jeremy Pitzeruse
	 */
	$( function() {
			bind_all();
		}
	);

	/**
	 *
	 */
	function unbind_all() {
		// Unbind all capabilities
		unbind_editing();
		unbind_adding();
		// unbind_rearranging();
		unbind_delete();
	}

	/**
	 *
	 */
	function bind_all() {
		// Bind all capabilities
		bind_editing();
		bind_adding();
		bind_rearranging();
		bind_delete();
	}
</script>