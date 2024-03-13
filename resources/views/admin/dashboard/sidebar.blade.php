<body data-sidebar="dark" data-layout-mode="light" style="background-color: #eaeaea;">

    <!-- Begin page -->
    <div id="layout-wrapper">

        <header id="page-topbar">
            <div class="navbar-header">
                <div class="d-flex">
                    <div class="navbar-brand-box">
                        <a href="../admin/index.html" class="text-light">
                            <span class="d-none d-xl-inline-block ms-1" key="t-siswa">
                                <h3 class="mt-3">
                                    
                                    {{-- {{ Auth::guard('koordinator')->user()->nama_koor }} --}}

                                    @if (Route::has('login'))
                                        @auth
                                            {{ Auth::user()->name }}
                                        @endauth
                                    @endif
                                </h3>
                            </span>
                        </a>
                    </div>

                    <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect" id="vertical-menu-btn">
                        <i class="fa fa-fw fa-bars"></i>
                    </button>

                    <!-- App Search-->
                    <form class="app-search d-none d-lg-block">
                        <div class="position-relative">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="bx bx-search-alt"></span>
                        </div>
                    </form>

                </div>

                <div class="d-flex">

                    <div class="dropdown d-inline-block d-lg-none ms-2">
                        <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="mdi mdi-magnify"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                            aria-labelledby="page-header-search-dropdown">
    
                            <form class="p-3">
                                <div class="form-group m-0">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    
                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        @if (Route::has('login'))
                            @auth
                                <img class="rounded-circle header-profile-user"
                                    src="{{ asset('storage/' . auth()->user()->image) }}"
                                    alt="Header Avatar">
                            @else
                                <img class="rounded-circle header-profile-user"
                                    src="{{ asset('peminjam') }}/assets/images/users/avatar-1.jpg"
                                    alt="Header Avatar">
                            @endauth
                        @endif
                            <span class="d-none d-xl-inline-block ms-1" key="t-henry">
                                {{-- {{ Auth::guard('koordinator')->user()->nama_koor }} --}}
                                @if (Route::has('login'))
                                    @auth
                                        {{ Auth::user()->name }}
                                    @endauth
                                @endif
                            </span>
                            <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end">
                            <!-- item-->
                            <a class="dropdown-item" href="#"><i class="bx bx-user font-size-16 align-middle me-1"></i> <span key="t-profile">Profile</span></a>
                            <a class="dropdown-item" href="#"><i class="bx bx-wallet font-size-16 align-middle me-1"></i> <span key="t-my-wallet">My Wallet</span></a>
                            <a class="dropdown-item d-block" href="#"><span class="badge bg-success float-end">11</span><i class="bx bx-wrench font-size-16 align-middle me-1"></i> <span key="t-settings">Settings</span></a>
                            <a class="dropdown-item" href="#"><i class="bx bx-lock-open font-size-16 align-middle me-1"></i> <span key="t-lock-screen">Lock screen</span></a>
                            <div class="dropdown-divider"></div>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="dropdown-item text-danger"> <i class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i>Logout</button>
                            </form>                            
                        </div>
                    </div>
                    
                    <div class="dropdown d-none d-lg-inline-block ms-1">
                        <button type="button" class="btn header-item noti-icon waves-effect" data-bs-toggle="fullscreen">
                            <i class="bx bx-fullscreen"></i>
                        </button>
                    </div>

                </div>
            </div>
        </header>

        <!-- ========== Left Sidebar Start ========== -->
        <div class="vertical-menu">

            <div data-simplebar class="h-100">

                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="metismenu list-unstyled" id="side-menu">
                        <li class="menu-title" key="t-menu">Menu</li>

                        <li>
                            <a href="/dashboard" class="waves-effect">
                                <i class="bx bx-home-circle"></i>
                                <span key="t-dashboards">Dashboards</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="bx bx-list-ul"></i>
                                <span key="t-data-tables">Master Data</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="#" key="t-basic-tables">Data Barang Masuk</a></li>
                                <li><a href="#" key="t-basic-tables">Data Barang Keluar</a></li>
                                <li><a href="/penyedia" key="t-data-tables">Data Penyedia</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="waves-effect">
                                <i class="mdi mdi-book-education-outline"></i>
                                <span key="t-layouts">Total Stok</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="waves-effect">
                                <i class="fas fa-poll-h"></i>
                                <span key="t-tables">Generate Laporan</span>
                            </a>
                        </li>

                    </ul>
                </div>
                <!-- Sidebar -->
            </div>
        </div>
        <!-- Left Sidebar End -->

        
