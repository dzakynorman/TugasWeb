<!DOCTYPE html>
<html>
<head>
    <title>MAP Cabang NGKKS</title>
<?php include('partials/header.php'); ?>
    <style>
        #map{
            height: 400px;
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="js-sticky">
            <div class="fh5co-main-nav">
                <div class="container-fluid">
                    <div class="fh5co-menu-1">
                        <a href="home.php" onclick="window.location.href='home.php'">Beranda</a>
                        <a href="home.php" onclick="window.location.href='home.php'">Menu</a>
                    </div>
                    <div class="fh5co-logo">
                        <a href="#">NGKKS</a>
                    </div>
                    <div class="fh5co-menu-2">
                        <a href="home.php" onclick="window.location.href='home.php'">Outlet</a>
                        <a href="login.php" onclick="window.location.href='login.php'">Order</a>
                    </div>
                </div>
            </div>
        </div>
    <div id="map"></div>

    <?php
    // ambil latitude longitude dari home.php per id
        $lat = $_GET['lat'];
        $lng = $_GET['lng'];
    ?>

    <script>
        var latitude = "<?php echo $lat; ?>";
        var longitude = "<?php echo $lng; ?>";

        function initMap(){

            // center map
            var uluru = {lat: parseFloat(latitude), lng: parseFloat(longitude)};

            // buat map
            var map = new google.maps.Map(
                document.getElementById('map'), {zoom: 15, center: uluru});

            // buat marker
            var marker = new google.maps.Marker({position: uluru, map: map});
        }
    </script>
<!-- script google api -->
    <script async defer src = "https://maps.googleapis.com/maps/api/js?key=AIzaSyDjcv4dEOOtHw0srW1XQrUAXAtQJCY2EME&callback=initMap"></script>
<?php include('partials/footer.php'); ?>
</body>
</html>