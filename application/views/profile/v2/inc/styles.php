<link rel="Stylesheet" type="text/css" href="/attache/assets/css/bootstrap.css" />
<link rel="Stylesheet" type="text/css" href="/attache/assets/css/bootstrap-responsive.css" />

<link rel="Stylesheet" type="text/css" href="/attache/assets/css/ui/no-theme/jquery-ui-1.9.2.custom.min.css" />
<link rel="Stylesheet" type="text/css" href="/attache/assets/css/ui/ui-darkness/jquery-ui-1.9.2.custom.min.css" />

<style>
	body {
		background: url( /attache/assets/img/bg.png ) #ebebeb;
	}

	.navbar-inner {
		border-bottom: 0;
	}

	.controlbar {
		background: #111;
		padding-top: 40px;
	}

	.resumelist {
		background: #111;
		height: 100%;
		margin-bottom: 0;
	}

	.resumelist li {
		text-align: center;
	}

	.resume-list-header {
		margin-top: 5px;
		width: 89px;
		display: inline-block;
		padding: 4px 12px;
		margin-bottom: 0;
		font-size: 14px;
		line-height: 20px;
		color: #333;
		text-align: center;
		text-shadow: 0 1px 1px rgba(255, 255, 255, 0.75);
		vertical-align: middle;
		background-color: whiteSmoke;
		background-image: -moz-linear-gradient(top, white, #E6E6E6);
		background-image: -webkit-gradient(linear, 0 0, 0 100%, from(white), to(#E6E6E6));
		background-image: -webkit-linear-gradient(top, white, #E6E6E6);
		background-image: -o-linear-gradient(top, white, #E6E6E6);
		background-image: linear-gradient(to bottom, white, #E6E6E6);
		background-repeat: repeat-x;
		border: 1px solid #BBB;
		border-color: #E6E6E6 #E6E6E6 #BFBFBF;
		border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
		border-bottom-color: #A2A2A2;
		-webkit-border-radius: 4px;
		-moz-border-radius: 4px;
		border-radius: 4px;
		filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffffff', endColorstr='#ffe6e6e6', GradientType=0);
		filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
		-webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
		-moz-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
		box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
	}

	.max-wrapper {
		max-width: 1024px;
		margin-left: 0;	
	}

	.container-fluid {
		margin-left: 0;
		margin-right: 0;
		padding-left: 20px;
		padding-right: 20px;
	}

	.viewport {
		margin-top: 100px;
	}

	/**
	 * PAGE STYLE
	 */
	.resume {
		background: #fff;
		box-shadow: 0 0 10px rgba( 0, 0, 0, 0.2 );
		-webkit-box-shadow: 0 0 10px rgba( 0, 0, 0, 0.2 );
		-moz-box-shadow: 0 0 10px rgba( 0, 0, 0, 0.2 );
		-ms-box-shadow: 0 0 10px rgba( 0, 0, 0, 0.2 );
		-o-box-shadow: 0 0 10px rgba( 0, 0, 0, 0.2 );
		margin: 20px auto;
		padding: 50px;
		text-align: left;
		width: 716px;
		min-height: 956px;
	}

	.resume ul,
	.resume li {
		list-style: none;
		margin: 0;
		padding: 0;
	}

	.navbar .nav .dropdown-toggle .caret {
		margin-top: 4px;
	}

	#master .controls {
		display: none;
	}
</style>

<!-- Default Resume Style -->
<style>
	ul.header { margin-bottom: 10px; }
	.header .split {}
	.header .split:after { content: "."; display: block; clear: both; visibility: hidden; line-height: 0; height: 0; }
	html[xmlns] .header .split { display: block; }
	* html .header .split { height: 1%; overflow: visible; }
	.header .left { float: left; width: 50%; }
	.header .right { float: right; text-align: right; width: 50%; }
	.header .title { font-size: 16px; font-weight: bold; text-align: center; }
	.header .subtitle { font-size: 12px; font-weight: bold; }
	.header .descriptor { margin-bottom: 0; }
	.header .heavy { font-weight: bold; }
	.header .li { margin-left: 20px; list-style: circle; }
	.header .container { margin-bottom: 6px; }


	.page .section { margin-bottom: 12px; }
	.page .section_name { font-size: 14px; font-weight: bold; }
	.page .section_content { margin-left: 40px; }
	.page .split { position: relative; }
	.page .split:after { content: "."; display: block; clear: both; visibility: hidden; line-height: 0; height: 0; }
	html[xmlns] .page .split { display: block; }
	* html .page .split { height: 1%; overflow: visible; }
	.page .left { float: left; width: 50%; }
	.page .right { float: right; text-align: right; width: 50%; }
	.page .title { font-size: 13px; font-weight: bold; }
	.page .subtitle { font-size: 12px; font-weight: bold; }
	.page .descriptor { margin-bottom: 6px; }
	.page .heavy { font-weight: bold; }
	.page .li { margin-left: 20px; list-style: circle; }
	.page .container { margin-bottom: 6px; width: 100%; }
</style>