<?php $root = dirname( __FILE__ ); ?>
<div class="tabbable tabs-left row-fluid">
	<div class="max-wrapper resumebar">
		<ul class="nav nav-inverse nav-pills nav-stacked span2 resumelist">
			<?php require_once "$root/resumes/resume-list.php"; ?>
		</ul>
		<div class="tab-content span10 resume">
			<?php require_once "$root/resumes/resumes.php"; ?>
		</div>
	</div>
</div>