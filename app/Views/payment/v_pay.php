<?= $this->extend('layout/template'); ?>


<?= $this->section('content'); ?>

<div class="main-panel">
    <div class="content-wrapper">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <button id="pay-button">Pay!</button>
                    <pre><div id="result-json">JSON result will appear here after payment:<br></div></pre>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- TODO: Remove ".sandbox" from script src URL for production environment. Also input your client key in "data-client-key" -->

<script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="SB-Mid-client-nzzWJUPUn3dr0TGo"></script>
<script type="text/javascript">
    document.getElementById('pay-button').onclick = function() {
        // SnapToken acquired from previous step
        snap.pay('<?= $snapToken ?>', {
            // Optional
            onSuccess: function(result) {
                /* You may add your own js here, this is just example */
                document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                console.log(JSON.stringify(result, null, 2));
            },
            // Optional
            onPending: function(result) {
                /* You may add your own js here, this is just example */
                document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                console.log(JSON.stringify(result, null, 2));
            },
            // Optional
            onError: function(result) {
                /* You may add your own js here, this is just example */
                document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                console.log(JSON.stringify(result, null, 2));
            }
        });
    };
</script>



<!-- <div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Payment</h4>
            <form class="forms-sample">
              <div class="form-group">
                <label for="exampleInputUsername1">Paket</label>
                <input type="text" class="form-control" id="exampleInputPaket" placeholder="Paket">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Harga</label>
                <input type="text" class="form-control" id="exampleInputHarga" placeholder="Harga">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Jumlah</label>
                <input type="text" class="form-control" id="exampleInputJumlah" placeholder="Jumlah">
              </div> -->

<!-- <li class="nav-item dropdown"> -->
<!-- <div class="row row-cols-2">
                <div class="col">
                  <li class="nav-item dropdown d-none d-lg-block">
                    <a class="btn btn-outline-success btn-fw nav-link dropdown-bordered dropdown-toggle dropdown-toggle-split" id="messageDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false"> cashless </a>
                    <div class=" dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="messageDropdown">
                      <a class=" dropdown-item py-3" href="detail">
                        <p class="mb-0 font-weight-medium float-left">M-Banking</p>
                      </a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item preview-item" href="detail">
                        <div class="preview-item-content flex-grow py-2">
                          <p class="preview-subject ellipsis font-weight-medium text-dark">E-Wallet </p>
                        </div>
                      </a>
                    </div>
                  </li>
                </div>
                <div class="col">
                  <a class="btn btn-outline-success btn-fw nav-link dropdown-bordered  dropdown-toggle-split " href="detail">cash</a>
                </div>
              </div>

              <div>
                <button type="submit" class="btn btn-primary justify-content-center">Bayar</button>
              </div>

          </div> -->
<?= $this->endSection(); ?>