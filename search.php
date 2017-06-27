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

  <div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <!-- <a href="#">Info</a> -->
    <!-- <a href="#">Contact</a> -->
    <a href="index.html">Logout</a>
  </div>

  <div id="main">
    <span class="hamburger-menu" onclick="openNav()">&#9776; </span>

    <div class="page">
      <div id="map-container"></div>
      
      <div class="search-container">
        <div class="row">
          <div class="small-11 small-centered columns">    
            
            <form action="result.php" method="get">
                <h3>Muzieksmaak</h3>
                <select name="muzieksmaak">
                  <option value="alles">Alles</option>
                  <option value="techno">Techno</option>
                  <option value="dance">Dance</option>
                  <option value="rap">Rap</option>
                  <option value="nederlandstalig">Nederlandstalig</option>
                </select>

                <h3>Entree</h3>
                <select name="entree">
                  <option value="alles">Alles</option>
                  <option value="gratis">gratis</option>
                  <option value="minderdan5">5 of minder</option>
                  <option value="meerdan5">meer dan 5</option>
                </select>

                <h3>Afstand</h3>
                <div class="range-slider">
                  <input class="input-range" name="thevalue" type="range" value="500" min="100" max="1000">
                  <span class="range-value"></span>
                </div> 

                <input type="submit" class="button expand" value="zoeken">
            </form>

          </div>
        </div>
      </div>

    </div>
  </div>

  <script src="js/script.js"></script>
  <script src="js/vendor/jquery.js"></script>
  <script src="js/vendor/what-input.js"></script>
  <script src="js/vendor/foundation.js"></script>
  <script src="js/app.js"></script>

</body>
</html>
