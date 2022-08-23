<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from codervent.com/syndash/demo/vertical/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Apr 2022 17:20:53 GMT -->

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>AshfakurRahmanFilemanager </title>
    <!--favicon-->
    <link rel="icon" href="{{ asset('dashboard') }}/assets/images/favicon-32x32.png" type="image/png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
        integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Vector CSS -->
    <link href="{{ asset('dashboard') }}/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
    <!--plugins-->
    <link href="{{ asset('dashboard') }}/assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
    <link href="{{ asset('dashboard') }}/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
    <link href="{{ asset('dashboard') }}/assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
    <!-- loader-->
    {{-- <link href="{{ asset('dashboard')}}/assets/css/pace.min.css" rel="stylesheet" />
	<script src="{{ asset('dashboard')}}/assets/js/pace.min.js"></script> --}}
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('dashboard') }}/assets/css/bootstrap.min.css" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&amp;family=Roboto&amp;display=swap" />
    <!-- Icons CSS -->
    <link rel="stylesheet" href="{{ asset('dashboard') }}/assets/css/icons.css" />
    <!-- App CSS -->
    <link rel="stylesheet" href="{{ asset('dashboard') }}/assets/css/app.css" />
    <link rel="stylesheet" href="{{ asset('dashboard') }}/assets/css/dark-sidebar.css" />
    <link rel="stylesheet" href="{{ asset('dashboard') }}/assets/css/dark-theme.css" />




    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css"
        rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="{{ asset('dashboard') }}/assets/css/style.css" />

</head>

