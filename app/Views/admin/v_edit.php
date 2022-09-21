<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
                <div class="sidebar-brand-icon rotate-n-15">
                    <img class="img-profile rounded-circle" src="/assets/images/logo.png" width=50px;>
                </div>
                <div class="sidebar-brand-text mx-3"> Princess Solution <sup></sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item ">
                <a class="nav-link" href="/admin">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
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

                    <i class="fa fa-arrow-left"></i><a href="javascript:window.history.go(-1);">Kembali</a>

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
                        <center>
                            <h1 style="padding-top: 20px;"><i class="fa fa-edit"></i>Edit Data <br></h1>
                            <hr>
                        </center>

                        <div id="body">

                            <form action="/update/<?= $row['no_registrasi'] ?>/<?= $row['instruktur'] ?>" enctype="multipart/form-data" method="post">
                                <center>
                                    <table border="0" cellpadding="12" cellspacing="5">
                                        <tr>
                                            <td style="font-size: 20px;">Kehadiran<br>
                                                <div class="absen">
                                                    <!-- <button class="btn minus-btn disabled" type="button">-</button> -->
                                                    <?php if ($row['paket'] == 'a') : ?>
                                                        <input type="number" name="kehadiran" id="absen" style="border: none;" value="<?= $row['kehadiran'] ?>" max="10" min="0">
                                                    <?php elseif ($row['paket'] == 'b') : ?>
                                                        <input type="number" name="kehadiran" id="absen" style="border: none;" value="<?= $row['kehadiran'] ?>" max="15" min="0">
                                                    <?php else : ?>
                                                        <input type="number" name="kehadiran" id="absen" style="border: none;" value="<?= $row['kehadiran'] ?>" max="20" min="0">
                                                    <?php endif ?>
                                                    <!-- <button class="btn plus-btn" type="button">+</button> -->
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </center>

                                <br><br>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="card shadow mb-4">
                                            <div class="card-header py-3">
                                                <h6 class="m-0 font-weight-bold">Tanggal-Daftar : <?php echo $row['created_at'] ?>"</h6>
                                            </div>
                                            <div class="card-body">
                                                <table border="0" cellpadding="15" cellspacing="5">
                                                    <tr>
                                                        <td>No.Registrasi</td>
                                                        <td><input type="text" style="border:none; outline:none; background:linear-gradient(#d3d3d3, #d3d3d3) center bottom 5px /calc(100% - 10px) 1px no-repeat;" class="form-control" value="<?php echo strtoupper($row['no_registrasi']) ?>" disabled></td>
                                                        <input type="hidden" style="border:none; outline:none; background:linear-gradient(#d3d3d3, #d3d3d3) center bottom 5px /calc(100% - 10px) 1px no-repeat;" class="form-control" name="no_registrasi" value="<?php echo $row['no_registrasi'] ?>">
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
                                                        <td>Pekerjaan</td>
                                                        <td><input type="text" class="form-control" style="border:none; outline:none; background:linear-gradient(#d3d3d3, #d3d3d3) center bottom 5px /calc(100% - 10px) 1px no-repeat;" name="pekerjaan" autocomplete="off" required value="<?php echo $row['pekerjaan'] ?>"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Alamat</td>
                                                        <td><input type="text" class="form-control" style="border:none; outline:none; background:linear-gradient(#d3d3d3, #d3d3d3) center bottom 5px /calc(100% - 10px) 1px no-repeat;" name="alamat" autocomplete="off" required value="<?php echo $row['alamat'] ?>"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Telpon</td>
                                                        <td><input type="text" class="form-control" style="border:none; outline:none; background:linear-gradient(#d3d3d3, #d3d3d3) center bottom 5px /calc(100% - 10px) 1px no-repeat;" name="telpon" autocomplete="off" required value="<?php echo $row['telpon'] ?>"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Jenis Kendaraan</td>
                                                        <td><input type="text" class="form-control" style="border:none; outline:none; background:linear-gradient(#d3d3d3, #d3d3d3) center bottom 5px /calc(100% - 10px) 1px no-repeat;" name="jenis_kendaraan" autocomplete="off" required value="<?php echo $row['jenis_kendaraan'] ?>"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Kode Kendaraan</td>
                                                        <td><input type="text" class="form-control" style="border:none; outline:none; background:linear-gradient(#d3d3d3, #d3d3d3) center bottom 5px /calc(100% - 10px) 1px no-repeat;" name="kode_kendaraan" autocomplete="off" required value="<?php echo $row['kode_kendaraan'] ?>"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Instruktur</td>
                                                        <td><input type="text" class="form-control" style="border:none; outline:none; background:linear-gradient(#d3d3d3, #d3d3d3) center bottom 5px /calc(100% - 10px) 1px no-repeat;" name="instruktur" autocomplete="off" required value="<?php echo $row['instruktur'] ?>"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Paket</td>
                                                        <td>
                                                            <div class="input-group">
                                                                <select class="custom-select" style="font: 13px/20px normal Helvetica, Arial, sans-serif;" name="paket" id="paket" required value="<?php echo $row['paket'] ?>">
                                                                    <option selected="true" disabled>Paket</option>
                                                                    <option value="a">A</option>
                                                                    <option value="b">B</option>
                                                                    <option value="c">C</option>
                                                                </select>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Status</td>
                                                        <td>
                                                            <div class="input-group">
                                                                <select class="custom-select" style="font: 13px/20px normal Helvetica, Arial, sans-serif;" name="status" id="status" required value="<?php echo $row['status'] ?>">
                                                                    <option selected="true" disabled="disabled">Status</option>
                                                                    <option value="siswa">Siswa</option>
                                                                    <option value="alumni">Alumni</option>
                                                                </select>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="card shadow mb-4">
                                            <div class="card-header py-3">
                                                <h6 class="m-0 font-weight-bold">Jadwal Siswa Kursus</h6>
                                            </div>
                                            <div class="card-body">
                                                <center>
                                                    <table id="jadwal" cellpadding="8" cellspacing="5">
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
                                            </div>
                                        </div>

                                        <div class="card shadow mb-4">
                                            <div class="card-header py-3">
                                                <h6 class="m-0 font-weight-bold">Transaksi</h6>
                                            </div>
                                            <div class="card-body">
                                                <img class="buktiTF" src="<?= base_url("./assets/transfer/" . $row['buktiTF']) ?>" style="width:100px;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="modal" class="modal">
                                    <span class="close">&times;</span>
                                    <img class="modal-content" id="img01">
                                </div>

                                <center>
                                    <input class="btn btn-primary btn-md" type="submit" value="          Save          ">
                                </center>
                                <br>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </div>
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
    <script>
        // Get the modal
        var modal = document.querySelector(".modal");
        var modalImg = document.querySelector(".modal-content");
        Array.from(document.querySelectorAll(".buktiTF")).forEach(item => {
            item.addEventListener("click", event => {
                modal.style.display = "block";
                modalImg.src = event.target.src;
            });
        });

        var span = document.getElementsByClassName("close")[0];

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }
    </script>
</body>

<?php $this->endSection(); ?>