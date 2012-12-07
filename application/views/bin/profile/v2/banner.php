<?php $root = dirname( __FILE__ ); ?>
<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="navbar-inner">
		<div class="max-wrapper">
			<div class="container-fluid">
				<a class="brand" href="/attache/profile">Attach&eacute;</a>
				
				<div class="nav-collapse collapse">
					<ul class="nav nav-pills pull-right">
						<?php require_once "$root/dropdown/dropdown.php"; ?>
					</ul>
				</div><!--/.nav-collapse -->
			</div>

			<div class="row-fluid">
				<div class="btn-toolbar span10 offset2">
					<div class="pull-left resume-editor-modes">
						<?php require_once "$root/toolbar/modes.php"; ?>
					</div>

					<div class="pull-right resume-editor-tools">
						<?php require_once "$root/toolbar/edit.php"; ?>
						<?php require_once "$root/toolbar/add.php"; ?>
						<?php require_once "$root/toolbar/rearrange.php"; ?>
						<?php require_once "$root/toolbar/delete.php"; ?>
						<?php require_once "$root/toolbar/finalize.php"; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>