<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>@yield('title')</title>
    <link rel="icon" type="image/x-icon" href="/images/favicon.ico">

    @stack('prepend-style')
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link href="/style/main.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/v/bs4/dt-1.13.6/datatables.min.css" rel="stylesheet">

    @stack('addon-style')
</head>

<body style="max-width: 100vw;">
    <div class="page-dashboard">
        <div class="d-flex" id="wrapper" data-aos="fade-right">
            <!-- Sidebar -->
            <div class="dashboard">
                <div class="dashboard-nav">
                    <header>
                        <a href="#!" class="menu-toggle">
                            <img src="/images/dashboard/close.svg" alt="" srcset="" class="menu-logo"></a>
                        <a href="#" class="brand-logo">
                            <img src="/images/dashboard/logo-webcare.svg" alt="" srcset=""
                                class="logo-dashboard">
                            <span>
                                <p class="title-dashboard my-auto" style="color: white;">
                                    Client Portal
                                </p>
                            </span>
                        </a>
                    </header>
                    <nav class="dashboard-nav-list">
                        <div>
                            <a href="{{ route('admin-dashboard') }}"
                                class="dashboard-nav-item  {{ request()->is('admin') ? 'active-item' : '' }}">
                                <svg class="menu-icon menu-icon-normal" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M4 13h6c.55 0 1-.45 1-1V4c0-.55-.45-1-1-1H4c-.55 0-1 .45-1 1v8c0 .55.45 1 1 1zm0 8h6c.55 0 1-.45 1-1v-4c0-.55-.45-1-1-1H4c-.55 0-1 .45-1 1v4c0 .55.45 1 1 1zm10 0h6c.55 0 1-.45 1-1v-8c0-.55-.45-1-1-1h-6c-.55 0-1 .45-1 1v8c0 .55.45 1 1 1zM13 4v4c0 .55.45 1 1 1h6c.55 0 1-.45 1-1V4c0-.55-.45-1-1-1h-6c-.55 0-1 .45-1 1z" />
                                </svg>
                                <p class="menu-font ml-1 my-auto  {{ request()->is('admin') ? 'active-menu' : '' }}">
                                    Dashboard
                                </p>
                            </a>
                        </div>

                        <!-- <div class="dashboard-nav-dropdown"> -->
                        <!-- <a href="#!" class="dashboard-nav-item dashboard-nav-dropdown-toggle"> -->
                        <a href="{{ route('client.index') }}"
                            class="dashboard-nav-item {{ request()->is('admin/client*') ? 'active-item' : '' }}">
                            <svg class="menu-icon menu-icon-normal" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 512 512">
                                <path
                                    d="M336 256c-20.56 0-40.44-9.18-56-25.84c-15.13-16.25-24.37-37.92-26-61c-1.74-24.62 5.77-47.26 21.14-63.76S312 80 336 80c23.83 0 45.38 9.06 60.7 25.52c15.47 16.62 23 39.22 21.26 63.63c-1.67 23.11-10.9 44.77-26 61C376.44 246.82 356.57 256 336 256Zm66-88Zm65.83 264H204.18a27.71 27.71 0 0 1-22-10.67a30.22 30.22 0 0 1-5.26-25.79c8.42-33.81 29.28-61.85 60.32-81.08C264.79 297.4 299.86 288 336 288c36.85 0 71 9 98.71 26.05c31.11 19.13 52 47.33 60.38 81.55a30.27 30.27 0 0 1-5.32 25.78A27.68 27.68 0 0 1 467.83 432ZM147 260c-35.19 0-66.13-32.72-69-72.93c-1.42-20.6 5-39.65 18-53.62c12.86-13.83 31-21.45 51-21.45s38 7.66 50.93 21.57c13.1 14.08 19.5 33.09 18 53.52c-2.87 40.2-33.8 72.91-68.93 72.91Zm65.66 31.45c-17.59-8.6-40.42-12.9-65.65-12.9c-29.46 0-58.07 7.68-80.57 21.62c-25.51 15.83-42.67 38.88-49.6 66.71a27.39 27.39 0 0 0 4.79 23.36A25.32 25.32 0 0 0 41.72 400h111a8 8 0 0 0 7.87-6.57c.11-.63.25-1.26.41-1.88c8.48-34.06 28.35-62.84 57.71-83.82a8 8 0 0 0-.63-13.39c-1.57-.92-3.37-1.89-5.42-2.89Z" />
                            </svg>
                            <p class="menu-font ml-1 my-auto {{ request()->is('admin/client*') ? 'active-menu' : '' }}">
                                Client
                            </p>
                        </a>

                        <a href="{{ route('tutorial.index') }}"
                            class="dashboard-nav-item {{ request()->is('admin/tutorial*') ? 'active-item' : '' }}">

                            <svg class="menu-icon menu-icon-normal" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 576 512">
                                <path
                                    d="M549.7 124.1c-6.3-23.7-24.8-42.3-48.3-48.6C458.8 64 288 64 288 64S117.2 64 74.6 75.5c-23.5 6.3-42 24.9-48.3 48.6-11.4 42.9-11.4 132.3-11.4 132.3s0 89.4 11.4 132.3c6.3 23.7 24.8 41.5 48.3 47.8C117.2 448 288 448 288 448s170.8 0 213.4-11.5c23.5-6.3 42-24.2 48.3-47.8 11.4-42.9 11.4-132.3 11.4-132.3s0-89.4-11.4-132.3zm-317.5 213.5V175.2l142.7 81.2-142.7 81.2z" />
                            </svg>
                            <p
                                class="menu-font ml-1 my-auto {{ request()->is('admin/tutorial*') ? 'active-menu' : '' }}">
                                Video Tutorial
                            </p>
                        </a>

                        <a href="{{ route('user.index') }}"
                            class="dashboard-nav-item {{ request()->is('admin/user*') ? 'active-item' : '' }}">
                            <svg class="menu-icon menu-icon-normal" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 512 512">
                                <path
                                    d="M336 256c-20.56 0-40.44-9.18-56-25.84c-15.13-16.25-24.37-37.92-26-61c-1.74-24.62 5.77-47.26 21.14-63.76S312 80 336 80c23.83 0 45.38 9.06 60.7 25.52c15.47 16.62 23 39.22 21.26 63.63c-1.67 23.11-10.9 44.77-26 61C376.44 246.82 356.57 256 336 256Zm66-88Zm65.83 264H204.18a27.71 27.71 0 0 1-22-10.67a30.22 30.22 0 0 1-5.26-25.79c8.42-33.81 29.28-61.85 60.32-81.08C264.79 297.4 299.86 288 336 288c36.85 0 71 9 98.71 26.05c31.11 19.13 52 47.33 60.38 81.55a30.27 30.27 0 0 1-5.32 25.78A27.68 27.68 0 0 1 467.83 432ZM147 260c-35.19 0-66.13-32.72-69-72.93c-1.42-20.6 5-39.65 18-53.62c12.86-13.83 31-21.45 51-21.45s38 7.66 50.93 21.57c13.1 14.08 19.5 33.09 18 53.52c-2.87 40.2-33.8 72.91-68.93 72.91Zm65.66 31.45c-17.59-8.6-40.42-12.9-65.65-12.9c-29.46 0-58.07 7.68-80.57 21.62c-25.51 15.83-42.67 38.88-49.6 66.71a27.39 27.39 0 0 0 4.79 23.36A25.32 25.32 0 0 0 41.72 400h111a8 8 0 0 0 7.87-6.57c.11-.63.25-1.26.41-1.88c8.48-34.06 28.35-62.84 57.71-83.82a8 8 0 0 0-.63-13.39c-1.57-.92-3.37-1.89-5.42-2.89Z" />
                            </svg>
                            <p class="menu-font ml-1 my-auto {{ request()->is('admin/user*') ? 'active-menu' : '' }}">
                                User
                            </p>
                        </a>


                        {{-- <div class="nav-item-divider" style="margin-top: 40vh;"></div> --}}
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();"
                            class="dashboard-nav-item" style="margin-top: 25vh;">
                            <svg class="menu-icon menu-icon-normal" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24">
                                <path
                                    d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10s-4.477 10-10 10ZM7 11V8l-5 4l5 4v-3h8v-2H7Z" />
                            </svg>
                            <p class="menu-font ml-1 my-auto">
                                Log Out
                            </p>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                style="display: none;">
                                @csrf
                            </form>
                        </a>
                    </nav>
                </div>
                <div class="dashboard-app">
                    <header class="dashboard-toolbar justify-content-between">
                        <a href="#!" class="menu-toggle">
                            <img src="/images/dashboard/menu.svg" alt="" srcset="" class="menu-logo">
                        </a>

                        <div class="mr-3">
                            <ul class="navbar-nav ml-auto d-none d-lg-flex">
                                <li class="nav-item dropdown">
                                    <a class="nav-link d-flex" href="#" id="navbarDropdown" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img src="{{ Storage::url(Auth::user()->photo) }}" alt=""
                                            class="rounded-circle mr-2 profile-picture" />
                                        <div class="d-block my-auto">
                                            <p class="name-user my-auto">
                                                Hi, {{ Auth::user()->name }}
                                            </p>
                                            <p class="status-user my-auto">Administrator</p>
                                        </div>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        {{-- <a class="dropdown-item" href="/dashboard-account.html">Settings</a> --}}
                                        {{-- <div class="dropdown-divider"></div> --}}
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">

                                            Logout
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                style="display: none;">
                                                @csrf
                                            </form>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </header>

                </div>
            </div>
            <!-- /#sidebar-wrapper -->



            <!-- Page Content -->
            <div class="dashboard-content" data-aos="fade-up">
                <div class="dashboard-top mr-4 ml-4" style="margin-top: 20vh; margin-bottom: 10vh;">

                    <!-- Content -->
                    @yield('content')

                </div>


            </div>

            <!-- /#page-content-wrapper -->
        </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    @stack('prepend-script')
    <script src="/vendor/jquery/jquery.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/v/bs4/dt-1.13.6/datatables.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script src="/script/popper.js"></script>
    <script src="/script/main.js"></script>
    <script src="/script/dashboard.js"></script>

    <script>
        AOS.init();
    </script>
    <!-- Menu Toggle Script -->
    <script>
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
    </script>
    @stack('addon-script')
</body>

</html>
