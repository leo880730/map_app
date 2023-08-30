<!DOCTYPE html>
<html lang="enzh-Hant-TW">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Map_app_scoring</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/map_demo/public/scoring/style.css" />
  </head>

  <body>
    <header>
      <nav>
        <button type="button" class="btn" id="previous-btn"
        onclick="location.href='/map_demo/public/index.php'">
          <i class="fa-solid fa-arrow-left"></i>
        </button>

        <div class="scoring-title">路段評分</div>

      </nav>
    </header>

    <main>
      <div class="map-search-bar">
        <div class="map-search-description-container">
          <span class="search-description" id="road-search-description">路段</span>
          <span class="search-description" id="origin-search-description">起點</span>
          <span class="search-description" id="destination-search-description">終點</span>
        </div>
        <div class="map-search-input-container">
          <input type="text" class="map-search-input" id="road-input" >
          <input type="text" class="map-search-input" id="origin-number-input">
          <span class="map-search-input-span">號</span>
          <span class="map-search-input-span">-</span>
          <input type="text" class="map-search-input" id="destination-number-input">
          <span class="map-search-input-span">號</span>
          <i class="fa-solid fa-location-dot" id="search-bar-icon"></i>
        </div>
      </div>
      
      <div class="map-container" id="map">
      </div>

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
      <script>
        function initMap() {
          if (navigator.geolocation) {
              navigator.geolocation.getCurrentPosition(function(position) {
                  var pos = {
                      lat: position.coords.latitude,
                      lng: position.coords.longitude
                  };
                  var map = new google.maps.Map(document.getElementById('map'), {
                    zoom: 16,
                    center: pos
                  });
                  var marker = new google.maps.Marker({
                      position: pos,
                      // icon:'marker.png',
                      map: map
                  });
                  map.setZoom(16);
                  map.setCenter(pos);
              });
          } else {
              // Browser doesn't support Geolocation
              alert("未允許或遭遇錯誤！");
          }
        }
      </script>
      <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBbNQvY6xQyNdxOrYl9aQFzN76u9AH30n8&callback=initMap">
      </script>

    </main>

    <footer>
      <div class="footer-title-container">
        <h1 class="footer-title">請選擇您要評分的路段！</h1>
      </div>
      <div class="scoring-button-container">
        <button type="button" class="btn" id="scoring-button"
        onclick="location.href='/map_demo/public/scoring/scoring.php'" >
          開始評分
        </button>
      </div>
    </footer>
    <!-- popper -->
      <script src="https://unpkg.com/@popperjs/core@2" crossorigin="anonymous"></script>
      <!-- jQuery -->
      <script src="./../js/jquery-3.1.0.min.js"></script>
      <!-- Bootstrap -->
      <script src="./../js/bootstrap.bundle.min.js"></script>
      <script src="./../js/bootstrap.min.js"></script>
      <script src="https://kit.fontawesome.com/dfe50b8167.js" crossorigin="anonymous"></script>
  </body>
</html>