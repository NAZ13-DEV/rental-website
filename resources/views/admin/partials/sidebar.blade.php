<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="{{ route('admin.dashboard') }}" class="font-bold text-white logo logo-dark text-decoration-none fs-5">
            <span class="logo-sm">

            </span>
            <span class="logo-lg">
                QTC LIMITED
            </span>
        </a>
        <!-- Light Logo-->
        <a href="{{ route('admin.dashboard') }}" class="font-bold text-white logo logo-light text-decoration-none fs-5">
            <span class="logo-sm">

            </span>
            <span class="logo-lg">
                QTC LIMITED
            </span>
        </a>
        <button type="button" class="p-0 btn btn-sm fs-20 header-item float-end btn-vertical-sm-hover"
            id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="list-none navbar-nav" id="navbar-nav">
                <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                <ul class="list-none nav nav-sm flex-column">
                    <ul class="list-none nav nav-sm flex-column ">
                        <li class="nav-item"><a href="{{ route('admin.dashboard') }}" class="nav-link"
                                data-key="t-products"><i class="bi bi-speedometer"></i> <span
                                    data-key="t-dashboards">Dashboards</span></a></li>
                        <li class="nav-item"><a href="{{ route('admin.products') }}" class="nav-link"
                                data-key="t-products"> <i class="bi bi-bag"></i> <span
                                    data-key="t-dashboards">Products</span></a></li>
                        <li class="nav-item"><a href="{{ route('admin.addCategory') }}" class="nav-link"
                                data-key="t-products"> <i class="bi bi-folder-plus"></i> <span data-key="t-dashboards">
                                    Add Category</span></a></li>
                        <li class="nav-item"><a href="{{ route('admin.categories') }}" class="nav-link"
                                data-key="t-products"> <i class="bi bi-tags"></i> <span data-key="t-dashboards">
                                    Categories </span></a></li>
                        <li class="nav-item"><a href="{{ route('admin.addLocation') }}" class="nav-link"
                                data-key="t-products">
                                <div class="d-inline-flex align-items-center">
                                    <i class="bi bi-plus-circle ms-1"></i>
                                </div>
                                <span data-key="t-dashboards"> Add Location </span>
                            </a></li>
                        <li class="nav-item"><a href="{{ route('admin.locations') }}" class="nav-link"
                                data-key="t-products"> <i class="bi bi-geo-alt"></i> <span data-key="t-dashboards">
                                    Locations </span></a></li>
                        <li class="nav-item"><a href="{{ route('admin.create') }}" class="nav-link"
                                data-key="t-create-product"> <i class="bi bi-cart-plus"></i> <span
                                    data-key="t-dashboards">Create Product</span></a></li>
                        <li class="nav-item"><a href="{{ route('admin.orders') }}" class="nav-link" data-key="t-orders">
                                <i class="bi bi-clipboard-check"></i> <span data-key="t-dashboards">Orders</span></a>
                        </li>
                        <li class="nav-item"><a href="{{ route('admin.customers') }}" class="nav-link"
                                data-key="t-customers"><i class="bi bi-people"></i> <span
                                    data-key="t-dashboards">Customers</span></a></li>
                    </ul>
                </ul>
            </ul>

        </div>
        </li>
        </ul>
    </div>
    </li>
    </ul>
</div>
</li>

</ul>
</div>
<!-- Sidebar -->
</div>

<div class="sidebar-background"></div>
</div>
