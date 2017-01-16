<!DOCTYPE html>
<html>
<head>
	<title>P2IG: Admin Page</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	 <!-- Bootstrap Core CSS -->
	<link rel="stylesheet" href="{{ url('css') }}/bootstrap.min.css"/>
	<!-- Custom CSS -->
	<link href="{{ url('css') }}/style.css" rel='stylesheet' type='text/css' />
	<!-- Graph CSS -->
	<link href="{{ url('css') }}/lines.css" rel='stylesheet' type='text/css' />
	<link href="{{ url('css') }}/font-awesome.css" rel="stylesheet"> 
	<!-- jQuery -->
	<script src="{{ url('js') }}/jquery.min.js"></script>
	<!----webfonts--->
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
	<!---//webfonts--->  
	<!-- Nav CSS -->
	<link href="{{ url('css') }}/custom.css" rel="stylesheet">
	<!-- Metis Menu Plugin JavaScript -->
	<script src="{{ url('js') }}/metisMenu.min.js"></script>
	<script src="{{ url('js') }}/custom.js"></script>
	<!-- Graph JavaScript -->
	<script src="{{ url('js') }}/d3.v3.js"></script>
	<script src="{{ url('js') }}/rickshaw.js"></script>
</head>
<body>
<div id="wrapper">
	<!-- navigation -->
	<nav class="top1 navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{url('admin')}}">P2IG UNTAN</a>
		</div>
		<ul class="nav navbar-nav navbar-right">
			<!-- Authentication Links -->
                    @if (Auth::guard('admin')->check())
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::guard('admin')->user()->name }}
                                <!-- <span class="caret"></span> -->
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/admin/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @else
                        <li><a href="{{ url('/admin/login') }}">Login</a></li>
                        <li><a href="{{ url('/admin/register') }}">Register</a></li>
                    @endif
		</ul>
		<!-- <form class="navbar-form navbar-right">
            <input type="text" class="form-control" value="Search..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search...';}">
        </form> -->
        <div class="navbar-default sidebar" role="navigation">
        	<div class="sidebar-nav navbar-collapse">
        		<ul class="nav" id="side-menu">
        			<li>
                    	<a href="{{ url('admin') }}"><i class="fa fa-dashboard fa-fw nav_icon"></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="{{ url('admin/surveys/1/edit') }}"><i class="fa fa-question nav_icon"></i>Kuesioner</a>
                    </li>
                    <li>
                    	<a href="{{ url('admin/daerah') }}"><i class="fa fa-map-marker nav_icon"></i>Daerah</a>
                    </li>
                    <li>
                    	<a href="{{ url('admin/responden') }}"><i class="fa fa-users nav_icon"></i>Data Responden</a>
                    </li>
                    <li>
                    	<a href="{{ url('admin/respon') }}"><i class="fa fa-comments nav_icon"></i>Tanggapan</a>
                    </li>
        		</ul>
        	</div>
        </div>
	</nav>
	<!-- navbar -->
	<div id="page-wrapper">
		<div class="graphs">
			@yield('content')	
		</div>
		<div class="copy">
        	<p>Copyright &copy; 2016 P2IG Untan | Design by <a href="https://github.com/fxlik" target="_blank">Felik</a> </p>
	    </div>
	</div>
	<!-- page-wrapper -->
</div>
<!-- wrapper -->

	<script src="{{ url('js') }}/bootstrap.min.js"></script>
</body>
</html>