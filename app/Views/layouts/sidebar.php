<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= base_url(); ?>" class="brand-link">
        <!-- logoTS.jpg -->
        <img src="<?= base_url('dist/img/adminLTELogo.png') ?>" alt="AdminLTE Logo" class="brand-image elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">Sitem Presensi</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Admin</a>
            </div>
        </div>



        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="<?= base_url('/pelajaran') ?>" class="nav-link">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Pelajaran
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('/detailpelajaran') ?>" class="nav-link">
                        <i class="nav-icon fas fa-book-reader"></i>
                        <p>
                            Detail Pelajaran
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('/siswa') ?>" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Siswa
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('/pengajar') ?>" class="nav-link">
                        <i class="nav-icon fas fa-chalkboard-teacher"></i>
                        <p>
                            Pengajar
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('/pertemuan') ?>" class="nav-link">
                        <i class="nav-icon fas fa-people-arrows"></i>
                        <p>
                            Pertemuan
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('/detailpertemuan') ?>" class="nav-link">
                        <i class="nav-icon fas fa-clipboard-list"></i>
                        <p>
                            Detail Pertemuan
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

<div class="content-wrapper">