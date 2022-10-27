<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex justify-content-center">
        <div class="image">
            <img src="{{asset(path_profile_image().Auth::guard('admin')->user()->image)}}" class="img-circle elevation-2"
                 alt="User Image">
        </div>
        <div class="info">
            <a href="{{route('admin.profile')}}" class="d-block" class="text-center"> @if(Auth::guard('admin')->check())
                    {{Auth::guard('admin')->user()->name  }}

                @else
                @endif</a>
        </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
    <!--Dashboard-->
            <li class="nav-item">
                <a href="{{route('admin.dashboard')}}"
                   class="nav-link {{ isset($pageSettings['page_title']) && $pageSettings['page_title'] == 'Admin Dashboard' ?'active open':''}}">
                    <i class="nav-icon fas fa-th"></i>
                    <p>
                        Dashboard

                    </p>
                </a>
            </li>

    <!--Product-->

            <li class="nav-item">
                <a href="{{route('admin.product.list')}}"
                   class="nav-link {{ isset($pageSettings['page_title']) && $pageSettings['page_title'] == 'Product' ?'active open':''}}">
                   <i class="fas fa-gifts"></i>
                    <p>

                        Products
                        
                    </p>
                </a>
            </li>

    <!--Test-->  

            <li class="nav-item">
                <a href="{{route('admin.test.list')}}"
                   class="nav-link {{ isset($pageSettings['page_title']) && $pageSettings['page_title'] == 'Test' ?'active open':''}}">
                   <i class="fas fa-deaf"></i>
                    <p>
                        Tests
                        
                    </p>
                </a>
            </li>

            <!--Appointment-->

            <li class="nav-item">
                <a href="{{route('admin.appointment')}}"
                   class="nav-link {{ isset($menu) && $menu == 'appoinment' ? 'active' : ''}}">
                    <i class="fas fa-book-reader"></i>
                    <p>
                        Appointment
                        <span class="right badge badge-danger"></span>
                    </p>
                </a>
            </li>
            <!--Test Appointment-->

            <li class="nav-item">
                <a href="{{route('admin.test.appointment')}}"
                   class="nav-link {{ isset($pageSettings['page_title']) && $pageSettings['page_title'] == 'Test Appointment' ?'active open':''}}">
                    <i class="fas fa-book-medical"></i>
                    <p>
                        Test Appointment
                        <span class="right badge badge-danger"></span>
                    </p>
                </a>
            </li>

            <!--Order-->

            <li class="nav-item">
                <a href="{{route('admin.orders')}}"
                   class="nav-link {{ isset($pageSettings['page_title']) && $pageSettings['page_title'] == 'Orders' ?'active open':''}}">
                    <i class="fas fa-cart-arrow-down"></i>
                    <p>
                        Orders
                        <span class="right badge badge-danger"></span>
                    </p>
                </a>
            </li>

    <!--Settings-->

            <li class="nav-item has-treeview">
                <a href="#"
                   class="nav-link {{isset($pageSettings['page_title']) && $pageSettings['page_title'] == 'General Settings' ?'active open':''}} ">
                    <i class="nav-icon fa fa-cogs"></i>
                    <p>
                        Settings
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">

                    <li class="nav-item">
                        <a href="{{route('admin.profile')}}"
                           class="nav-link {{isset($pageSettings['page_title']) && $pageSettings['page_title'] ==  'Profile' ? 'active' : ''  }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Profile</p>
                        </a>
                    </li>

                </ul>
            </li>

            <li class="nav-item">
                <a href="{{route('admin.logout')}}"
                   class="nav-link {{ isset($pageSettings['page_title']) && $pageSettings['page_title'] == 'logout' ?'active':''}}">
                    <i class="nav-icon fas fa-sign-out-alt"></i>
                    <p>
                        Logout
                    </p>
                </a>
            </li>

        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
