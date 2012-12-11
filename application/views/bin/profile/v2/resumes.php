<?php $root = dirname( __FILE__ ); ?>
<div class="tabbable tabs-left max-wrapper">
	<div class="row-fluid resumebar">
		<ul class="container-fluid nav nav-inverse nav-pills nav-stacked span2 resumelist">
				<?php require_once "$root/resumes/resume-list.php"; ?>
		</ul>
		<div class="tab-content span10 viewport">
			<?php require_once "$root/resumes/resumes.php"; ?>
		</div>
	</div>
</div>