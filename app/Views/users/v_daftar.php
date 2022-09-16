<?= $this->extend('layout/templateuser'); ?>

<?= $this->section('content'); ?>

<div class="container">
	<div class="card1">
		<div>
			<nav class="navbar navbar-expand-lg">
				<div class="container">
					<a class="navbar-brand" href="/">
						<img class="img-profile rounded-circle" src="assets/images/logop.png" width=50px;></i>
						Princess Solution
					</a>

					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>

					<div class="collapse navbar-collapse" id="navbarNav">
						<ul class="navbar-nav ml-auto">
							<li class="nav-item">
								<a href="#about" class="nav-link smoothScroll">Dashboard</a>
							</li>
							<li class="nav-item">
								<a href="#project" class="nav-link smoothScroll">Paket Kursus</a>
							</li>
							<li class="nav-item">
								<a href="/daftar" class="nav-link">Daftar</a>
							</li>
							<li class="nav-item">
								<a href="/login" class="nav-link contact">Login</a>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</div>



		<!-- <img src="assets/images/logo.png" style="width: 230px; float: right;" id="logo"> -->
		<h5>Pendaftaran Kursus Mengemudi Mobil</h5>
		<p>Pastikan Anda sudah menentukan pilihan kendaraan atau paket yang diinginkan</p>
		<center>
			<div class="daftar">
				<div class="jenis_kendaraan">
					<div class="btn btn-outline-info btn-lg">
						<button onclick="klikjenis(this)" style="border: none; background-color: Transparent; color: white;" id="btnManual" value="Manual">
							<label for="manual">Manual</label>
					</div>
					<div class="btn btn-outline-info btn-lg">
						<button onclick="klikjenis(this)" style="border: none; background-color: Transparent; color: white;" id="btnMatic" value="Matic">
							<label for="matic">Matic</label>
					</div>
				</div>

				<div id="pkManual" style="display:none">
					<div id="nab" class="card">
						<button onclick="klikmobil(this)" style="border: none; background-color: Transparent;" value="NAB">
							<!-- <input type="radio" name="kode_kendaraan" onclick="klikmobil(this)" value="nab"> -->
							<img src="assets/images/newavanzabiru.png" class="card-img-top">
					</div>
					<div id="nas" class="card">
						<button onclick="klikmobil(this)" style="border: none; background-color: Transparent;" value="NAS">
							<img src="assets/images/coba.png" class="card-img-top">
					</div>
					<div id="avnew" class="card">
						<button onclick="klikmobil(this)" style="border: none; background-color: Transparent;" value="AVNEW">
							<img src="assets/images/coba.png" class="card-img-top">
					</div>
				</div>

				<div id="pkMatic" style="display:none">
					<div id="gmb" class="card">
						<button onclick="klikmobil(this)" style="border: none; background-color: Transparent;" value="GMB">
							<img src="assets/images/coba.png" class="card-img-top">
					</div>
					<div id="gmm" class="card">
						<button onclick="klikmobil(this)" style="border: none; background-color: Transparent;" value="GMM">
							<img src="assets/images/coba.png" class="card-img-top">
					</div>
				</div>

				<div id="detailsnab" style="display:none">
					<input type="hidden" name="instruktur" value="Hendri">
					<img src="assets/images/newavanzabiru.png" class="card-img-top">
					<table border=0>
						<tr>
							<td colspan="2">NEW AVANZA BIRU</td>
						</tr>
						<tr>
							<td><img src="assets/images/hendri.png" style="width:220px;"></td>
							<td>Instruktur : Agus Hendri</td>
						</tr>
						<tr>
							<td colspan="2"><button onclick="klikins(this)" class="btnJadwal" style="--clr:#c5c9d3" value="Hendri"><a href="/jadwal/Hendri">Lihat Jadwal Tersedia</a></button></td>
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
							<td><img src="assets/images/suhadi.png" style="width:220px;"></td>
							<td>Instruktur : Suhadi</td>
						</tr>
						<tr>
							<td colspan="2"><button onclick="klikins(this)" class="btnJadwal" style="--clr:#c5c9d3" value="Suhadi"><a href="/jadwal/Suhadi">Lihat Jadwal Tersedia</a></button></td>
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
							<td><img src="assets/images/yono.png" style="width:220px;"></td>
							<td>Instruktur : Sumaryono</td>
						</tr>
						<tr>
							<td colspan="2"><button onclick="klikins(this)" class="btnJadwal" style="--clr:#c5c9d3" value="Yono"><a href="/jadwal/Yono">Lihat Jadwal Tersedia</a></button></td>
						</tr>
					</table>
				</div>
				<div id="detailsgmb" style="display:none">
					<img src="assets/images/coba.png" class="card-img-top">
					<table border=0>
						<tr>
							<td colspan="6">GRAND MATIC BIRU</td>
						</tr>
						<tr>
							<td><img src="assets/images/suhadi.png" style="width:180px;"></td>
							<td data-nama='instruktur'>Instruktur : Suhadi</td>
							<td></td>
							<td>atau</td>
							<td><img src="assets/images/yono.png" style="width:180px;"></td>
							<td data-nama='instruktur'>Instruktur : Sumaryono</td>
						</tr>
						<tr>
							<td colspan="2"><button onclick="klikins(this)" class="btnJadwal" style="--clr:#c5c9d3" value="Suhadi"><a href="/jadwal/Suhadi">Lihat Jadwal Tersedia</a></button></td>
							<td></td>
							<td></td>
							<td colspan="2"><button onclick="klikins(this)" class="btnJadwal" style="--clr:#c5c9d3" value="Yono"><a href="/jadwal/Yono">Lihat Jadwal Tersedia</a></button></td>
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
							<td data-nama='instruktur'>Instruktur : Eko Disyanto</td>
						</tr>
						<tr>
							<td colspan="2"><button onclick="klikins(this)" class="btnJadwal" style="--clr:#c5c9d3" value="Eko"><a href="/jadwal/Eko">Lihat Jadwal Tersedia</a></button></td>
						</tr>
					</table>
				</div>
			</div>
		</center>
	</div>
</div>

<script>
	var lihatJadwal = document.querySelectorAll('#btnJadwal')
	for (var satuan of lihatJadwal) {
		satuan.addEventListener('click', () => {
			alert(this.data('nama'))
		})
	}

	function klikjenis(obj) {
		localStorage.setItem("jenis_kendaraan", obj.value);
	}

	function klikmobil(obj) {
		localStorage.setItem("kode_kendaraan", obj.value);
	}

	function klikins(obj) {
		localStorage.setItem("instruktur", obj.value);
	}
</script>

<?php $this->endSection(); ?>