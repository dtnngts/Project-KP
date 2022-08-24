<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                <img class="img-profile rounded-circle"
                             src="/assets/images/logo.png" width=50px;>
                </div>
                <div class="sidebar-brand-text mx-3"> Princess Solution <sup></sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="/admin">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Data Kursus</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Data Kursus:</h6>
                        <a class="collapse-item" href="/siswa">Siswa Kursus</a>
                        <a class="collapse-item" href="/alumni">Alumni Kursus</a>
                    </div>
                </div>
            </li>
            
            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Admin</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Data Admin:</h6>
                        <a class="collapse-item" href="/inputadmin">Tambah Data Admin</a>
                        <a class="collapse-item" href="/lihatadmin">Lihat Data Admin</a>
                    </div>
                </div>
            </li>

            

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="/jadwal">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Jadwal</span></a>
            </li>

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

                    <!-- Topbar Search -->
                    <div class="col-4">
                        <ul class="navbar-nav ml-auto">
                            <form action="" method="get" class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-5 my-md-0 mw-100 navbar-search">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="keyword" autocomplete="off" placeholder="Search">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="submit" name="submit">
                                            <i class="fas fa-search fa-sm"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </ul>
                    </div>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>                        

                    </ul>

                </nav>
                <!-- End of Topbar -->
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <div id="container">
                        <h1>Alumni Kursus <br></br></h1>

                        <div id="body">
                            <table style="text-align:center" class="table table-striped" width="1200px" id="table1">
                            <thead>
                                <tr>
                                    <td scope="col">No.Registrasi</td>
                                    <td scope="col">Nama</td>
                                    <td scope="col">Kode</td>
                                    <td scope="col">Instruktur</td>
                                    <td scope="col">Paket</td>
                                    <td scope="col">Telpon</td>
                                    <td scope="col">Kehadiran</td>
                                    <td scope="col">Action</td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($alumni as $row) :
                                ?>
                                    <tr>
                                        <td scope="row"><?= strtoupper($row['no_registrasi']) ?></td>
                                        <td scope="row"><?= ucwords($row['nama']) ?></td>
                                        <td scope="row"><?= $row['kode_kendaraan'] ?></td>
                                        <td scope="row"><?= $row['instruktur'] ?></td>
                                        <td scope="row"><?= $row['paket'] ?></td>
                                        <td scope="row"><?= $row['telpon'] ?></td>
                                        <td scope="row"><?= $row['kehadiran'] ?></td>
                                        <td scope="row" style="text-align:center">
                                            <a href="<?= base_url("edit/" . $row['no_registrasi']) ?>" class="btn btn-primary" style="font: 13px/20px normal Helvetica, Arial, sans-serif;" role="button">Edit</a>
                                            <form action="delete/<?= $row['no_registrasi'] ?>/<?= $row['status'] ?>" method="post" class="d-inline">
                                                <?= csrf_field(); ?>
                                                <input type="hidden" name="_method" value="Delete">
                                                <button type="submit" class="btn btn-danger" style="font: 13px/20px normal Helvetica, Arial, sans-serif;" onclick="return confirm('Apakah anda yakin menghapus Post ini ?'); ">Delete</button>
                                            </form>
                                            <?php if ($row['status'] == 2) : ?>
                                                <a href="<?= base_url("cetak/" . $row['no_registrasi']) ?>" class="btn btn-warning" style="font: 13px/20px normal Helvetica, Arial, sans-serif;" role="button">Cetak</a>
                                            <?php else : ?>
                                                <button class="btn btn-secondary" type="button" style="font: 13px/20px normal Helvetica, Arial, sans-serif;" disabled>Cetak</button>
                                            <?php endif ?>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </div>
            
            <script src="<?= base_url('vendor/simple-datatables/simple-datatables.js') ?>"></script>
            <script>
                // Simple Datatable
                let table1 = document.querySelector('#table1');
                let dataTable = new simpleDatatables.DataTable(table1);
            </script>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

   

</body>
<?php $this->endSection(); ?>