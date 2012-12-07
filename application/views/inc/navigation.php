<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="navbar-inner">
		<div class="container-fluid">
			<a class="brand" href="/attache/">Attach&eacute;</a>
			<div class="nav-collapse collapse">
				<ul class="nav">
					<?php
						// Create a navigation array
						$navs = array(
							// Introduction Page
							array(
								"label"		=>	"Getting Started",
								"link"		=>	"intro"
							),

							// Mobile Compatability Page
							array(
								"label"		=>	"Mobile",
								"link"		=>	"mobile"
							),

							// Support Page
							array(
								"label"		=>	"Support",
								"link"		=>	"support"
							),

							// The Team Page
							array(
								"label"		=>	"The Team",
								"link"		=>	"team"
							)
						);

						// Loop through each of the navigation elements
						foreach( $navs as $nav ) {
							// Localize the values
							$link = $nav["link"];
							$label = $nav["label"];

							// Echo out the link
							echo( "<li><a class='navbar-link' href='/attache/$link/'>$label</a></li>" );
						}
					?>
				</ul>

				<form class="navbar-form pull-right">
					<input class="span2" type="text" placeholder="Email">
					<input class="span2" type="password" placeholder="Password">
					<button type="submit" class="btn">Sign in</button>
				</form>
			</div><!--/.nav-collapse -->
		</div><!--/ .container -->
	</div><!--/ .navbar-inner -->
</div>