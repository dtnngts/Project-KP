<?= $this->extend('layout/templateDaftar'); ?>

<?= $this->section('content'); ?>

<form action="/regis" method="post">

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
	<div id="detailsnab" style="display:none">
		<input type="hidden" name="instruktur" value="Hendri">
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
		<input type="hidden" name="instruktur" value="Suhadi">
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
		<input type="hidden" name="instruktur" value="Yono">
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
				<td colspan="2"><button class="btn btn-primary">Lihat Jadwal Tersedia</button></td>
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
				<td colspan="2"><button class="btn btn-primary">Lihat Jadwal Tersedia</button></td>
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
			<div class="form-group">
				<div class="select-list">
					<select name="status" id="status" required>
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

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.3.4/jquery.inputmask.bundle.min.js'></script>

<script>
	function jadwalOrang() {
		var jadwal_orang = <?= isset($jadwal_orang) ? json_encode($jadwal_orang) : '' ?>;
		for (var i = 0; i < 54; i++) {
			for (var jo of jadwal_orang) {
				var arr = jo.split("; ");
				console.log(arr);
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
		var tabel = document.getElementById("jadwal");
		var cekbokses = tabel.querySelectorAll('input[type=checkbox]');
		for (var cekboks of cekbokses) {
			var val = cekboks.value
			if (event.checked) {
				if (cekboks != event && !val.includes(jam)) {
					cekboks.setAttribute('disabled', true);
				}
			} else {
				for (var cek of cekbokses){
					var cval = cek.value
					if(cval.includes(jam) && cek.checked && !cek.disabled){
						var Stop = true;
					}
				}
				if(!Stop){
					cekboks.removeAttribute("disabled");
					jadwalOrang()
				}
			}
		}
	}
	window.addEventListener('load', () => {
		<?php if (isset($jadwal_orang)) { ?>
			jadwalOrang()
		<?php } ?>
	})

	$(document).ready(function() {
		$('#telpon').inputmask("(9999-9999-9999)||(9999-9999-99999)");
	});
</script>

<?php $this->endSection(); ?>