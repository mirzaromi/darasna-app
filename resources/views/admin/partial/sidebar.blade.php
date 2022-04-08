<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <img src="/assets/admin/dist/img/user2-160x160.jpg" class="img-circle elevation-2"
                alt="User Image">
        </div>
        <div class="info">
            <a href="/assets/admin/#" class="d-block">Admin</a>
        </div>
    </div>
    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
            data-accordion="false" >
            <!-- Add icons to the links using the .nav-icon class
   with font-awesome or any other icon font library -->
            <li class="nav-item">
                <a href="pages/widgets.html" class="nav-link {{ $title1 === 'dashboard' ? 'active' : '' }}">
                    <i class="nav-icon fas fa-chart-bar"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="nav-item menu-open">
                <a href="/admin/post" class="nav-link {{ $title1 === 'post' ? 'active' : '' }}">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        Post
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item ">
                        <a href="/admin/post" class="nav-link {{ $title2 === 'daftar_post' ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Daftar Post</p>
                        </a>
                    </li>                    
                </ul>
            </li>
            <li class="nav-item menu-open">
                <a href="/admin/user" class="nav-link {{ $title1 === 'user' ? 'active' : '' }}">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        User Admin
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item ">
                        <a href="/admin/user" class="nav-link {{ $title2 === 'daftar_user' ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Daftar User Admin</p>
                        </a>
                    </li>                    
                </ul>
            </li>
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>