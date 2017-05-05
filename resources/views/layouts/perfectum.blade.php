<!DOCTYPE html>
<html lang="en">
<head>
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>App Name - @yield('title')</title>
	<meta name="description" content="Perfectum Dashboard Bootstrap Admin Template.">
	<meta name="author" content="Łukasz Holeczek">
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- end: Mobile Specific -->
	
	<!-- start: CSS -->
	
	<!-- bootstrap -->
	<link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
	
	<!-- page css files -->
	<link href="{{asset('assets/css/font-awesome.min.css')}}" rel="stylesheet">
	<link href="{{asset('assets/css/jquery-ui-1.10.3.custom.min.css')}}" rel="stylesheet">
	<link href="{{asset('assets/css/fullcalendar.css')}}" rel="stylesheet">	
	<link href="{{asset('assets/css/jquery.gritter.css')}}" rel="stylesheet">

	<link href="{{asset('assets/css/chosen.min.css')}}" rel="stylesheet">
	<link href="{{asset('assets/css/jquery.cleditor.css')}}" rel="stylesheet">
	<link href="{{asset('assets/css/bootstrap-datepicker.css')}}" rel="stylesheet">
	<link href="{{asset('assets/css/bootstrap-timepicker.css')}}" rel="stylesheet">
	<link href="{{asset('assets/css/daterangepicker.css')}}" rel="stylesheet">
	<link href="{{asset('assets/css/bootstrap-colorpicker.css')}}" rel="stylesheet">		
	
	<!-- main style -->
	<link href="{{asset('assets/css/style.css')}}" rel="stylesheet">

	<!--[if lt IE 9 ]>
		<link href="{{asset('assets/css/style-ie.css')}}" rel="stylesheet">
	<![endif]-->
	
	<!-- end: CSS -->
	
	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
		
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<script src="{{asset('assets/js/respond.min.js')}}"></script>
		
	<![endif]-->

	<!-- start: Favicon -->
	<link rel="shortcut icon" href="{{asset('assets/img/favicon.ico')}}">
	<!-- end: Favicon -->
</head>

<body>
	<!-- start: Header -->
	<div class="navbar">
		<div class="container">
			<button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".sidebar-nav.nav-collapse">
			      <span class="icon-bar"></span>
			      <span class="icon-bar"></span>
			      <span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="index.html"> </a>
							
			<!-- start: Header Menu -->
			
			<!-- end: Header Menu -->
			
		</div>
	</div>
	<!-- start: Header -->
	
	<div class="container">
		<div class="row">
			<!-- start: Main Menu -->
			@include('layouts.left_navigation')
			<!-- end: Main Menu -->
				
			<noscript>
				<div class="alert alert-block col-sm-10">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
				</div>
			</noscript>
				
			<div id="content" class="col-sm-10">
				<!-- start: Content -->
					@yield('content')
				<!-- end: Content -->
			</div><!--/#content.span10-->
		</div><!--/fluid-row-->
				
		@include('layouts.modals')
		
		<div class="clearfix"></div>
		
		<footer class="col-sm-12" style="position:fixed; bottom: 0;">
			<p>
				<span style="text-align:left;float:left">&copy; 2013 creativeLabs. <a href="http://bootstrapmaster.com">Admin Templates</a> by BootstrapMaster</span>
				<span class="hidden-phone" style="text-align:right;float:right">Powered by: <a href="http://bootstrapmaster.com/demo/perfectum/" alt="Bootstrap Admin Templates">Perfectum Dashboard</a></span>
			</p>
		</footer>
				
	</div><!--/.fluid-container-->

	<!-- start: JavaScript-->
	<!--[if !IE]>-->

			<script src="{{asset('assets/js/jquery-2.0.3.min.js')}}"></script>

	<!--<![endif]-->

	<!--[if IE]>
	
		<script src="{{asset('assets/js/jquery-1.10.2.min.js')}}"></script>
	
	<![endif]-->

	<!--[if !IE]>-->

		<script type="text/javascript">
			window.jQuery || document.write("<script src='{{asset('assets/js/jquery-2.0.3.min.js')}}'>"+"<"+"/script>");
		</script>

	<!--<![endif]-->

	<!--[if IE]>
	
		<script type="text/javascript">
	 	window.jQuery || document.write("<script src='{{asset('assets/js/jquery-1.10.2.min.js')}}'>"+"<"+"/script>");
		</script>
		
	<![endif]-->
	<script src="{{asset('assets/js/jquery-migrate-1.2.1.min.js')}}"></script>
	<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
	
	
	<!-- page scripts -->
	<script src="{{asset('assets/js/jquery-ui-1.10.3.custom.min.js')}}"></script>
	<script src="{{asset('assets/js/jquery.knob.modified.min.js')}}"></script>
	<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="{{asset('assets/js/excanvas.min.js')}}"></script><![endif]-->
	<script src="{{asset('assets/js/jquery.flot.min.js')}}"></script>
	<script src="{{asset('assets/js/jquery.flot.pie.min.js')}}"></script>
	<script src="{{asset('assets/js/jquery.flot.stack.min.js')}}"></script>
	<script src="{{asset('assets/js/jquery.flot.resize.min.js')}}"></script>
	<script src="{{asset('assets/js/jquery.flot.time.min.js')}}"></script>
	<script src="{{asset('assets/js/jquery.sparkline.min.js')}}"></script>
	<script src="{{asset('assets/js/fullcalendar.min.js')}}"></script>
	<script src="{{asset('assets/js/jquery.gritter.min.js')}}"></script>

	<script src="{{asset('assets/js/jquery.chosen.min.js')}}"></script>
	<script src="{{asset('assets/js/jquery.cleditor.min.js')}}"></script>
	<script src="{{asset('assets/js/jquery.autosize.min.js')}}"></script>
	<script src="{{asset('assets/js/jquery.placeholder.min.js')}}"></script>
	<script src="{{asset('assets/js/jquery.maskedinput.min.js')}}"></script>
	<script src="{{asset('assets/js/jquery.inputlimiter.1.3.1.min.js')}}"></script>
	<script src="{{asset('assets/js/bootstrap-datepicker.min.js')}}"></script>
	<script src="{{asset('assets/js/bootstrap-timepicker.min.js')}}"></script>
	<script src="{{asset('assets/js/moment.min.js')}}"></script>
	<script src="{{asset('assets/js/daterangepicker.min.js')}}"></script>
	<script src="{{asset('assets/js/jquery.hotkeys.min.js')}}"></script>
	<script src="{{asset('assets/js/bootstrap-wysiwyg.min.js')}}"></script>
	<script src="{{asset('assets/js/bootstrap-colorpicker.min.js')}}"></script>
	
	<!-- inline scripts related to this page -->
	<script src="{{asset('assets/js/pages/forms.js')}}"></script>
	
	<!-- theme scripts -->
	<script src="{{asset('assets/js/default.min.js')}}"></script>
	<script src="{{asset('assets/js/uncompressed/core.js')}}"></script>
	
	<!-- inline scripts related to this page
	<script src="{{asset('assets/js/pages/index.js')}}"></script>
	
		<!-- end: JavaScript-->
	
</body>
</html>