<!DOCTYPE html>
<html lang="enzh-Hant-TW">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Map_app_scoring</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/map_demo/public/scoring/style.css" />
    <!-- popper -->
    <!-- <script src="https://unpkg.com/@popperjs/core@2" crossorigin="anonymous"></script> -->
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.js"
  crossorigin="anonymous"></script>
    <!-- Bootstrap -->
    <script src="./../js/bootstrap.bundle.min.js"></script>
    <script src="./../js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/dfe50b8167.js" crossorigin="anonymous"></script>
  </head>

  <body>
    <div class="loader">
      <h1 id="wait">請稍候⋯</h1>
      <h1 id="submit-error">系統錯誤，請重新整理網頁稍後再試</h1>
    </div>
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
        <button type="button" class="btn" id="submit-btn">提交評分
        </button>
        <!-- onclick="location.href='/map_demo/public/scoring/result.php'" -->
      </div>
      
    </main>
    <script>

      let road = window.localStorage.getItem('road')
      let origin = window.localStorage.getItem('origin')
      let destination = window.localStorage.getItem('destination')

      let address = document.querySelector('.address')

      address.innerHTML = `
      <h1 id="address">${road} ${origin}號 - ${destination} 號</h1>`

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

      let submitBtn = document.querySelector('#submit-btn')
      
      function send(){
        document.querySelector('.loader').style.display="block"
        // location.href='/map_demo/public/scoring/result.php'

        let road = window.localStorage.getItem('road')
        let origin = window.localStorage.getItem('origin')
        let destination = window.localStorage.getItem('destination')
        let flat = document.querySelector('#flat-range').value;
        let smooth = document.querySelector('#smooth-range').value;
        let wide = document.querySelector('#wide-range').value;
        let lighting = document.querySelector('#lighting-range').value;
        let looks = document.querySelector('#looks-range').value;
        let plant = document.querySelector('#plant-range').value;

        $.ajax({
          url: "https://script.google.com/macros/s/AKfycbytDlom0QPS0k-BKRqY1mh6AU45_rESFUCb1G0AAmaLbWMaP10jpFWCY_xcRuAY-ZIGgQ/exec",
          data: {
            "road": road,
            "origin": origin,
            "destination": destination,
            "flat": flat,
            "smooth": smooth,
            "wide": wide,
            "lighting": lighting,
            "looks": looks,
            "plant": plant,
            
          },
          success: function(response) {
            if(response == "Success"){
                location.href='/map_demo/public/scoring/result.php'
            }
          },
          error: function(){
            // alert('系統錯誤，請重新整理網頁稍後再試！')
            document.querySelector('#wait').style.display= "none"
            document.querySelector('#submit-error').style.display= "block"
          },
        })
      }

      submitBtn.addEventListener('click', send)
      
    </script>
  </body>
</html>