<?= $this->extend('layout/templateDaftar'); ?>

<?= $this->section('content'); ?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<div class="container">

		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div>
			<nav>
				<ul class="navbar-brand" href="index.html">

					<img class="img-profile rounded-circle" src="/assets/images/logo.png" width=40px;></i>
					Princess Solution
				</ul>
			</nav>
		</div>



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
					<a href="contact.html" class="nav-link contact">Contact</a>
				</li>
			</ul>
		</div>
	</div>
</nav>

<form action="/regis" method="post" enctype="multipart/form-data" id='form-daftar'>
	<?= csrf_field(); ?>
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

			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td><button type="button" class="btnPilih" id="btnPilih" style="--clr:#c5c9d3">Pilih Jadwal</button></td>

			</tr>
		</table>
	</center>



	<?= csrf_field(); ?>
	<div class="container" id="formDaDir">
		<div class="card1">
			<p>Silahkan lanjut mengisi data diri Anda</p>
			<div class="row">
				<div class="col-md-6">
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

					<!-- <div class="form-group">
					<div class="select-list">
						<select name="status" id="status">
							<option value="">Status</option>
							<option value="siswa">Siswa</option>
							<option value="alumni">Alumni</option>
						</select>
					</div>
				</div> -->
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label for="jenis_kendaraan">Jenis Kendaraan</label>
						<input type="text" class="form-control" name="jenis_kendaraan" id="jenis_kendaraan" value="" readonly>
						<script>
							window.addEventListener('load', () => {
								document.getElementById('jenis_kendaraan').value = localStorage.getItem('jenis_kendaraan');
							});
						</script>
					</div>
					<div class="form-group">
						<label for="kode_kendaraan">Kode Kendaraan</label>
						<input type="text" class="form-control" name="kode_kendaraan" id="kode_kendaraan" value="" readonly>
						<script>
							window.addEventListener('load', () => {
								document.getElementById('kode_kendaraan').value = localStorage.getItem('kode_kendaraan');
							});
						</script>
					</div>
					<div class="form-group">
						<label for="instruktur">Instruktur</label>
						<input type="text" class="form-control" name="instruktur" id="instruktur" value="" readonly>
						<script>
							window.addEventListener('load', () => {
								document.getElementById('instruktur').value = localStorage.getItem('instruktur');
							});
						</script>
					</div>
					<div class="form-group">
						<label for="paket">Paket</label>
						<div class="select-list">
							<select name="paket" id="paket">
								<option selected="true" disabled>Paket</option>
								<option value="a">A</option>
								<option value="b">B</option>
								<option value="c">C</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="pembayaran">Pembayaran</label><br>
						<div>
							<input type="radio" name="pembayaran" value="DP" id="dp" onchange="Hitung('dp')" />DP
							<input type="radio" name="pembayaran" value="Lunas" id="lunas" onchange="Hitung('lunas')" />Lunas
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-md-6">
								<label for="harga">Harga</label>
								<input type="text" class="form-control" name="harga" id="harga" readonly>
							</div>
							<p id="kurang-text">Silahkan melunasi kekurangan pembayaran sebesar <span id="kurang"></span> pada saat hari pertama kursus</p>
						</div>
					</div>
					<div class="form-group">
						<label for="buktiTF">Bukti Transfer</label><br>
						<!-- <div class="custom-file"> -->
						<input type="file" id="buktiTF" name="buktiTF" onchange="return validasiEkstensi()">
						<!-- <label class="custom-file-label" for="buktiTF">Upload Bukti Transfer</label> -->
						<div id="preview"></div>
						<!-- </div> -->
					</div>

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
			<input type="button" style="place-items:right;" class="btn btn-secondary" value="Daftar" onclick="validasi()">
		</div>
	</div>
</form>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.3.4/jquery.inputmask.bundle.min.js'></script>

