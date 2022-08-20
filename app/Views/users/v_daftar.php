<?= $this->extend('layout/templateDaftar'); ?>

<?= $this->section('content'); ?>

<div class="container">
	<h2>Pendaftaran Kursus Mengemudi Mobil</h2>
	<p>Pastikan Anda sudah menentukan pilihan kendaraan atau paket yang diinginkan</p>
	<!-- <img src="assets/images/logo.png" style="width:100px; float:right;"> -->
	<div class="daftar">
    <div class="row py-5 mt-4 align-items-center">
        <div class="col-md-5 pr-lg-5 mb-5 mb-md-0">
		<form action="/regis" method="post">
			<div id="detailsnab" style="display:none">
			<input type="hidden" name="instruktur" value="Hendri">
				<img src="assets/images/coba.png" class="card-img-top">
				<table border=0>
					<tr>
						<td colspan="2">NEW AVANZA BIRU</td>
					</tr>
					<tr>
						<td><img src="assets/images/hendri.png" style="width:220px;"></td>
						<td>Instruktur : Agus Hendri</td>
					</tr>
					<tr>
						<td colspan="2"><button class="btnJadwal" style="--clr:#c5c9d3">Lihat Jadwal Tersedia</button></td>
					</tr>
				</table>
			</div>
			<div id="detailsnas" style="display:none">
			<input type="hidden" name="instruktur" value="Suhadi">
				<img src="assets/images/coba.png" class="card-img-top">
				<table border=0>
					<tr>
						<td colspan="2">NEW AVANZA SILVER</td>
					</tr>
					<tr>
						<td><img src="assets/images/suhadi.png" style="width:220px;"></td>
						<td>Instruktur : Suhadi</td>
					</tr>
					<tr>
						<td colspan="2"><button class="btnJadwal" style="--clr:#c5c9d3">Lihat Jadwal Tersedia</button></td>
					</tr>
				</table>
			</div>
			<div id="detailsavnew" style="display:none">
			<input type="hidden" name="instruktur" value="Yono">
				<img src="assets/images/coba.png" class="card-img-top">
				<table border=0>
					<tr>
						<td colspan="2">ALL NEW AVANZA</td>
					</tr>
					<tr>
						<td><img src="assets/images/yono.png" style="width:220px;"></td>
						<td>Instruktur : Sumaryono</td>
					</tr>
					<tr>
						<td colspan="2"><button class="btnJadwal" style="--clr:#c5c9d3">Lihat Jadwal Tersedia</button></td>
					</tr>
				</table>
			</div>
			<div id="detailsgmb" style="display:none">
			<input type="hidden" name="instruktur" value="Suhadi/Yono">
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
						<td colspan="2"><button class="btnJadwal" style="--clr:#c5c9d3">Lihat Jadwal Tersedia</button></td>
					</tr>
				</table>
			</div>
			<div id="detailsgmm" style="display:none">
			<input type="hidden" name="instruktur" value="Eko">
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
						<td colspan="2"><button class="btnJadwal" style="--clr:#c5c9d3">Lihat Jadwal Tersedia</button></td>
					</tr>
				</table>
			</div>
        </div>

        <div class="col-md-7 col-lg-6 ml-auto">
		<div class="card1">
			<div>
				<center>
					<div class="btn btn-outline-info btn-lg">
						<input type="radio" name="jenis_kendaraan" value="Manual" id="btnManual">
						<label for="manual">Manual</label>
					</div>
					<div class="btn btn-outline-info btn-lg">
						<input type="radio" name="jenis_kendaraan" value="Matic" id="btnMatic">
						<label for="matic">Matic</label>
					</div>
				</center>
			</div>
			<div id="pkManual" style="display:none">
				<div id="nab" class="card">
					<input type="hidden" name="kode_kendaraan" value="nab">
					<img src="assets/images/coba.png" class="card-img-top">
				</div>
				<div id="nas" class="card">
					<input type="hidden" name="kode_kendaraan" value="nas">
					<img src="assets/images/coba.png" class="card-img-top">
				</div>
				<div id="avnew" class="card">
					<input type="hidden" name="kode_kendaraan" value="avnew">
					<img src="assets/images/coba.png" class="card-img-top">
				</div>
			</div>
			<div id="pkMatic" style="display:none">
				<div id="gmb" class="card">
					<input type="hidden" name="kode_kendaraan" value="gmb">
					<img src="assets/images/coba.png" class="card-img-top">
				</div>
				<div id="gmm" class="card">
					<input type="hidden" name="kode_kendaraan" value="gmm">
					<img src="assets/images/coba.png" class="card-img-top">
				</div>
			</div>

			<div class="form-group">
				<label for="nama">Nama</label>
				<input required type="text" class="form-control" name="nama" id="nama">
			</div>
			<div class="form-group">
				<label for="ttl">Tempat Tanggal Lahir</label>
				<input required type="text" class="form-control" name="ttl" id="ttl">
			</div>
			<div class="form-group">
				<label for="pekerjaan">Pekerjaan</label>
				<input required type="text" class="form-control" name="pekerjaan" id="pekerjaan">
			</div>
			<div class="form-group">
				<label for="alamat">Alamat</label>
				<input required type="text" class="form-control" name="alamat" id="alamat">
			</div>
			<div class="form-group">
				<label for="telpon">Telpon</label>
				<input required type="text" class="form-control" name="telpon" id="telpon">
			</div>
			<div class="form-group">
				<div class="select-list">
					<select name="paket" id="paket" required>
						<option value="">Paket</option>
						<option value="a">A</option>
						<option value="b">B</option>
						<option value="c">C</option>
					</select>
				</div>
			</div>
			<div class="form-group form-input">
				<input type="text" name="jadwal" id="jadwal" value=""/>
				<label for="jadwal" class="form-label">Jadwal</label>
			</div>
			<div class="form-group">
				<div class="select-list">
					<select name="status" id="status" for="status" required>
						<option value="">Status</option>
						<option value="siswa">Siswa</option>
						<option value="alumni">Alumni</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<div class="form-check">
					<input class="form-check-input" type="checkbox" id="defaultCheck1">
					<label class="form-check-label" for="defaultCheck1">
                    	Saya telah membaca, memahami, dan setuju berdasarkan syarat dan ketentuan yang telah ditetapkan
						<a type="button" data-toggle="modal" data-target="#exampleModal" style="color:blue">
							<u> Baca Syarat dan Ketentuan </u>
						</a>
                	</label>
				</div>
			</div>

			<!-- Modal -->
			<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Syarat dan Ketentuan</h5>
				</div>
				<div class="modal-body">
					1. Harus hadir di tempat 5 menit sebelum jam yang telah ditentukan, jika terlambat ditunda besok.<br>
					2. Jika dalam 10 hari berturut-turut tidak hadir, maka dianggap berhenti dari Kursus Mengemudi.<br>
					3. Dalam Kursus Mengemudi tidak diperkenankan melebihi kecepatan 40Km/Jam.<br>
					4. Murid Kursus Mengemudi wajib mentaati Instruksi dari instruktur.<br>
					5. Jika paket Kursus Mengemudi telah habis di perkenankan untuk memperpanjang paket berikutnya.<br>
					6. Bagi yang menggunakan Fasilitas antar jemput kursus mengemudi, waktu penjemputan tersebut sudah termasuk dalam waktu belajar.<br>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary" data-dismiss="modal">Setuju</button>
				</div>
				</div>
			</div>
			</div>
			<input type="submit" class="btn btn-primary" value="Daftar" name="submit" id="submit">
		</form>
		</div>
        </div>
    </div>
	</div>
</div>

<?php $this->endSection(); ?>