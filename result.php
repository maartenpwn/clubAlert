<?php 
  $musicTaste = $_GET['muzieksmaak'];
  $entrancePrice = $_GET['entree'];
?>

<!DOCTYPE html>
<html>
<head>
  <title>Club Alert</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
  <meta http-equiv="content-type" content="text/html; charset=utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge; chrome=1">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <!-- Leaf map -->
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.0.3/dist/leaflet.css" />
  <script src="https://unpkg.com/leaflet@1.0.3/dist/leaflet.js"></script>
  <!-- Font awesome -->
  <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
  <!-- Foundation -->
  <link rel="stylesheet" href="css/foundation.css">
  <link rel="stylesheet" href="css/app.css">
</head>

<body>

  <div id="main">
    <a href="search.php" class="return" ><i class="fa fa-chevron-left" aria-hidden="true"></i></a>

    <div class="page">
      <div class="map-overlay hide" onclick="resetPopup()"></div>
      <div id="map-container" class="map-large"></div>

      <div class="club-popup link-vibes" onclick="popupVibes()"></div>
      <div class="club-popup link-beurs" onclick="popupBeurs()"></div>
      <div class="club-popup link-bar24" onclick="popupBar24()"></div>
      <div class="club-popup link-skihut" onclick="popupSkihut()"></div>

      <div class="bottom-popup hide">
        <span class="close-popup" onclick="resetPopup()"><i class="fa fa-times" aria-hidden="true"></i></span>
        
        <div class="popup-vibes popup-info hide">
          <h3>Vibes</h3>
          <i class="fa fa-music popup-icon" aria-hidden="true"></i><p>Techno</p>
          <i class="fa fa-eur popup-icon" aria-hidden="true"></i><p>3,00</p>
          <i class="fa fa-clock-o popup-icon" aria-hidden="true"></i><p>Open tot: 06:00</p>
          <i class="fa fa-home popup-icon" aria-hidden="true"></i><p>Adress: Langelaan 23</p>
        </div>

        <div class="popup-beurs popup-info hide">
          <h3>Beurs</h3>
          <i class="fa fa-music popup-icon" aria-hidden="true"></i><p>Dance</p>
          <i class="fa fa-eur popup-icon" aria-hidden="true"></i><p>gratis</p>
          <i class="fa fa-clock-o popup-icon" aria-hidden="true"></i><p>04:00</p>
          <i class="fa fa-home popup-icon" aria-hidden="true"></i><p>Langelaan 23</p>
        </div>

        <div class="popup-bar24 popup-info hide">
          <h3>Bar 24</h3>
          <i class="fa fa-music popup-icon" aria-hidden="true"></i><p>Rap</p>
          <i class="fa fa-eur popup-icon" aria-hidden="true"></i><p>10.00</p>
          <i class="fa fa-clock-o popup-icon" aria-hidden="true"></i><p>04:00</p>
          <i class="fa fa-home popup-icon" aria-hidden="true"></i><p>Langelaan 23</p>
        </div>

        <div class="popup-skihut popup-info hide">
          <h3>Skihut</h3>
          <i class="fa fa-music popup-icon" aria-hidden="true"></i><p>Nederlandstalig</p>
          <i class="fa fa-eur popup-icon" aria-hidden="true"></i><p>gratis</p>
          <i class="fa fa-clock-o popup-icon" aria-hidden="true"></i><p>01:00</p>
          <i class="fa fa-home popup-icon" aria-hidden="true"></i><p>Langelaan 23</p>
        </div>

      </div>

    </div>
  </div>

  <div id="data"
    data-musictype="<?php echo $_GET['muzieksmaak']; ?>" 
    data-entrance="<?php echo $_GET['entree']; ?>" 
    data-rangevalue="<?php echo $_GET['thevalue']; ?>" 
  ></div>

  <script src="js/script.js"></script>
  <script src="js/vendor/jquery.js"></script>
  <script src="js/vendor/what-input.js"></script>
  <script src="js/vendor/foundation.js"></script>
  <script src="js/app.js"></script>

</body>
</html>
