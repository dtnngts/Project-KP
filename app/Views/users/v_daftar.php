<?= $this->extend('layout/templateDaftar'); ?>

<?= $this->section('content'); ?>

<div class="container">
	<div class="card1">
		<div>
			<nav>
				<ul>
					<li class="li1">PRINCESS<br>SOLUTION</li>
				</ul>
			</nav>
		</div>
		<div>
			<nav>
				<ul style="margin: 30px 0px 0px 100px;">
					<li>Dashboard</li>
					<li>Daftar</li>
					<li>Pricing</li>
					<li>Login</li>
				</ul>
			</nav>
		</div>

		<!-- <img src="assets/images/logo.png" style="width: 230px; float: right;" id="logo"> -->
		<h5>Pendaftaran Kursus Mengemudi Mobil</h5>
		<p>Pastikan Anda sudah menentukan pilihan kendaraan atau paket yang diinginkan</p>
		<center>
			<div class="daftar">
				<div class="jenis_kendaraan">
					<div class="btn btn-outline-info btn-lg">
						<button style="border: none; background-color: Transparent; color: white;" name="jenis_kendaraan" id="btnManual" value="Manual">
						<label for="manual">Manual</label>
					</div>
					<div class="btn btn-outline-info btn-lg">
						<button style="border: none; background-color: Transparent; color: white;" name="jenis_kendaraan" id="btnMatic" value="Matic">
						<label for="matic">Matic</label>
					</div>
				</div>

				<div id="pkManual" style="display:none">
					<div id="nab" class="card">
						<button onclick="klikmobil(this)" style="border: none; background-color: Transparent;" value="NAB">
						<!-- <input type="radio" name="kode_kendaraan" onclick="klikmobil(this)" value="nab"> -->
						<img src="assets/images/coba.png"  class="card-img-top">
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
							<td colspan="2"><button class="btnJadwal" style="--clr:#c5c9d3"><a href="/jadwal/Hendri">Lihat Jadwal Tersedia</a></button></td>
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
							<td colspan="2"><button class="btnJadwal" style="--clr:#c5c9d3"><a href="/jadwal/Suhadi">Lihat Jadwal Tersedia</a></button></td>
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
							<td colspan="2"><button class="btnJadwal" style="--clr:#c5c9d3"><a href="/jadwal/Yono">Lihat Jadwal Tersedia</a></button></td>
						</tr>
					</table>
				</div>
				<div id="detailsgmb" style="display:none">
				<input type="hidden" name="instruktur" value="Suhadi/Yono">
					<img src="assets/images/coba.png" class="card-img-top">
					<table border=0>
						<tr>
							<td colspan="6">GRAND MATIC BIRU</td>
						</tr>
						<tr>
							<td><img src="assets/images/suhadi.png" style="width:180px;"></td>
							<td data-nama = 'instruktur'>Instruktur : Suhadi</td>
							<td></td>
							<td>atau</td>
							<td><img src="assets/images/yono.png" style="width:180px;"></td>
							<td data-nama = 'instruktur'>Instruktur : Sumaryono</td>
						</tr>
						<tr>
							<td colspan="2"><button class="btnJadwal" style="--clr:#c5c9d3"><a href="/jadwal/Suhadi">Lihat Jadwal Tersedia</a></button></td>
							<td></td>
							<td></td>
							<td colspan="2"><button class="btnJadwal" style="--clr:#c5c9d3"><a href="/jadwal/Yono">Lihat Jadwal Tersedia</a></button></td>
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
							<td data-nama = 'instruktur'>Instruktur : Eko Disyanto</td>
						</tr>
						<tr>
							<td colspan="2"><button class="btnJadwal" style="--clr:#c5c9d3"><a href="/jadwal/Eko">Lihat Jadwal Tersedia</a></button></td>
						</tr>
					</table>
				</div>
			</div>
		</center>
	</div>
</div>

<script>
	var lihatJadwal = document.querySelectorAll('#btnJadwal')
	for(var satuan of lihatJadwal){
		satuan.addEventListener('click',()=>{
			alert(this.data('nama'))
		})
	}

	function klikmobil(obj){
		localStorage.setItem("kode_kendaraan",obj.value);
	}

</script>

<?php $this->endSection(); ?>