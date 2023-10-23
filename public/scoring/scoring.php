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
         onclick="location.href='/map_demo/public/scoring/index.php'">
          <i class="fa-solid fa-arrow-left"></i>
        </button>
        <div class="personal-scoring-title">個人評分</div>
        <button type="button" class="btn" id="home-btn"
         onclick="location.href='/map_demo/public/index.php'">
          <i class="fa-solid fa-house"></i>
        </button>
      </nav>
    </header>

    <main>

    <div class="address"></div>
      <div class="range-section">
        <div class="range-container">
          <label for="flat-range" class="form-label">平坦</label>
          <div class="range-item">
            <input type="range" class="form-range" min="0" max="5" step="1" value="0" id="flat-range">
          <h3>012345</h3>
          </div>
        </div>

        <div class="range-container">
          <label for="smooth-range" class="form-label">順暢</label>
          <div class="range-item">
            <input type="range" class="form-range" min="0" max="5" step="1" value="0" id="smooth-range">
            <h3>012345</h3>
          </div>
        </div>

        <div class="range-container">
          <label for="wide-range" class="form-label">寬敞</label>
          <div class="range-item">
            <input type="range" class="form-range" min="0" max="5" step="1" value="0" id="wide-range">
            <h3>012345</h3>
          </div>
        </div>
        
        <div class="range-container">
          <label for="lighting-range" class="form-label">照明</label>
          <div class="range-item">
            <input type="range" class="form-range" min="0" max="5" step="1" value="0" id="lighting-range">
            <h3>012345</h3>
          </div>
        </div>
        
        <div class="range-container">
          <label for="looks-range" class="form-label">美觀</label>
          <div class="range-item">
            <input type="range" class="form-range" min="0" max="5" step="1" value="0" id="looks-range">
            <h3>012345</h3>
          </div>
        </div>
        
        <div class="range-container">
          <label for="plant-range" class="form-label">綠化</label>
          <div class="range-item">
            <input type="range" class="form-range" min="0" max="5" step="1" value="0" id="plant-range">
            <h3>012345</h3>
          </div>
        </div>
      </div>

      <div class="submit-btn-container">
        <button type="button" class="btn" id="submit-btn"
         onclick="location.href='/map_demo/public/scoring/result.php'">提交評分
        </button>

      </div>
      
    </main>
    <script>

      let = scoringRoad = window.localStorage.getItem('road')
      let = scoringOrigin = window.localStorage.getItem('origin')
      let = scoringDestination = window.localStorage.getItem('destination')

      let address = document.querySelector(".address")

      address.innerHTML = `
      <h1 id="address">${scoringRoad} ${scoringOrigin}號 - ${scoringDestination} 號</h1>`

      const valueSelector = document.querySelectorAll(".form-range");

      for(let i = 0; i <=5; i++){
        valueSelector[i].addEventListener("input", function(){
          let inputValue = valueSelector[i].value;         
          if(inputValue <= 1){
            valueSelector[i].style.backgroundColor = "#f3dede"
          } else if(inputValue <= 3 && inputValue >= 2){
            valueSelector[i].style.backgroundColor = "#f1f1ac"
          } else if(inputValue >= 4){
            valueSelector[i].style.backgroundColor = "#d6f4cc"
          }
        })
      }
      
    </script>
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