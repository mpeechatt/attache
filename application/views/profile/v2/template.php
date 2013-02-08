<?php $root = dirname( __FILE__ ); ?>
<!DOCTYPE html>
<html>
	<head>
		<?php
			require_once "$root/inc/metadata.php";
			require_once "$root/inc/styles.php";
			require_once "$root/inc/scripts.php";
		?>
	</head>

	<body>
		<!-- CONTROLBAR -->
		<div class="controlbar navbar-fixed-top container-fluid">
			<div class="row-fluid">
				<div class="span2 btn-toolbar">
					<div class="btn-group dropdown">
						<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
							Resume List
							<span class="caret"></span>
						</a>

						<ul class="dropdown-menu">
							<li><a tabindex="-1" href="#">Master</a></li>
							<li class="divider"></li>
							<?php
								// Create resumes
								$resumes = array(
									array( 'name' => 'Resume 1' ),
									array( 'name' => 'Resume 2' )
								);

								// Loop through each of the resumes
								foreach( $resumes as $resume ) {
									// Echo out the resume link
									echo( "<li><a tabindex='-1' href='#'>" . $resume['name'] . "</a></li>" );
								}
							?>
							<li class="divider"></li>
							<li><a tabindex="-1" href="#">Manage Resumes</a></li>
						</ul>
					</div>
				</div>

				<div class="span10"></div>
			</div>
		</div>

		<!-- BANNER -->
		<div class="navbar navbar-inverse navbar-fixed-top">
			<div class="navbar-inner">
				<div class="container-fluid">
					<a class="brand" href="/attache/profile">Attach&eacute;</a>
					
					<div class="nav-collapse collapse pull-right">
						<ul class="nav nav-pills">
							<li class="dropdown">

								<a class="dropdown-toggle current-user" data-toggle="dropdown" href="#">
									<?php echo( 'jpitzeruse@gmail.com' ); ?>
									<span class="caret"></span>
								</a>

								<ul class="dropdown-menu pull-right">
									<li><a href="#">Account Settings</a></li>
									<li><a href="#">Privacy Settings</a></li>
									<li class='divider'></li>
									<li><a href="#">Log Out</a></li>
									<li class='divider'></li>
									<li><a href="#">Help</a></li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<!-- RESUME VIEWPORT -->
		<div class='viewport'>
			<div id="master">
				<div class="resume">
					<?php require "$root/resumes/jeremy-resume.php"; ?>
				</div>
			</div>
		</div>
	</body>
</html>