<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex justify-content-center">
        <div class="image">
            <img src="" class="img-circle elevation-2"
                 alt="User Image">
        </div>
        <div class="info">
            <a href="" class="d-block" class="text-center">
                    </a>
        </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
    <!--Dashboard-->
            <li class="nav-item">
                <a href=""
                   class="nav-link ">
                    <i class="nav-icon fas fa-th"></i>
                    <p>
                        Dashboard

                    </p>
                </a>
            </li>

    <!--Product-->

            <li class="nav-item">
                <a href=""
                   class="nav-link ">
                   <i class="fas fa-gifts"></i>
                    <p>

                        Products
                        
                    </p>
                </a>
            </li>

    <!--Test-->  

            <li class="nav-item">
                <a href=""
                   class="nav-link ">
                   <i class="fas fa-deaf"></i>
                    <p>
                        Tests
                        
                    </p>
                </a>
            </li>

            <!--Appointment-->

            <li class="nav-item">
                <a href="{{ route('appoinment.list') }}"
                   class="nav-link ">
                    <i class="fas fa-book-reader"></i>
                    <p>
                        Appointment
                        <span class="right badge badge-danger"></span>
                    </p>
                </a>
            </li>
            <!--Test Appointment-->

            <li class="nav-item">
                <a href=""
                   class="nav-link ">
                    <i class="fas fa-book-medical"></i>
                    <p>
                        Test Appointment
                        <span class="right badge badge-danger"></span>
                    </p>
                </a>
            </li>

            <!--Order-->

            <li class="nav-item">
                <a href=""
                   class="nav-link ">
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
                   class="nav-link ">
                    <i class="nav-icon fa fa-cogs"></i>
                    <p>
                        Settings
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">

                    <li class="nav-item">
                        <a href=""
                           class="nav-link ">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Profile</p>
                        </a>
                    </li>

                </ul>
            </li>

            <li class="nav-item">
                <a href=""
                   class="nav-link ">
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
