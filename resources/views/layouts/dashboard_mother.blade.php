<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from codervent.com/syndash/demo/vertical/index2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Apr 2022 16:45:51 GMT -->
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<title>ashfakurrahman @yield('dashboard_bar')</title>

	<link rel="stylesheet" href="{{ asset('dashboard')}}/assets/css/bootstrap.min.css" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&amp;family=Roboto&amp;display=swap" />
	<link rel="stylesheet" href="{{ asset('dashboard')}}/assets/css/icons.css" />
    <link href="{{ asset('dashboard')}}/assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="{{asset('dashboard')}}/assets/css/app.css" />

</head>

<body>
	<!-- wrapper -->
	<div class="wrapper">
		<!--sidebar-wrapper-->
		<div class="sidebar-wrapper" data-simplebar="true">

			<!--navigation-->
			<ul class="metismenu" id="menu">
                <li>
					<a href="{{ url('testmultiple') }}">
						<div class="parent-icon icon-color-5"><i class="bx bx-home-alt"></i></div>
						<div class="menu-title">Dashboard</div>
					</a>
				</li>
				<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon icon-color-5"><i class="bx bx-archive"></i></div>
						<div class="menu-title">File Manager</div>
					</a>
					<ul>
						<li> <a href="{{ url('testmultiple') }}"><i class="bx bx-right-arrow-alt"></i>All File</a></li>
						<li> <a href="{{ route('testmultiple.create') }}"><i class="bx bx-right-arrow-alt"></i>Upload File</a></li>
					</ul>
				</li>
			</ul>
			<!--end navigation-->
		</div>
		<!--end sidebar-wrapper-->
		<!--header-->
		<header class="top-header">
			<nav class="navbar navbar-expand">
				<div class="left-topbar d-flex align-items-center">
					<a href="javascript:;" class="toggle-btn">	<i class="bx bx-menu"></i>
					</a>
				</div>
			</nav>
		</header>
		<!--end header-->
		<!--page-wrapper-->
		<div class="page-wrapper">
			<!--page-content-wrapper-->
			<div class="page-content-wrapper">
				<div class="page-content">
                    @yield('content')
				</div>
			</div>
			<!--end page-content-wrapper-->
		</div>
		<div class="overlay toggle-btn-mobile"></div>

		<div class="footer">
			<p class="mb-0">{{ date('Y')}} | Developed By : <a href="" target="_blank">codervent</a>
			</p>
		</div>
		<!-- end footer -->
	</div>
	<!--start switcher-->

    @yield('footer_script')

	<script src="//unpkg.com/alpinejs" defer></script>
</body>
</html>


