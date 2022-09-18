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
                    <img class="img-profile rounded-circle" src="/assets/images/logo.png" width=50px;>
                </div>
                <div class="sidebar-brand-text mx-3"> Princess Solution <sup></sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Data Kursus</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Data Keseluruhan:</h6>
                        <a class="collapse-item" href="/seluruhsiswa">Data Seluruh Siswa</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Data per Instruktur:</h6>
                        <a class="collapse-item" href="/Hendri">Siswa Hendri</a>
                        <a class="collapse-item" href="/Suhadi">Siswa Suhadi</a>
                        <a class="collapse-item" href="/Yono">Siswa Yono</a>
                        <a class="collapse-item" href="/Eko">Siswa Eko</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
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
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Jadwal</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Jadwal per Instruktur:</h6>
                        <a class="collapse-item" href="/lihatjadwal/Hendri">Jadwal Hendri</a>
                        <a class="collapse-item" href="/lihatjadwal/Suhadi">Jadwal Suhadi</a>
                        <a class="collapse-item" href="/lihatjadwal/Yono">Jadwal Yono</a>
                        <a class="collapse-item" href="/lihatjadwal/Eko">Jadwal Eko</a>
                    </div>
                </div>
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
                <nav class="navbar navbar-expand navbar-light bg-white topbar mr-auto static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-5">
                        <i class="fa fa-bars"></i>
                    </button>


                    <!-- Navbar -->
                    <ul class="navbar-nav ml-auto mr-0 mr-md-3 my-2 my-md-0">
                        <li class="nav-item dropdown no-arrow">
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
                        </li>
                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <div id="container">
                        <h1>Edit Data <br></br></h1>

                        <div id="body">

                            <form action="/update/<?= $row['no_registrasi'] ?>/<?= $row['instruktur'] ?>" method="post">
                                <table border="0" cellpadding="12" cellspacing="5">
                                    <tr>
                                        <td rowspan="3">Kehadiran<br>
                                            <div class="absen">
                                                <!-- <button class="btn minus-btn disabled" type="button">-</button> -->
                                                <?php if ($row['paket'] == 'a') : ?>
                                                    <input type="number" name="kehadiran" id="absen" value="<?= $row['kehadiran'] ?>" max="10" min="0">
                                                <?php elseif ($row['paket'] == 'b') : ?>
                                                    <input type="number" name="kehadiran" id="absen" value="<?= $row['kehadiran'] ?>" max="15" min="0">
                                                <?php else : ?>
                                                    <input type="number" name="kehadiran" id="absen" value="<?= $row['kehadiran'] ?>" max="20" min="0">
                                                <?php endif ?>
                                                <!-- <button class="btn plus-btn" type="button">+</button> -->
                                            </div>
                                        </td>
                                        <td>No.Registrasi</td>
                                        <td><input type="text" style="border:none; outline:none; background:linear-gradient(#d3d3d3, #d3d3d3) center bottom 5px /calc(100% - 10px) 1px no-repeat;" class="form-control" value="<?php echo strtoupper($row['no_registrasi']) ?>" disabled></td>
                                        <td><input type="hidden" style="border:none; outline:none; background:linear-gradient(#d3d3d3, #d3d3d3) center bottom 5px /calc(100% - 10px) 1px no-repeat;" class="form-control" name="no_registrasi" value="<?php echo $row['no_registrasi'] ?>"></td>
                                    </tr>
                                    <tr>
                                        <td>Nama</td>
                                        <td><input type="text" class="form-control" style="border:none; outline:none; background:linear-gradient(#d3d3d3, #d3d3d3) center bottom 5px /calc(100% - 10px) 1px no-repeat;" name="nama" autocomplete="off" required value="<?php echo $row['nama'] ?>"></td>
                                    </tr>
                                    <tr>
                                        <td>Tempat, Tanggal Lahir</td>
                                        <td><input type="text" class="form-control" style="border:none; outline:none; background:linear-gradient(#d3d3d3, #d3d3d3) center bottom 5px /calc(100% - 10px) 1px no-repeat;" name="ttl" autocomplete="off" required value="<?php echo $row['ttl'] ?>"></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Pekerjaan</td>
                                        <td><input type="text" class="form-control" style="border:none; outline:none; background:linear-gradient(#d3d3d3, #d3d3d3) center bottom 5px /calc(100% - 10px) 1px no-repeat;" name="pekerjaan" autocomplete="off" required value="<?php echo $row['pekerjaan'] ?>"></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Alamat</td>
                                        <td><input type="text" class="form-control" style="border:none; outline:none; background:linear-gradient(#d3d3d3, #d3d3d3) center bottom 5px /calc(100% - 10px) 1px no-repeat;" name="alamat" autocomplete="off" required value="<?php echo $row['alamat'] ?>"></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Telpon</td>
                                        <td><input type="text" class="form-control" style="border:none; outline:none; background:linear-gradient(#d3d3d3, #d3d3d3) center bottom 5px /calc(100% - 10px) 1px no-repeat;" name="telpon" autocomplete="off" required value="<?php echo $row['telpon'] ?>"></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Paket</td>
                                        <td><input type="text" class="form-control" style="border:none; outline:none; background:linear-gradient(#d3d3d3, #d3d3d3) center bottom 5px /calc(100% - 10px) 1px no-repeat;" name="paket" autocomplete="off" required value="<?php echo $row['paket'] ?>"></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Status</td>
                                        <td>
                                            <div class="input-group">
                                                <select class="custom-select" style="font: 13px/20px normal Helvetica, Arial, sans-serif;" name="status" id="status" required>
                                                    <option selected="true" disabled="disabled">Status</option>
                                                    <option value="siswa">Siswa</option>
                                                    <option value="alumni">Alumni</option>
                                                </select>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Jadwal</td>
                                        <td colspan="4">
                                            <center>
                                                <table id="jadwal">
                                                    <tr>
                                                        <th>Jam/Hari</th>
                                                        <th>Senin</th>
                                                        <th>Selasa</th>
                                                        <th>Rabu</th>
                                                        <th>Kamis</th>
                                                        <th>Jum'at</th>
                                                        <th>Sabtu</th>
                                                    </tr>

                                                    <tr>
                                                        <td>08.00-09.00</td>
                                                        <td><label><input type="checkbox" id="0" name="jadwal[]" onclick="pilihSatu(this)" value="Senin 08.00-09.00"></label></td>
                                                        <td><label><input type="checkbox" id="1" name="jadwal[]" onclick="pilihSatu(this)" value="Selasa 08.00-09.00"></label></td>
                                                        <td><label><input type="checkbox" id="2" name="jadwal[]" onclick="pilihSatu(this)" value="Rabu 08.00-09.00"></label></td>
                                                        <td><label><input type="checkbox" id="3" name="jadwal[]" onclick="pilihSatu(this)" value="Kamis 08.00-09.00"></label></td>
                                                        <td><label><input type="checkbox" id="4" name="jadwal[]" onclick="pilihSatu(this)" value="Jum'at 08.00-09.00"></label></td>
                                                        <td><label><input type="checkbox" id="5" name="jadwal[]" onclick="pilihSatu(this)" value="Sabtu 08.00-09.00"></label></td>
                                                    </tr>

                                                    <tr>
                                                        <td>09.00-10.00</td>
                                                        <td><label><input type="checkbox" id="6" name="jadwal[]" onclick="pilihSatu(this)" value="Senin 09.00-10.00"></label></td>
                                                        <td><label><input type="checkbox" id="7" name="jadwal[]" onclick="pilihSatu(this)" value="Selasa 09.00-10.00"></label></td>
                                                        <td><label><input type="checkbox" id="8" name="jadwal[]" onclick="pilihSatu(this)" value="Rabu 09.00-10.00"></label></td>
                                                        <td><label><input type="checkbox" id="9" name="jadwal[]" onclick="pilihSatu(this)" value="Kamis 09.00-10.00"></label></td>
                                                        <td><label><input type="checkbox" id="10" name="jadwal[]" onclick="pilihSatu(this)" value="Jum'at 09.00-10.00"></label></td>
                                                        <td><label><input type="checkbox" id="11" name="jadwal[]" onclick="pilihSatu(this)" value="Sabtu 09.00-10.00"></label></td>
                                                    </tr>

                                                    <tr>
                                                        <td>10.00-11.00</td>
                                                        <td><label><input type="checkbox" id="12" name="jadwal[]" onclick="pilihSatu(this)" value="Senin 10.00-11.00"></label></td>
                                                        <td><label><input type="checkbox" id="13" name="jadwal[]" onclick="pilihSatu(this)" value="Selasa 10.00-11.00"></label></td>
                                                        <td><label><input type="checkbox" id="14" name="jadwal[]" onclick="pilihSatu(this)" value="Rabu 10.00-11.00"></label></td>
                                                        <td><label><input type="checkbox" id="15" name="jadwal[]" onclick="pilihSatu(this)" value="Kamis 10.00-11.00"></label></td>
                                                        <td><label><input type="checkbox" id="16" name="jadwal[]" onclick="pilihSatu(this)" value="Jum'at 10.00-11.00"></label></td>
                                                        <td><label><input type="checkbox" id="17" name="jadwal[]" onclick="pilihSatu(this)" value="Sabtu 10.00-11.00"></label></td>
                                                    </tr>

                                                    <tr>
                                                        <td>11.00-12.00</td>
                                                        <td><label><input type="checkbox" id="18" name="jadwal[]" onclick="pilihSatu(this)" value="Senin 11.00-12.00"></label></td>
                                                        <td><label><input type="checkbox" id="19" name="jadwal[]" onclick="pilihSatu(this)" value="Selasa 11.00-12.00"></label></td>
                                                        <td><label><input type="checkbox" id="20" name="jadwal[]" onclick="pilihSatu(this)" value="Rabu 11.00-12.00"></label></td>
                                                        <td><label><input type="checkbox" id="21" name="jadwal[]" onclick="pilihSatu(this)" value="Kamis 11.00-12.00"></label></td>
                                                        <td><label><input type="checkbox" id="22" name="jadwal[]" onclick="pilihSatu(this)" value="Jum'at 11.00-12.00"></label></td>
                                                        <td><label><input type="checkbox" id="23" name="jadwal[]" onclick="pilihSatu(this)" value="Sabtu 11.00-12.00"></label></td>
                                                    </tr>

                                                    <tr>
                                                        <td>12.00-13.00</td>
                                                        <td><label><input type="checkbox" id="24" name="jadwal[]" onclick="pilihSatu(this)" value="Senin 12.00-13.00"></label></td>
                                                        <td><label><input type="checkbox" id="25" name="jadwal[]" onclick="pilihSatu(this)" value="Selasa 12.00-13.00"></label></td>
                                                        <td><label><input type="checkbox" id="26" name="jadwal[]" onclick="pilihSatu(this)" value="Rabu 12.00-13.00"></label></td>
                                                        <td><label><input type="checkbox" id="27" name="jadwal[]" onclick="pilihSatu(this)" value="Kamis 12.00-13.00"></label></td>
                                                        <td><label><input type="checkbox" id="28" name="jadwal[]" onclick="pilihSatu(this)" value="Jum'at 12.00-13.00"></label></td>
                                                        <td><label><input type="checkbox" id="29" name="jadwal[]" onclick="pilihSatu(this)" value="Sabtu 12.00-13.00"></label></td>
                                                    </tr>

                                                    <tr>
                                                        <td>13.00-14.00</td>
                                                        <td><label><input type="checkbox" id="30" name="jadwal[]" onclick="pilihSatu(this)" value="Senin 13.00-14.00"></label></td>
                                                        <td><label><input type="checkbox" id="31" name="jadwal[]" onclick="pilihSatu(this)" value="Selasa 13.00-14.00"></label></td>
                                                        <td><label><input type="checkbox" id="32" name="jadwal[]" onclick="pilihSatu(this)" value="Rabu 13.00-14.00"></label></td>
                                                        <td><label><input type="checkbox" id="33" name="jadwal[]" onclick="pilihSatu(this)" value="Kamis 13.00-14.00"></label></td>
                                                        <td><label><input type="checkbox" id="34" name="jadwal[]" onclick="pilihSatu(this)" value="Jum'at 13.00-14.00"></label></td>
                                                        <td><label><input type="checkbox" id="35" name="jadwal[]" onclick="pilihSatu(this)" value="Sabtu 13.00-14.00"></label></td>
                                                    </tr>

                                                    <tr>
                                                        <td>14.00-15.00</td>
                                                        <td><label><input type="checkbox" id="36" name="jadwal[]" onclick="pilihSatu(this)" value="Senin 14.00-15.00"></label></td>
                                                        <td><label><input type="checkbox" id="37" name="jadwal[]" onclick="pilihSatu(this)" value="Selasa 14.00-15.00"></label></td>
                                                        <td><label><input type="checkbox" id="38" name="jadwal[]" onclick="pilihSatu(this)" value="Rabu 14.00-15.00"></label></td>
                                                        <td><label><input type="checkbox" id="39" name="jadwal[]" onclick="pilihSatu(this)" value="Kamis 14.00-15.00"></label></td>
                                                        <td><label><input type="checkbox" id="40" name="jadwal[]" onclick="pilihSatu(this)" value="Jum'at 14.00-15.00"></label></td>
                                                        <td><label><input type="checkbox" id="41" name="jadwal[]" onclick="pilihSatu(this)" value="Sabtu 14.00-15.00"></label></td>
                                                    </tr>

                                                    <tr>
                                                        <td>15.00-16.00</td>
                                                        <td><label><input type="checkbox" id="42" name="jadwal[]" onclick="pilihSatu(this)" value="Senin 15.00-16.00"></label></td>
                                                        <td><label><input type="checkbox" id="43" name="jadwal[]" onclick="pilihSatu(this)" value="Selasa 15.00-16.00"></label></td>
                                                        <td><label><input type="checkbox" id="44" name="jadwal[]" onclick="pilihSatu(this)" value="Rabu 15.00-16.00"></label></td>
                                                        <td><label><input type="checkbox" id="45" name="jadwal[]" onclick="pilihSatu(this)" value="Kamis 15.00-16.00"></label></td>
                                                        <td><label><input type="checkbox" id="46" name="jadwal[]" onclick="pilihSatu(this)" value="Jum'at 15.00-16.00"></label></td>
                                                        <td><label><input type="checkbox" id="47" name="jadwal[]" onclick="pilihSatu(this)" value="Sabtu 15.00-16.00"></label></td>
                                                    </tr>

                                                    <tr>
                                                        <td>16.00-17.00</td>
                                                        <td><label><input type="checkbox" id="48" name="jadwal[]" onclick="pilihSatu(this)" value="Senin 16.00-17.00"></label></td>
                                                        <td><label><input type="checkbox" id="49" name="jadwal[]" onclick="pilihSatu(this)" value="Selasa 16.00-17.00"></label></td>
                                                        <td><label><input type="checkbox" id="50" name="jadwal[]" onclick="pilihSatu(this)" value="Rabu 16.00-17.00"></label></td>
                                                        <td><label><input type="checkbox" id="51" name="jadwal[]" onclick="pilihSatu(this)" value="Kamis 16.00-17.00"></label></td>
                                                        <td><label><input type="checkbox" id="52" name="jadwal[]" onclick="pilihSatu(this)" value="Jum'at 16.00-17.00"></label></td>
                                                        <td><label><input type="checkbox" id="53" name="jadwal[]" onclick="pilihSatu(this)" value="Sabtu 16.00-17.00"></label></td>
                                                    </tr>
                                                </table>
                                            </center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td><input class="btn btn-primary btn-md" style="float:right" type="submit" value="          Save          "></td>
                                    </tr>
                                </table>
                            </form>
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


        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
    </div>

    <script>
        function jadwalOrang() {
            var jadwal_orang = <?= ($jadwal_orang != null) ? json_encode($jadwal_orang) : 'null' ?>;
            for (var i = 0; i < 54; i++) {
                for (var jo of jadwal_orang) {
                    var arr = jo.split("; ");
                    for (var nilai of arr) {
                        if (document.getElementById(i).value == nilai) {
                            document.getElementById(i).setAttribute('checked', true);
                            document.getElementById(i).setAttribute('disabled', true);
                        }
                    }
                }
            }
        }

        function pilihSatu(event) {
            var nilai = event.value;
            nilai = nilai.split(" ")
            var jam = nilai[1]
            var tabel = document.getElementById(" jadwal");
            var cekbokses = tabel.querySelectorAll('input[type=checkbox]');
            for (var cekboks of cekbokses) {
                var val = cekboks.value
                if (event.checked) {
                    if (cekboks != event && !val.includes(jam)) {
                        cekboks.setAttribute('disabled', true);
                    }
                } else {
                    for (var cek of cekbokses) {
                        var cval = cek.value
                        if (cval.includes(jam) && cek.checked && !cek.disabled) {
                            var Stop = true;
                        }
                    }
                    if (!Stop) {
                        cekboks.removeAttribute("disabled");
                        <?php if (isset($jadwal_orang)) { ?> jadwalOrang() <?php } ?>
                    }
                }
            }
        }
        window.addEventListener('load', () => {
            <?php if (isset($jadwal_orang)) { ?>
                jadwalOrang()
            <?php } ?>
        })
    </script>
</body>

<?php $this->endSection(); ?>