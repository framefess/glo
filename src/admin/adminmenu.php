
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="admin.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    GLO
                    <!-- <i class="fas fa-laugh-wink"></i> -->
                </div>
                <!-- <div class="sidebar-brand-text mx-3">GLO</div> -->
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="admin.php">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>จัดการกิจกรรม</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="adminteam.php">
                    <i class="fas fa-fw fa-users"></i>
                    <span>ทีม</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="adminmvote.php">
                    <i class="fas fa-fw fa-poll-h"></i>
                    <span>การโหวต</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="adminuservote.php">
                    <i class="fas fa-fw fa-th-list"></i>
                    <span>ผู้โหวต</span></a>
            </li>
            <!-- Divider -->
            <!-- <hr class="sidebar-divider"> -->

            <!-- Heading -->
            <!-- <div class="sidebar-heading">
                Interface
            </div> -->


            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">ผู้ดูแล</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php" >
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>Logout</span>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- End of Topbar -->