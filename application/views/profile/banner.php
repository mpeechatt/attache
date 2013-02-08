<?php
	// Define the document root
	$root = dirname( __FILE__ );
?>
<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="navbar-inner">
		<div class="container-fluid">
			<a class="brand" href="/attache/">Attach&eacute;</a>
			
			<div class="nav-collapse collapse">
				<ul class="nav nav-pills pull-right">
					<?php require_once "$root/dropdown/dropdown.php"; ?>
				</ul>
			</div><!--/.nav-collapse -->
		</div><!--/ .container -->

		<div class="container-fluid btn-toolbar editing-toolbar">
			<div class="pull-left">
				<?php require_once "$root/toolbar/modes.php"; ?>
			</div>

			<div class="pull-right">
				<?php require_once "$root/toolbar/edit.php"; ?>
				<?php require_once "$root/toolbar/add.php"; ?>
				<?php require_once "$root/toolbar/rearrange.php"; ?>
				<?php require_once "$root/toolbar/delete.php"; ?>
				<?php require_once "$root/toolbar/finalize.php"; ?>
			</div>
		</div><!--/ .container -->
	</div><!--/ .navbar-inner -->
</div>