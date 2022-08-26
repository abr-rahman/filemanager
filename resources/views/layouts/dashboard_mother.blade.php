<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>luba</title>
    <!--favicon-->
    @include('layouts._header')

</head>

<body>
    <!-- wrapper -->
    <div class="wrapper">
        <!--sidebar-wrapper-->
        <div class="sidebar-wrapper" data-simplebar="true">
            <div class="sidebar-header">
                <div class="">
                    <img src="{{ asset('dashboard') }}/assets/images/lUBA lOGO.png" class="logo-icon-2" alt="" />
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
                            <a class="nav-link dropdown-toggle-nocaret" data-bs-toggle="dropdown">
                                <div class="d-flex user-box align-items-center">
                                    <div class="user-info">
                                        <p class="user-name mb-0">{{ Auth::user()->name }}</p>
                                        <p class="designattion mb-0">Available</p>
                                    </div>
                                    <img src="{{ URL::asset('uploads/profile_photo/profile_photo.jpg') }}" class="user-img"
                                        alt="">
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="{{ route('profile') }}" id="btn1"><i
                                        class="bx bx-user"></i><span>Profile</span></a>

                                {{-- profile modal start --}}


                                {{-- profile modal end --}}
                                <div class="dropdown-divider mb-0"></div>
                                @guest
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
                        @else
                            <a class="dropdown-item" href="{{ route('auth.logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i
                                    class="bx bx-power-off"></i><span>Logout</span></a>

                            <form id="logout-form" action="{{ route('auth.logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>

                        @endguest
                </div>
                </li>

                </ul>
    </div>
    </nav>
    </header>

    <!--end header-->
    <!--page-wrapper-->
    <div class="page-wrapper">
        <!--page-content-wrapper-->
        <div class="page-content-wrapper">
            <div class="page-content" style="padding: 0rem 0rem 0rem 1rem;">

                @yield('content')

            </div>
        </div>
        <!--end page-content-wrapper-->
    </div>

    <div class="overlay toggle-btn-mobile"></div>
    <!--end overlay-->
    <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>

    <!--footer -->
    <div class="footer">
        <p class="mb-0">Luba 2022 | Developed By : <a href="#" target="_blank">luba</a>
        </p>
    </div>
    <!-- end footer -->
    </div>


    <!-- Bootstrap JS -->

    @include('layouts._script')
    @yield('footerScript')

</body>


<!-- Mirrored from codervent.com/syndash/demo/vertical/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Apr 2022 17:21:01 GMT -->

</html>
