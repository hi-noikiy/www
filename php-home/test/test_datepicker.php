<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>DataFirst - 데이터를 잘 압니다</title>
    <link rel="icon" href="http://www2.datafirst.co.kr/wp-content/uploads/2017/03/cropped-logo_512x512-32x32.png" sizes="32x32" />
    <link rel="icon" href="http://www2.datafirst.co.kr/wp-content/uploads/2017/03/cropped-logo_512x512-192x192.png" sizes="192x192" />
    <link rel="apple-touch-icon-precomposed" href="http://www2.datafirst2.co.kr/wp-content/uploads/2017/03/cropped-logo_512x512-180x180.png" />
    <meta name="msapplication-TileImage" content="http://www2.datafirst2.co.kr/wp-content/uploads/2017/03/cropped-logo_512x512-270x270.png" />
    <link href="/common/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="/common/font-awesome/css/font-awesome.min.css">
    <link href="//fonts.googleapis.com/css?family=Raleway:200,400,700|Open+Sans:200,400,700" rel="stylesheet">
    <link rel="stylesheet" href="/test/bootstrap-datepicker/css/bootstrap-datepicker3.min.css">
    <link rel="stylesheet" href="/common/style.css">
    <style>
    .main-content {
      margin-top: 51px;
    }
    .input-group-addon {
      font-size: 14px;
      border-radius: 0px;
    }
    .datepicker {
      font-size: 14px;
    }
    </style>
  </head>
  
  <body>
    <div class="main-content">
                <form method="post" role="form" id="contact-form">
                  <div class="form-group row">
                    <label class="col-md-3 col-form-label text-md-right">등록일</label>
                    <div class="col-md-9">
                      <div class="form-inline">
                        <input data-provide="datepicker">
                      </div>
                    </div>
                  </div>
                  
                  <div class="form-group row">
                    <label class="col-md-3 col-form-label text-md-right">지역</label>
                    <div class="col-md-9">
                      <div class="form-inline">
                        <input type="text" class="form-control datepicker" name="local" value="" placeholder="예) 서울시 마포구" style="width:14em;">
                      </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-md-3 col-form-label text-md-right"><span class="text-danger">*</span> 연락처</label>
                    <div class="col-md-9">
                      <div class="form-inline">
          <div class="input-group date">
            <input type="text" class="form-control" name="find_s_test_date" value="<?= $find_s_test_date ?>" maxlength="10" style="width:7em;">
            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
          </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-md-3 col-form-label text-md-right"><span class="text-danger">*</span> 내용</label>
                    <div class="col-md-9">
                      <div class="form-inline">
                        <textarea class="form-control input-sm" rows="5" name="content" style="width:14em;"></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-md-9 ml-auto">
                      <button type="submit" class="btn btn-primary btn-sm">SEND</button>
                    </div>
                  </div>
                </form>
                
      </div>
      
    <script src="/common/jquery/jquery-3.2.1.min.js"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="/common/bootstrap/js/bootstrap.min.js"></script>
    
    <script src="/test/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
    <script src="/test/bootstrap-datepicker/locales/bootstrap-datepicker.ko.min.js"></script>
    
    <script>
    $('.datepicker').datepicker({
      autoclose: true,
      format: "yyyy-mm-dd",
      language: "ko",
      zIndexOffset: 2000
    });
    
  //Date picker
  $("body").on("focus", ".input-group.date", function() {
    $(this).datepicker({
      autoclose: true,
      format: "yyyy-mm-dd",
      language: "ko",
      zIndexOffset: 2000
    });
  });
    
    </script>
  </body>
</html>
