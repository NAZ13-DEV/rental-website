<header id="page-topbar">
    <div class="layout-width">
        <div class="navbar-header">
            <div class="d-flex">
                <!-- LOGO -->
                <div class="navbar-brand-box horizontal-logo">
                    <a href="index.html" class="no-underline logo logo-dark">
                        <span class="logo-sm">
                    QTC LIMITED
                        </span>
                        <span class="logo-lg">
                            QTC LIMITED
                        </span>
                    </a>

                    <a href="index.html" class="no-underline logo logo-light">
                        <span class="logo-sm">
                            <img src="/default/assets/images/logo-sm.png" alt="" height="22">
                        </span>
                        <span class="logo-lg">
                            <img src="/default/assets/images/logo-light.png" alt="" height="17">
                        </span>
                    </a>
                </div>

                <button type="button" class="px-3 btn btn-sm fs-16 header-item vertical-menu-btn topnav-hamburger" id="topnav-hamburger-icon">
                    <span class="hamburger-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </button>

                <!-- App Search-->
                <form class="app-search d-none d-md-block">
                    {{-- <div class="position-relative">
                        <input type="text" class="form-control" placeholder="Search..." autocomplete="off" id="search-options" value="">
                        <span class="mdi mdi-magnify search-widget-icon"></span>
                        <span class="mdi mdi-close-circle search-widget-icon search-widget-icon-close d-none" id="search-close-options"></span>
                    </div> --}}
                    <div class="dropdown-menu dropdown-menu-lg" id="search-dropdown">
                        <div data-simplebar style="max-height: 320px;">
                            <!-- item-->
                            <div class="dropdown-header">
                                <h6 class="mb-0 text-overflow text-muted text-uppercase">Recent Searches</h6>
                            </div>

                            <div class="bg-transparent dropdown-item text-wrap">
                                <a href="index.html" class="no-underline btn btn-soft-secondary btn-sm rounded-pill">how to setup <i class="mdi mdi-magnify ms-1"></i></a>
                                <a href="index.html" class="no-underline btn btn-soft-secondary btn-sm rounded-pill">buttons <i class="mdi mdi-magnify ms-1"></i></a>
                            </div>
                            <!-- item-->
                            <div class="mt-2 dropdown-header">
                                <h6 class="mb-1 text-overflow text-muted text-uppercase">Pages</h6>
                            </div>

                            <!-- item-->
                            <a href="javascript:void(0);" class="no-underline dropdown-item notify-item">
                                <i class="align-middle ri-bubble-chart-line fs-18 text-muted me-2"></i>
                                <span>Analytics Dashboard</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="no-underline dropdown-item notify-item">
                                <i class="align-middle ri-lifebuoy-line fs-18 text-muted me-2"></i>
                                <span>Help Center</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="no-underline dropdown-item notify-item">
                                <i class="align-middle ri-user-settings-line fs-18 text-muted me-2"></i>
                                <span>My account settings</span>
                            </a>

                            <!-- item-->
                            <div class="mt-2 dropdown-header">
                                <h6 class="mb-2 text-overflow text-muted text-uppercase">Members</h6>
                            </div>

                            <div class="notification-list">
                                <!-- item -->
                                <a href="javascript:void(0);" class="py-2 no-underline dropdown-item notify-item">
                                    <div class="d-flex">
                                        <img src="/default/assets/images/users/avatar-2.jpg" class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                        <div class="flex-grow-1">
                                            <h6 class="m-0">Angela Bernier</h6>
                                            <span class="mb-0 fs-11 text-muted">Manager</span>
                                        </div>
                                    </div>
                                </a>
                                <!-- item -->
                                <a href="javascript:void(0);" class="py-2 no-underline dropdown-item notify-item">
                                    <div class="d-flex">
                                        <img src="/default/assets/images/users/avatar-3.jpg" class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                        <div class="flex-grow-1">
                                            <h6 class="m-0">David Grasso</h6>
                                            <span class="mb-0 fs-11 text-muted">Web Designer</span>
                                        </div>
                                    </div>
                                </a>
                                <!-- item -->
                                <a href="javascript:void(0);" class="py-2 no-underline dropdown-item notify-item">
                                    <div class="d-flex">
                                        <img src="/default/assets/images/users/avatar-5.jpg" class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                        <div class="flex-grow-1">
                                            <h6 class="m-0">Mike Bunch</h6>
                                            <span class="mb-0 fs-11 text-muted">React Developer</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="pt-3 pb-1 text-center">
                            <a href="pages-search-results.html" class="no-underline btn btn-primary btn-sm">View All Results <i class="ri-arrow-right-line ms-1"></i></a>
                        </div>
                    </div>
                </form>
            </div>

            <div class="d-flex align-items-center">

                <div class="dropdown d-md-none topbar-head-dropdown header-item">
                    <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle" id="page-header-search-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="bx bx-search fs-22"></i>
                    </button>
                    <div class="p-0 dropdown-menu dropdown-menu-lg dropdown-menu-end" aria-labelledby="page-header-search-dropdown">
                        <form class="p-3">
                            <div class="m-0 form-group">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                    <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="ms-1 header-item d-none d-sm-flex">
                    <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle" data-toggle="fullscreen">
                        <i class='bx bx-fullscreen fs-22'></i>
                    </button>
                </div>

                <div class="ms-1 header-item d-none d-sm-flex">
                    <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle light-dark-mode">
                        <i class='bx bx-moon fs-22'></i>
                    </button>
                </div>



                <div class="dropdown ms-sm-3 header-item topbar-user">
                    <button type="button" class="btn" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="d-flex align-items-center">
                            <img class="rounded-circle header-profile-user" src="{{ $user->image ? $user->image : '/default/assets/images/users/user.png' }}" alt="Header Avatar">
                            <span class="text-start ms-xl-2">
                                <span class="d-none d-xl-inline-block ms-1 fw-medium user-name-text">{{ $user->name}}</span>
                                <span class="d-none d-xl-block ms-1 fs-12 user-name-sub-text">Admin</span>
                            </span>
                        </span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="page-header-user-dropdown">
                        <!-- item-->
                        <h6 class="dropdown-header">Welcome {{ $user->name}}!</h6>
                        <a class="no-underline dropdown-item" href="{{ route('admin.profile')}}"><span class="mt-1 badge bg-success-subtle text-success float-end"></span><i class="align-middle mdi mdi-cog-outline text-muted fs-16 me-1"></i> <span class="align-middle">Profile</span></a>
                        <form class="dropdown-item" method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button class="align-middle bg-none" data-key="t-logout" type="submit">
                                <i class="align-middle mdi mdi-logout text-muted fs-16 me-1"></i>
                                <span>
                                    Log Out
                                </span>
                            </button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</header>