<body>
    <!-- wrapper -->
    <div class="wrapper">
        <!--sidebar-wrapper-->
        <div class="sidebar-wrapper" data-simplebar="true">
            <div class="sidebar-header">
                <div class="">
                    <img src="{{ asset('dashboard') }}/assets/images/lUBA lOGO.png" class="logo-icon-2"
                        alt="" />
                </div>
                <div>
                    {{-- <h4 class="logo-text">Luba</h4> --}}
                </div>
                <a href="javascript:;" class="toggle-btn ms-auto"> <i class="bx bx-menu"></i>
                </a>
            </div>
            <!--navigation-->
            <ul class="metismenu" id="menu">
                <li>
                    <a href="{{ url('home') }}">
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
                        <li> <a href="{{ url('home') }}"><i class="bx bx-right-arrow-alt"></i>All File</a></li>
                        <li> <a href="{{ route('testmultiple.create') }}"><i class="bx bx-right-arrow-alt"></i>Upload
                                File</a></li>
                    </ul>
                </li>
            </ul>
            <!--end navigation-->
        </div>
        <!--end sidebar-wrapper-->
        <!--header-->
        <header class="top-header">
			<nav class="navbar navbar-expand">

				<div class="flex-grow-1 search-bar">
					<div class="input-group">
						 <input type="text" class="form-control" placeholder="search" />
						 <button class="btn btn-search" type="button"><i class="lni lni-search-alt"></i></button>
					</div>
				</div>
				<div class="right-topbar ms-auto">
					<ul class="navbar-nav">
						<li class="nav-item dropdown dropdown-user-profile">
							<a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;" data-bs-toggle="dropdown">
								<div class="d-flex user-box align-items-center">
									<div class="user-info">
										<p class="user-name mb-0">Jessica Doe</p>
										<p class="designattion mb-0">Available</p>
									</div>
									<img src="assets/images/avatars/avatar-1.png" class="user-img" alt="">
								</div>
							</a>
							<div class="dropdown-menu dropdown-menu-end">
								<a class="dropdown-item" href="javascript:;"><i
										class="bx bx-user"></i><span>Profile</span></a>
								<a class="dropdown-item" href="javascript:;"><i
										class="bx bx-tachometer"></i><span>Dashboard</span></a>

								<div class="dropdown-divider mb-0"></div>	<a class="dropdown-item" href="javascript:;"><i
										class="bx bx-power-off"></i><span>Logout</span></a>
							</div>
						</li>

					</ul>
				</div>
			</nav>
		</header>

    {{-- @guest
        @if (Route::has('login'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
        @endif

        @if (Route::has('register'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
        @endif
    @else --}}
        {{-- <a class="dropdown-item" href="{{ route('auth.logout') }}"
            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i
                class="bx bx-power-off"></i><span>Logout</span></a>

        <form id="logout-form" action="{{ route('auth.logout') }}" method="POST" class="d-none">
            @csrf
        </form>

    @endguest --}}
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
    <!--end page-wrapper-->
    <!--start overlay-->
    <div class="overlay toggle-btn-mobile"></div>
    <!--end overlay-->
    <!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i
            class='bx bxs-up-arrow-alt'></i></a>
    <!--End Back To Top Button-->
    <!--footer -->
    <div class="footer">
        <p class="mb-0">Syndash @2020 | Developed By : <a href="https://themeforest.net/user/codervent"
                target="_blank">codervent</a>
        </p>
    </div>
    <!-- end footer -->
    </div>
    <!-- end wrapper -->
    <!--start switcher-->
    {{-- <div class="switcher-body">
		<button class="btn btn-primary btn-switcher shadow-sm" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"><i class="bx bx-cog bx-spin"></i></button>
		<div class="offcanvas offcanvas-end shadow border-start-0 p-2" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling">
		  <div class="offcanvas-header border-bottom">
			<h5 class="offcanvas-title" id="offcanvasScrollingLabel">Theme Customizer</h5>
			<button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
		  </div>
		  <div class="offcanvas-body">
			<h6 class="mb-0">Theme Variation</h6>
			<hr>
			<div class="form-check form-check-inline">
			  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="lightmode" value="option1" checked>
			  <label class="form-check-label" for="lightmode">Light</label>
			</div>
			<hr>
			<div class="form-check form-check-inline">
			  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="darkmode" value="option2">
			  <label class="form-check-label" for="darkmode">Dark</label>
			</div>
			<hr>
			<div class="form-check form-check-inline">
				<input class="form-check-input" type="radio" name="inlineRadioOptions" id="darksidebar" value="option3">
				<label class="form-check-label" for="darksidebar">Semi Dark</label>
			  </div>
			  <hr>
			 <div class="form-check form-check-inline">
				<input class="form-check-input" type="radio" name="inlineRadioOptions" id="ColorLessIcons" value="option3">
				<label class="form-check-label" for="ColorLessIcons">Color Less Icons</label>
			  </div>
		  </div>
		</div>
	   </div> --}}
    <!--end switcher-->
    <!-- JavaScript -->

    <!-- Bootstrap JS -->
    <script src="{{ asset('dashboard') }}/assets/js/bootstrap.bundle.min.js"></script>

    <!--plugins-->
    <script src="{{ asset('dashboard') }}/assets/js/jquery.min.js"></script>
    <script src="{{ asset('dashboard') }}/assets/plugins/simplebar/js/simplebar.min.js"></script>
    <script src="{{ asset('dashboard') }}/assets/plugins/metismenu/js/metisMenu.min.js"></script>
    <script src="{{ asset('dashboard') }}/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
    <!-- Vector map JavaScript -->
    <script src="{{ asset('dashboard') }}/assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="{{ asset('dashboard') }}/assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="{{ asset('dashboard') }}/assets/plugins/vectormap/jquery-jvectormap-in-mill.js"></script>
    <script src="{{ asset('dashboard') }}/assets/plugins/vectormap/jquery-jvectormap-us-aea-en.js"></script>
    <script src="{{ asset('dashboard') }}/assets/plugins/vectormap/jquery-jvectormap-uk-mill-en.js"></script>
    <script src="{{ asset('dashboard') }}/assets/plugins/vectormap/jquery-jvectormap-au-mill.js"></script>
    <script src="{{ asset('dashboard') }}/assets/plugins/apexcharts-bundle/js/apexcharts.min.js"></script>
    <script src="{{ asset('dashboard') }}/assets/js/index.js"></script>
    <!-- App JS -->
    <script src="{{ asset('dashboard') }}/assets/js/app.js"></script>
    <script>
        new PerfectScrollbar('.dashboard-social-list');
        new PerfectScrollbar('.dashboard-top-countries');
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</body>


<!-- Mirrored from codervent.com/syndash/demo/vertical/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Apr 2022 17:21:01 GMT -->

</html>
