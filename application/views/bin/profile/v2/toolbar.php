<?php $root = dirname( __FILE__ ); ?>
<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="navbar-inner row-fluid">
		<div class="container-fluid btn-toolbar span10 offset2">
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
		</div>
	</div>
</div>