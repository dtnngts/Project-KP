<?= $this->extend('layout/templateuser'); ?>

<?= $this->section('content'); ?>

<body>

  <!-- MENU BAR -->
  <nav class="navbar navbar-expand-lg">
    <div class="container">
      <a class="navbar-brand" href="/">
        <img class="img-profile rounded-circle" src="assets/images/logop.png" width=75px;></i>
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


  <!-- HERO -->
  <section class="hero hero-bg d-flex justify-content-center align-items-center">
    <div class="container">
      <div class="row">

        <div class="col-lg-6 col-md-10 col-12 d-flex flex-column justify-content-center align-items-center">
          <div class="hero-text">

            <h1 class="text-white" data-aos="fade-up">Ayo Belajar Mengemudi di Princess Solution</h1>

            <a href="https://wa.me/6281279572555" target="_blank" class="custom-btn btn-bg btn mt-3" data-aos="fade-up" data-aos-delay="100">Hubungi Kami!</a>

            <strong class="d-block py-3 pl-5 text-white" data-aos="fade-up" data-aos-delay="200"><i class="fa fa-phone mr-2"></i> +62 812-7957-2555</strong>
          </div>
        </div>

        <div class="col-lg-6 col-12">
          <div class="hero-image" data-aos="fade-up" data-aos-delay="300">

            <img src="assets/images/instruktur.png" class="img-fluid" alt="working girl">
          </div>
        </div>

      </div>
    </div>
  </section>


  <!-- ABOUT -->
  <section class="about section-padding pb-0" id="about">
    <div class="container">
      <div class="row">

        <div class="col-lg-7 mx-auto col-md-10 col-12">
          <div class="about-info">

            <h2 class="mb-4" data-aos="fade-up">the best <strong>Car Driving Course</strong> in Lampung</h2>

            <p class="mb-0" data-aos="fade-up">Perusahaan PRINCESS berawal dari sebuah usaha Kursus Mengemudi yang kemudian juga dikembangkan di bidang Biro Jasa.
              Perusahaan ini didirikan oleh Bapak Rinaldo PB dan Ibu Fatmawati S. pada tanggal 5 Mei 1990 yang bertempat di sebuah
              lokasi kecil di sisi Jalan Raden Intan, Bandar Lampung.
              <br><br>Perusahaan ini dirintis <strong>pertama</strong> kali dengan hanya memiliki 3
              karyawan untuk melayani konsumen Biro Jasa dan memiliki sebuah mobil Jimny Katana merah sebagai armada Kursus Mengemudi.
              Pendiri memberi nama usahanya tersebut dengan nama PRINCESS..
            </p>
          </div>

          <div class="about-image" data-aos="fade-up" data-aos-delay="200">

            <img src="assets/images/pp.png" class="img-fluid" alt="office">
          </div>
        </div>

      </div>
    </div>
  </section>


  <!-- PROJECT -->
  <section class="project section-padding" id="project">
    <div class="container-fluid">
      <div class="row">

        <div class="col-lg-12 col-12">

          <h2 class="mb-5 text-center" data-aos="fade-up">
            Daftar Paket
            <strong>Kursus Mengemudi Mobil</strong>
          </h2>

          <div class="owl-carousel owl-theme" id="project-slide">
            <div class="item project-wrapper" data-aos="fade-up" data-aos-delay="100">
              <img src="assets/images/1.png" class="img-fluid" alt="project image">


            </div>

            <div class="item project-wrapper" data-aos="fade-up">
              <img src="assets/images/2.png" class="img-fluid" alt="project image">


            </div>

            <div class="item project-wrapper" data-aos="fade-up">
              <img src="assets/images/3.png" class="img-fluid" alt="project image">


            </div>




          </div>
        </div>

      </div>
    </div>
  </section>


  <!-- TESTIMONIAL -->
  <section class="testimonial section-padding">
    <div class="container">
      <div class="row">

        <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
          <div class="contact-image" data-aos="fade-up">

            <img src="assets/images/jam.png" class="img-fluid" alt="website">
          </div>
        </div>

        <div class="col-lg-6 col-md-7 col-12">
          <h4 class=" text-center my-5 pt-3" data-aos="fade-up" data-aos-delay="100">Opening Hours</h4>
          <table class="table text-center text-dark">
            <tbody class="fw-normal">
              <tr>
                <td>Senin - Jum'at:</td>
                <td>08.00 - 17.00</td>
              </tr>
              <tr>
                <td>Sabtu:</td>
                <td>08.00 - 15.00</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </section>


  <footer class="site-footer">
    <div class="container">
      <div class="row">

        <div class="col-lg-5 mx-lg-auto col-md-8 col-10">
          <h1 class="text-white" data-aos="fade-up" data-aos-delay="100">Princess <strong>Solution</strong>.</h1>
        </div>

        <div class="col-lg-3 col-md-6 col-12" data-aos="fade-up" data-aos-delay="200">
          <h4 class="my-4">Contact Info</h4>

          <p class="mb-1">
            <i class="fa fa-phone mr-2 footer-icon"></i>
            +62 812-7957-2555
          </p>

          <p>
            <a href="#">
              <i class="fa fa-envelope mr-2 footer-icon"></i>
              hello@company.com
            </a>
          </p>
        </div>

        <div class="col-lg-3 col-md-6 col-12" data-aos="fade-up" data-aos-delay="300">
          <h4 class="my-4">Alamat</h4>

          <p class="mb-1">
            <i class="fa fa-home mr-2 footer-icon"></i>
            No.06, Jl.Jenderal Ahmad Yani, Gotong Royong, Kec. Tj. Karang Pusat, Kota Bandar Lampung, Lampung 35119.
          </p>
        </div>

        <div class="col-lg-4 mx-lg-auto text-center col-md-8 col-12" data-aos="fade-up" data-aos-delay="400">
          <p class="copyright-text">Copyright &copy; 2022 DotaAprilLase
            <br>
          </p>
        </div>

        <div class="col-lg-4 mx-lg-auto col-md-6 col-12" data-aos="fade-up" data-aos-delay="500">

          <ul class="footer-link">
            <li><a href="#">Stories</a></li>
            <li><a href="#">Work with us</a></li>
            <li><a href="#">Privacy</a></li>
          </ul>
        </div>

        <div class="col-lg-3 mx-lg-auto col-md-6 col-12" data-aos="fade-up" data-aos-delay="600">
          <ul class="social-icon">
            <li><a href="#" class="fa fa-instagram"></a></li>
            <li><a href="#" class="fa fa-twitter"></a></li>
            <li><a href="#" class="fa fa-dribbble"></a></li>
            <li><a href="#" class="fa fa-behance"></a></li>
          </ul>
        </div>

      </div>
    </div>
  </footer>


</body>
<?php $this->endSection(); ?>

