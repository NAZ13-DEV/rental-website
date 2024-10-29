<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="{{ route("admin.dashboard")}}"  class="font-bold text-white logo logo-dark text-decoration-none fs-5">
            <span class="logo-sm">

            </span>
            <span class="logo-lg">
                QTC LIMITED
            </span>
        </a>
        <!-- Light Logo-->
        <a  href="{{ route("admin.dashboard")}}" class="font-bold text-white logo logo-light text-decoration-none fs-5">
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
            <ul class="navbar-nav" id="navbar-nav">
                <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                <ul class="nav nav-sm flex-column">
                    <ul class="nav nav-sm flex-column">
                        <li class="nav-item"><a href="{{ route('admin.dashboard')}}" class="nav-link" data-key="t-products"><i class="ri-dashboard-2-line"></i> <span data-key="t-dashboards">Dashboards</span></a></li>
                        <li class="nav-item"><a href="{{ route('admin.products')}}" class="nav-link" data-key="t-products"> <i class="ri-dashboard-2-line"></i> <span data-key="t-dashboards">Products</span></a></li>
                        <li class="nav-item"><a href="{{ route('admin.create')}}" class="nav-link" data-key="t-create-product"> <i class="ri-dashboard-2-line"></i> <span data-key="t-dashboards">Create Product</span></a></li>
                        <li class="nav-item"><a href="{{ route('admin.orders')}}" class="nav-link" data-key="t-orders"> <i class="ri-dashboard-2-line"></i> <span data-key="t-dashboards">Orders</span></a></li>
                        <li class="nav-item"><a href="{{ route('admin.customers')}}" class="nav-link" data-key="t-customers"><i class="ri-dashboard-2-line"></i> <span data-key="t-dashboards">Customers</span></a></li>
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
