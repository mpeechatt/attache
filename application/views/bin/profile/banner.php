<?php
	// Define the document root
	$root = dirname( __FILE__ );
?>
<div class="navbar navbar-fixed-top">
	<div class="navbar-inner">
		<div class="container-fluid">
			<a class="brand" href="/attache/">Attach&eacute;</a>
			
			<div class="nav-collapse collapse">
				<ul class="nav pull-right">
					<?php require_once "$root/dropdown/dropdown.php"; ?>
				</ul>
			</div><!--/.nav-collapse -->
		</div><!--/ .container -->

		<div class="container-fluid btn-toolbar editing-toolbar">
			<div class="btn-group pull-left" data-toggle="buttons-radio">
				<button class="btn active" title="Edit"><span class="icon-edit"></span></button>
				<button class="btn" title="Add"><span class="icon-plus"></span></button>
				<button class="btn" title="Rearrange"><span class="icon-move"></span></button>
				<button class="btn" title="Delete"><span class="icon-trash"></span></button>
				<button class="btn" title="Finalize"><span class="icon-check"></span></button>
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