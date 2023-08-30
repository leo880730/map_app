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
        <div class="result-personal-scoring-title">個人評分</div>
      </nav>
    </header>

    <main>
      <div class="result-title-container">
        <h2 class="result-title">您已完成評分</h2>
        <h2 class="result-title">感謝您為用路環境盡一份心力</h2>
      </div>
      <div class="result-btn-container">
        <button type="button" class="result-btn" id="result-scoring-btn"
         onclick="location.href='/map_demo/public/scoring/scoring.php'">
          <i class="fa-solid fa-arrow-left result-btn-icon"></i>
          <span class="result-btn-description">更改評分內容</span>
        </button>

        <button type="button" class="result-btn" id="result-index-btn"
         onclick="location.href='/map_demo/public/scoring/index.php'">
          <i class="fa-solid fa-pencil result-btn-icon"></i>
          <span class="result-btn-description">提交其他路段評分</span>
        </button>

        <button type="button" class="result-btn" id="result-home-btn"
         onclick="location.href='/map_demo/public/index.php'">
          <i class="fa-solid fa-house result-btn-icon"></i>
          <span class="result-btn-description">回首頁</span>
        </button>
      </div>
      
      
    </main>
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