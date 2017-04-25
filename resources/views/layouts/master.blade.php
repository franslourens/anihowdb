<!-- Stored in resources/views/layouts/master.blade.php -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>
    <head>
        <title>App Name - @yield('title')</title>
    
        <link rel="stylesheet" type="text/css" href="{{ URL::to('css/style.css') }}">
        <meta name="viewport" content="width=device-width, initial-scale: 1.0, user-scaleable=no">
        <meta property="og:image" content="http://www.mhwebdesigns.com/templates/panel/images/preview.jpg"/>
        <script src="{{ URL::to('js/js/jquery-1.12.3.min.js') }}"></script>
        <script src="{{ URL::to('js/main.js') }}"></script>
    </head>

<!-- END -->

<body>

	<div id="header">

	<!-- YOU CAN CHANGE THE NAME ON THE TOP LEFT OF THE TEMPLATE HERE. AFTER THE *SPAN* THE TEXT BECOMES LIGHTER. KEEP THIS SHORT. TO ADD AN IMAGE WILL REQUIRE BASIC HTML KNOWLEDGE AND CSS TO ALTER THE HEIGHT OF THE HEADER AND POSITION FIXED MARGIN OFFSET OF #CONTAINER IN STYLE.CSS. -->

		<div class="logo"><a href="#">MHWD<span> Panel Template</span><span style="font-size: 0.45em;"> Version 1.0</span></a>
		</div>

		<!-- END -->

	<!-- YOU CAN CHANGE THE TEXT ON THE RIGHT HAND SIDE OF THE HEADER HERE -->

		<div class="powered">Template by MHWebDesigns.com</div>
	</div>
		<!-- END -->

			<!-- HERE YOU CAN CHANGE THE MENU OPTIONS -->
<div id="mhwebhold"></div>
<div id="hold">
	<a class="mobile" href="#">MENU</a></div></div>

	<div id="container">
		<div class="sidebar">
			<ul id="nav">
				<li><a  href="#1"> - Menu Option 1</a></li>
				<li><a  href="#2"> - Menu Option 2</a></li>	
				<li><a  href="#3"> - Menu Option 3</a></li>	
				<li><a  href="#4"> - Menu Option 4</a></li>
				<li><a  href="#5"> - Menu Option 5</a></li>
				<li><a  href="#6"> - Menu Option 6</a></li>	
				<li><a  href="#7"> - Menu Option 7</a></li>
				<li><a  href="#8"> - Menu Option 8</a></li>	
			</ul>
			<a class="menuclose" href="#">X Close Menu</a></div></div>
		</div>
	
    <div class="content">
            @yield('content')
  
			
				<div id="footer">
			<p>Copyright &#169; YourSite 2016</p>
			<p>Template created by <a href="http://www.mhwebdesigns.com" target="_blank">MHWebDesigns.com</a></p> <!-- DO NOT REMOVE -->

			</div>
			</div>

			
		</div>
		


		<!-- END -->

</body>

</html>