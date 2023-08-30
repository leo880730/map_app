<!DOCTYPE html>
<html lang="enzh-Hant-TW">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Map_app</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/map_demo/public/css/main/style.css" />
  </head>

  <body>
    <header>
      <nav>
        <div class="app_name">築路</div>
        <a href="#" class="notification">
          <i class="fa-regular fa-bell"></i>
        </a>
      </nav>
    </header>

    <main>
      <div class="logo-image"></div>
      <div class="button-container">
        <button type="button" class="btn" id="planning-button" 
        onclick="location.href='/map_demo/public/planning/index.php'" >
          <i class="fa-solid fa-map-location-dot"></i>
          <h3>路線規劃</h3>
        </button>
        <button type="button" class="btn" id="scoring-button"
        onclick="location.href='/map_demo/public/scoring/index.php'" >
          <i class="fa-solid fa-pencil"></i>
          <h3>道路評分</h3>
        </button>
      </div>
    </main>


    <!-- <script>
      $('#planning-button').click( function() {
		location.href = '/map_demo/public/planning/index.php'
	  });
    </script> -->
    
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