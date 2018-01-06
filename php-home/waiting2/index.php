<?
	// REQUIRE FILES (필수)
	require "./config.inc.php";
	require "./function.inc.php";
	require "./set_init_data.inc.php";
	
	// MYSQLi INSTANCE
	$mysqli = mysqli_instance();
	
	list($id, $title, $waiting_date, $appoint_wait_cnt, $test_wait_cnt, $waiting_time) = fetch_first_row($mysqli, "SELECT id, title, waiting_date, appoint_wait_cnt, test_wait_cnt, waiting_time FROM waiting2 ORDER BY id DESC LIMIT 0, 1");
	list($waiting_date_y, $waiting_date_m, $waiting_date_d) = explode("-", $waiting_date);
	list($waiting_time_h, $waiting_time_m, $waiting_time_s) = explode(":", $waiting_time);
	
	// MYSQLi CLOSE
	$mysqli->close();
?>

<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <META HTTP-EQUIV="refresh" CONTENT="10">
    <title>대기판</title>
    <link rel="icon" href="/img/logo/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" href="/img/logo/favicon-192x192.png" sizes="192x192" />
    <link rel="stylesheet" href="./common/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="./common/fontawesome-pro/css/fontawesome-all.css">
    <link rel="stylesheet" href="./common/style.css">
    <script src="./common/jquery/jquery-3.2.1.min.js"></script>
  </head>
  
  <body>
    <div class="full-page d-flex justify-content-center align-items-center">
      <div class="display-area">
        <h1 class="text-center"><?= $title ?></h1>
        
        <h2 class="text-right">예약 대기: <big class="text-danger"><?= $appoint_wait_cnt ?></big>명</h2>
        <h3 class="text-right">검사 결과 대기: <big class="text-danger"><?= $test_wait_cnt ?></big>명</h3>
        
        <h2 class="text-center"><span class="text-danger">예상 대기 시간</span><br> <big class="text-danger"><?= $waiting_time_h ?></big>시간 <big class="text-danger"><?= $waiting_time_m ?></big>분 이상</h2>
        
        
      
      <!--
      <h1 class="text-center" style="font-size:120px; margin-top:80px;"><?= $waiting_date_m ?>월 <?= $waiting_date_d ?>일<br>대기 현황</h1>
      
      <h1 class="display-2 text-right" style="margin-top:120px;">예약 대기 환자: <strong class="text-danger"><span style="font-size:120px;"><?= $appoint_wait_cnt ?></span></strong>명</h1>
      <h1 class="display-2 text-right" style="margin-top:100px;">검사 결과 대기 환자: <strong class="text-danger"><span style="font-size:120px;"><?= $test_wait_cnt ?></span></strong>명</h1>
      
      <h1 class="text-center" style="font-size:120px; margin-top:80px;">예상 대기 시간<br> <strong class="text-danger"><?= $waiting_time_h ?></strong>시간 <strong class="text-danger"><?= $waiting_time_m ?></strong>분 이상</h1>
      -->
      
      </div>
    </div>
    
    
    <script src="./common/bootstrap/js/popper.min.js"></script>
    <script src="./common/bootstrap/js/bootstrap.min.js"></script>
    <script src="./common/app.js"></script>
    
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-110096020-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'UA-110096020-1');
    </script>
    
  </body>
</html>
