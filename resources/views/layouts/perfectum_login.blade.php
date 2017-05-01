<!DOCTYPE html>
<html lang="en">
<head>
	
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>Perfectum Dashboard - Perfect Bootstrap Admin Template</title>
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
	
	<!-- main style -->
	<link href="{{asset('assets/css/style.min.css')}}" rel="stylesheet">

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
	
			<style type="text/css">body { background: url("{{asset('assets/img/bg-login.jpg')}}") !important; }
		</style>
		
		
		
</head>

<body>
		<div class="container">
            @yield('content')			
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
	
		
	<!-- theme scripts -->
	<script src="{{asset('assets/js/default.min.js')}}"></script>
	<script src="{{asset('assets/js/core.min.js')}}"></script>
		
		<!-- end: JavaScript-->
	
</body>
</html>