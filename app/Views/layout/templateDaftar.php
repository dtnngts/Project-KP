<!DOCTYPE html>
<html lang="en">

<head>


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="/assets/images/logop.png">

    <title>Princess Solution</title>

    <!-- Custom fonts for this template-->
    <link href="/assets/sb/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="/assets/sb/https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="/assets/sb/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">


</head>

<?= $this->renderSection('myscript'); ?>

<body>
    <?= $this->renderSection('content'); ?>

    <!-- Bootstrap core JavaScript-->
    <script src="assets/sb/vendor/jquery/jquery.min.js"></script>
    <script src="assets/sb/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="assets/sb/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="assets/sb/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="assets/sb/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="assets/sb/js/demo/chart-area-demo.js"></script>
    <script src="assets/sb/js/demo/chart-pie-demo.js"></script>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/custom.js"></script>

    <script>
        $('#pkManual').hide();
        $('#pkMatic').hide();
        $('#detailsnab').hide();
        $('#detailsnas').hide();
        $('#detailsavnew').hide();
        $('#detailsgmb').hide();
        $('#detailsgmm').hide();

        $('#btnManual').click(function() {
            $('#pkManual').toggle();
            $('#pkMatic').hide();
        });

        $('#btnMatic').click(function() {
            $('#pkMatic').toggle();
            $('#pkManual').hide();
        });

        $('#nab').click(function() {
            $('#detailsnab').toggle();
            $('#detailsnas').hide();
            $('#detailsavnew').hide();
            $('#detailsgmb').hide();
            $('#detailsgmm').hide();
        })

        $('#nas').click(function() {
            $('#detailsnas').toggle();
            $('#detailsnab').hide();
            $('#detailsavnew').hide();
            $('#detailsgmb').hide();
            $('#detailsgmm').hide();
        })

        $('#avnew').click(function() {
            $('#detailsavnew').toggle();
            $('#detailsnab').hide();
            $('#detailsnas').hide();
            $('#detailsgmb').hide();
            $('#detailsgmm').hide();
        })

        $('#gmb').click(function() {
            $('#detailsgmb').toggle();
            $('#detailsnab').hide();
            $('#detailsnas').hide();
            $('#detailsavnew').hide();
            $('#detailsgmm').hide();
        })

        $('#gmm').click(function() {
            $('#detailsgmm').toggle();
            $('#detailsnab').hide();
            $('#detailsnas').hide();
            $('#detailsavnew').hide();
            $('#detailsgmb').hide();
        })
    </script>

</body>

</html>