<script>
	$('#kurang-text').hide();

	function validasi() {
		var nama = document.getElementById("nama").value;
		var ttl = document.getElementById("ttl").value;
		var pekerjaan = document.getElementById("pekerjaan").value;
		var alamat = document.getElementById("alamat").value;
		var jenis_kendaraan = document.getElementById("jenis_kendaraan").value;
		var kode_kendaraan = document.getElementById("kode_kendaraan").value;
		var instruktur = document.getElementById("instruktur").value;
		var telpon = document.getElementById("telpon").value;
		if (nama != "" && ttl != "" && pekerjaan != "" && alamat != "" && jenis_kendaraan != "" && kode_kendaraan != "" && instruktur != "" && telpon != "" && paket != "") {
			document.getElementById('form-daftar').submit();
		} else {
			alert('Isi data diri Anda dengan lengkap !');

		}
	}

	function validasiEkstensi() {
		var inputFile = document.getElementById('buktiTF');
		var pathFile = inputFile.value;
		var ekstensi = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
		if (!ekstensi.exec(pathFile)) {
			alert('Silakan upload file yang dengan ekstensi .jpeg/.jpg/.png/.gif');
			inputFile.value = '';
			return false;
		} else if (inputFile.files[0].size > 1000000) {
			alert("Ukuran File Terlalu Besar. Maksimal Upload 1 MB");
			inputFile.value = '';
			return false;
		} else {
			// Preview gambar
			if (inputFile.files && inputFile.files[0]) {
				var reader = new FileReader();
				reader.onload = function(e) {
					document.getElementById('preview').innerHTML = '<img src="' + e.target.result + '" style="height:300px"/>';
				};
				reader.readAsDataURL(inputFile.files[0]);
			}
		}
	}

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
		var tabel = document.getElementById("jadwal");
		var cekbokses = tabel.querySelectorAll('input[type=checkbox]');
		for (var cekboks of cekbokses) {
			var val = cekboks.value
			if (event.checked) {
				if (cekboks != event && !val.includes(jam)) {
					cekboks.setAttribute('disabled', true);
					document.getElementById("btnPilih").disabled = false;
				}
			} else {
				for (var cek of cekbokses) {
					var cval = cek.value
					if (cval.includes(jam) && cek.checked && !cek.disabled) {
						var Stop = true;
					}
				}
				if (!Stop) {
					document.getElementById("btnPilih").disabled = true;
					$('#formDaDir').hide();
					cekboks.removeAttribute("disabled");
					<?php if (isset($jadwal_orang)) { ?> jadwalOrang() <?php } ?>
				}
			}
		}
	}
	window.addEventListener('load', () => {
		document.getElementById("btnPilih").disabled = true;
		<?php if (isset($jadwal_orang)) { ?>
			jadwalOrang()
		<?php } ?>
	})
