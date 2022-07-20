<?= $this->extend('layout/templateDaftar'); ?>

<?= $this->section('content'); ?>

<div class="container">
	<h2>Pendaftaran Kursus Mengemudi Mobil</h2>
	<p>Pastikan Anda sudah menentukan pilihan kendaraan atau paket yang diinginkan</p>
	<!-- <img src="assets/images/logo.png" style="width:100px; float:right;"> -->
    <div class="row py-5 mt-4 align-items-center">
        <div class="col-md-5 pr-lg-5 mb-5 mb-md-0">
			<div id="detailsnab" style="display:none">
				<img src="assets/images/coba.png" class="card-img-top">
				<table border=0>
					<tr>
						<td colspan="2">NEW AVANZA BIRU</td>
					</tr>
					<tr>
						<td><img src="assets/images/hendri.png" style="width:180px;"></td>
						<td>Instruktur : Agus Hendri</td>
					</tr>
					<tr>
						<td colspan="2"><button class="btn btn-primary">Lihat Jadwal Tersedia</button></td>
					</tr>
				</table>
			</div>
			<div id="detailsnas" style="display:none">
				<img src="assets/images/coba.png" class="card-img-top">
				<table border=0>
					<tr>
						<td colspan="2">NEW AVANZA SILVER</td>
					</tr>
					<tr>
						<td><img src="assets/images/suhadi.png" style="width:210px;"></td>
						<td>Instruktur : Suhadi</td>
					</tr>
					<tr>
						<td colspan="2"><button class="btn btn-primary">Lihat Jadwal Tersedia</button></td>
					</tr>
				</table>
			</div>
			<div id="detailsavnew" style="display:none">
				<img src="assets/images/coba.png" class="card-img-top">
				<table border=0>
					<tr>
						<td colspan="2">ALL NEW AVANZA</td>
					</tr>
					<tr>
						<td><img src="assets/images/yono.png" style="width:180px;"></td>
						<td>Instruktur : Sumaryono</td>
					</tr>
					<tr>
						<td colspan="2"><button class="btn btn-primary">Lihat Jadwal Tersedia</button></td>
					</tr>
				</table>
			</div>
			<div id="detailsgmb" style="display:none">
				<img src="assets/images/coba.png" class="card-img-top">
				<table border=0>
					<tr>
						<td colspan="5">GRAND MATIC BIRU</td>
					</tr>
					<tr>
						<td><img src="assets/images/suhadi.png" style="width:180px;"></td>
						<td>Instruktur : Suhadi</td>
					</tr>
					<tr>
						<td colspan="2">atau</td>
					</tr>
					<tr>
						<td><img src="assets/images/yono.png" style="width:180px;"></td>
						<td>Instruktur : Sumaryono</td>
					</tr>
					<tr>
						<td colspan="2"><button class="btn btn-primary">Lihat Jadwal Tersedia</button></td>
					</tr>
				</table>
			</div>
			<div id="detailsgmm" style="display:none">
				<img src="assets/images/coba.png" class="card-img-top">
				<table border=0>
					<tr>
						<td colspan="2">GRAND MATIC MERAH</td>
					</tr>
					<tr>
						<td><img src="assets/images/eko.png" style="width:220px;"></td>
						<td>Instruktur : Eko Disyanto</td>
					</tr>
					<tr>
						<td colspan="2"><button class="btn btn-primary">Lihat Jadwal Tersedia</button></td>
					</tr>
				</table>
			</div>
        </div>

        <div class="col-md-7 col-lg-6 ml-auto">
		<div class="card1">
		<form>
			<div class="form-group">
				<center>
					<button type="button" id="btnManual" class="btn btn-outline-secondary btn-lg" name="jenis_kendaraan">Manual</button>
					<button type="button" id="btnMatic" class="btn btn-outline-secondary btn-lg" name="jenis_kendaraan">Matic</button>
				</center>
			</div>
			<div id="pkManual" style="display:none">
				<div id="nab" class="card">
					<img src="assets/images/coba.png" class="card-img-top">
				</div>
				<div id="nas" class="card">
					<img src="assets/images/coba.png" class="card-img-top">
				</div>
				<div id="avnew" class="card">
					<img src="assets/images/coba.png" class="card-img-top">
				</div>
			</div>
			<div id="pkMatic" style="display:none">
				<div id="gmb" class="card">
					<img src="assets/images/coba.png" class="card-img-top">
				</div>
				<div id="gmm" class="card">
					<img src="assets/images/coba.png" class="card-img-top">
				</div>
			</div>

			<div class="form-group">
				<label for="nama">Nama</label>
				<input type="text" class="form-control" name="nama" id="nama">
			</div>
			<div class="form-group">
				<label for="ttl">Tempat Tanggal Lahir</label>
				<input type="text" class="form-control" name="ttl" id="ttl">
			</div>
			<div class="form-group">
				<label for="pekerjaan">Pekerjaan</label>
				<input type="text" class="form-control" name="pekerjaan" id="pekerjaan">
			</div>
			<div class="form-group">
				<label for="alamat">Alamat</label>
				<input type="text" class="form-control" name="alamat" id="alamat">
			</div>
			<div class="form-group">
				<label for="telpon">Telpon</label>
				<input type="text" class="form-control" name="telpon" id="telpon">
			</div>
			<div class="form-group">
				<div class="form-check">
				<input class="form-check-input" type="checkbox" id="gridCheck">
				<label class="form-check-label" for="gridCheck">
					Check me out
				</label>
				</div>
			</div>
			<button type="submit" class="btn btn-primary">Sign in</button>
		</form>
		</div>
        </div>
    </div>
</div>

<?php $this->endSection(); ?>