<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>DataFirst - 데이터를 잘 압니다</title>
    <link rel="icon" href="/img/logo/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" href="/img/logo/favicon-192x192.png" sizes="192x192" />
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:200,400,700|Raleway:200,400,700|Open+Sans:200,400,700">
    <link rel="stylesheet" href="/common/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="/common/fontawesome-pro/css/fontawesome-all.css">
    <link rel="stylesheet" href="/common/style.css">
    <script src="/common/jquery/jquery-3.2.1.min.js"></script>
  </head>
  
  <body>
    <nav class="navbar fixed-top navbar-expand-md navbar-light">
      <div class="container">
        <a class="navbar-brand" href="/"><img src="/img/logo/full-logo-278x60.png" alt="데이터퍼스트 로고"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse">
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item <? if ($selected_menu == "home") echo "active"; ?>"><a class="nav-link" href="/">HOME</a></li>
            <li class="nav-item <? if ($selected_menu == "chart") echo "active"; ?>"><a class="nav-link" href="/chart.php">혈액 투석 차트</a></li>
            <li class="nav-item <? if ($selected_menu == "account") echo "active"; ?>"><a class="nav-link" href="/account.php">회계 장부</a></li>
            <li class="nav-item"><a class="nav-link contact-btn" href="#">CONTACT</a></li>
          </ul>
        </div>
      </div>
    </nav>
    