</script>
<script>
	function Hitung(x) {
		let harga = document.getElementById('harga');
		let jk = document.getElementById('jenis_kendaraan').value;
		let kk = document.getElementById('kode_kendaraan').value;
		let paket = document.getElementById('paket').value;
		let byr = document.getElementById(x);
		if (byr.checked) {
			byr = byr.value;
		} else {
			byr = null;
		}
		let minus = document.getElementById('kurang');
		let txt = document.getElementById('kurang-text');
		console.log(byr)
		if (jk == "Manual") {
			if (kk == "NAB" || kk == "NAS") {
				if (paket == "a") {
					var price = 770000;
					var min = 100000;
					if (byr == "DP") {
						harga.value = "Rp. 100.000";
						kurang = price - min;
						minus.innerText = String(kurang);
						$('#kurang-text').show();
					} else if (byr == "Lunas") {
						harga.value = "Rp. 770.000";
						$('#kurang-text').hide();
						// txt.classList.add('d-none');
					}
				} else if (paket == "b") {
					var price = 1135000;
					var min = 100000;
					if (byr == "DP") {
						harga.value = "Rp. 100.000";
						kurang = price - min;
						minus.innerText = String(kurang);
						$('#kurang-text').show();
					} else if (byr == "Lunas") {
						harga.value = "Rp. 1.135.000";
						$('#kurang-text').hide();
						// txt.classList.add('d-none');
					}
				} else if (paket == "c") {
					var price = 1530000;
					var min = 100000;
					if (byr == "DP") {
						harga.value = "Rp. 100.000";
						kurang = price - min;
						minus.innerText = String(kurang);
						$('#kurang-text').show();
					} else if (byr == "Lunas") {
						harga.value = "Rp. 1.530.000";
						$('#kurang-text').hide();
						// txt.classList.add('d-none');
					}
				} else {
					harga.value = " ";
					$('#kurang-text').hide();
				}
			} else if (kk == "AVNEW") {
				if (paket == "a") {
					var price = 820000;
					var min = 100000;
					if (byr == "DP") {
						harga.value = "Rp. 100.000";
						kurang = price - min;
						minus.innerText = String(kurang);
						$('#kurang-text').show();
					} else if (byr == "Lunas") {
						harga.value = "Rp. 820.000";
						$('#kurang-text').hide();
						// txt.classList.add('d-none');
					}
				} else if (paket == "b") {
					var price = 1210000;
					var min = 100000;
					if (byr == "DP") {
						harga.value = "Rp. 100.000";
						kurang = price - min;
						minus.innerText = String(kurang);
						$('#kurang-text').show();
					} else if (byr == "Lunas") {
						harga.value = "Rp. 1.210.000";
						$('#kurang-text').hide();
						// txt.classList.add('d-none');
					}
				} else {
					var price = 1600000;
					var min = 100000;
					if (byr == "DP") {
						harga.value = "Rp. 100.000";
						kurang = price - min;
						minus.innerText = String(kurang);
						$('#kurang-text').show();
					} else if (byr == "Lunas") {
						harga.value = "Rp. 1.600.000";
						$('#kurang-text').hide();
						// txt.classList.add('d-none');
					}
				}
			}
		} else if (jk == "Matic") {
			if (kk == "GMB" || "GMM") {
				if (paket == "a") {
					var price = 900000;
					var min = 100000;
					if (byr == "DP") {
						harga.value = "Rp. 100.000";
						kurang = price - min;
						minus.innerText = String(kurang);
						$('#kurang-text').show();
					} else if (byr == "Lunas") {
						harga.value = "Rp. 900.000";
						$('#kurang-text').hide();
						// txt.classList.add('d-none');
					}
				} else if (paket == "b") {
					var price = 1330000;
					var min = 100000;
					if (byr == "DP") {
						harga.value = "Rp. 100.000";
						kurang = price - min;
						minus.innerText = String(kurang);
						$('#kurang-text').show();
					} else if (byr == "Lunas") {
						harga.value = "Rp. 1.330.000";
						$('#kurang-text').hide();
						// txt.classList.add('d-none');
					}
				} else {
					var price = 1760000;
					var min = 100000;
					if (byr == "DP") {
						harga.value = "Rp. 100.000";
						kurang = price - min;
						minus.innerText = String(kurang);
						$('#kurang-text').show();
					} else if (byr == "Lunas") {
						harga.value = "Rp. 1.760.000";
						$('#kurang-text').hide();
						// txt.classList.add('d-none');
					}
				}
			}
		}
	}
</script>
<script>
	$('#formDaDir').hide();
	$(document).ready(function() {
		$('#btnPilih').click(function() {
			$('#formDaDir').toggle();
			var konten = document.getElementById("formDaDir");
			konten.scrollIntoView();
			// checked = $("input[type=checkbox]:checked").length;

			// if (!checked) {
			// 	alert("Pilih jadwal kursus");
			// 	return false;
			// } else {
			// 	$('#formDaDir').toggle();
			// }

		});
	});
</script>

<script>
	$(document).ready(function() {
		$('#telpon').inputmask("(9999-9999-9999)||(9999-9999-99999)");
	});
</script>
<?php $this->endSection(); ?>