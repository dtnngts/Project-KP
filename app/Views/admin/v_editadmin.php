<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>



<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
            <div class="sidebar-brand-icon rotate-n-15">
                <img class="img-profile rounded-circle" src="/assets/images/logop.png" width=50px;>
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


    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mr-auto static-top shadow">

                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-5">
                    <i class="fa fa-bars"></i>
                </button>


                <!-- Navbar -->
                <ul class="navbar-nav ml-auto mr-0 mr-md-3 my-2 my-md-0">
                    <a href="/logout" type="button" onclick="return confirm('Apakah anda yakin ingin Logout ?');"><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>Logout</a>
                    <!-- <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-800"><?php echo ucwords($nama) ?></span>
                                <i class="fa fa-user mr-2 text-gray-800"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li> -->
                </ul>

            </nav>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <div id="container" style="padding: 20px;">
                    <h1>Edit Data Admin <br></br></h1>

                    <center>
                        <div id="body">
                            <div class="card" style="width: 45rem; border-radius: 20px">
                                <div class="card-body">
                                    <form action="/updateadmin/<?= $row['id'] ?>" method="post">
                                        <table border="0" cellpadding="12" cellspacing="5">
                                            <tr>
                                                <td>Id</td>
                                                <td><input type="text" style="border:none; outline:none; background:linear-gradient(#d3d3d3, #d3d3d3) center bottom 5px /calc(100% - 10px) 1px no-repeat;" class="form-control" value="<?php echo strtoupper($row['id']) ?>" disabled></td>
                                                <td><input type="hidden" style="border:none; outline:none; background:linear-gradient(#d3d3d3, #d3d3d3) center bottom 5px /calc(100% - 10px) 1px no-repeat;" class="form-control" name="id" value="<?php echo $row['id'] ?>"></td>
                                            </tr>
                                            <tr>
                                                <td>Username</td>
                                                <td><input type="text" class="form-control" style="border:none; outline:none; background:linear-gradient(#d3d3d3, #d3d3d3) center bottom 5px /calc(100% - 10px) 1px no-repeat;" name="usernama" autocomplete="off" required value="<?php echo $row['username'] ?>"></td>
                                            </tr>
                                            <tr>
                                                <td>Password</td>
                                                <td><input type="text" class="form-control" style="border:none; outline:none; background:linear-gradient(#d3d3d3, #d3d3d3) center bottom 5px /calc(100% - 10px) 1px no-repeat;" name="password" autocomplete="off" required value="<?php echo $row['password'] ?>"></td>
                                            </tr>
                                            <tr>
                                                <td>Nama</td>
                                                <td><input type="text" class="form-control" style="border:none; outline:none; background:linear-gradient(#d3d3d3, #d3d3d3) center bottom 5px /calc(100% - 10px) 1px no-repeat;" name="nama" autocomplete="off" required value="<?php echo $row['nama'] ?>"></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td><input class="btn btn-primary btn-md" style="float:right" type="submit" value="          Save          "></td>
                                            </tr>
                                        </table>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </center>
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


    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<!-- <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                    <a class="btn btn-primary" href="/login">Logout</a>>
                </div>
            </div>
        </div>
    </div> -->


<?php $this->endSection(); ?>