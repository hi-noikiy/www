<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>DataFirst - 데이터를 잘 압니다 (시험중13)</title>
    <link rel="icon" href="http://www2.datafirst.co.kr/wp-content/uploads/2017/03/cropped-logo_512x512-32x32.png" sizes="32x32" />
    <link rel="icon" href="http://www2.datafirst.co.kr/wp-content/uploads/2017/03/cropped-logo_512x512-192x192.png" sizes="192x192" />
    <link rel="apple-touch-icon-precomposed" href="http://www2.datafirst2.co.kr/wp-content/uploads/2017/03/cropped-logo_512x512-180x180.png" />
    <meta name="msapplication-TileImage" content="http://www2.datafirst2.co.kr/wp-content/uploads/2017/03/cropped-logo_512x512-270x270.png" />
    <link href="/common/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="/common/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="/common/font-awesome/css/font-awesome-animation.css" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Raleway:200,400,700|Open+Sans:200,400,700" rel="stylesheet">
    
    <style>
select.form-control {
  padding: 3px 5px 7px 5px;
}
.form-control {
  border-color: #d2d6de;
  border-radius: 0px;
  /*box-shadow: 10px 10px 5px #888888;;*/
  margin: 0px;
  padding: 5px;
  font-family: Arial,sans-serif;
  font-size: 12px;
  line-height: 18px;
  font-weight: normal;
}
.form-control:focus {
  /*box-shadow: none;*/
  border-color: #3c8dbc;
}
/*
.form-control::-moz-placeholder,
.form-control:-ms-input-placeholder,
.form-control::-webkit-input-placeholder {
  color: #bbb;
  opacity: 1;
}
*/
/*
.form-control:not(select) {
  appearance: none;
  -moz-appearance: none;
  -webkit-appearance: none;
}
*/
    </style>
  </head>
  
  <body>
                <form method="post" role="form" id="contact-form">
                  <div class="form-group row">
                    <label class="col-md-3 col-form-label text-md-right">회사명</label>
                    <div class="col-md-9">
                      <div class="form-inline">
                        <input type="text" class="form-control" name="company" value="" placeholder="예) 데이터퍼스트" style="width:14em;">
                        <p id="passwordHelpBlock" class="form-text text-muted">
                          Your password must be 8-20 
                        </p>

                      </div>
                    </div>
                  </div>
                  
                  
                  <div class="form-group row">
                    <label class="col-md-3 col-form-label text-md-right">지역</label>
                    <div class="col-md-9">
                      <div class="form-inline">
                        
				          <select class="form-control" name="search">
				            <option value="">선택</option>
				            <option value="cht_num" <? if ($search == "cht_num") echo "selected"; ?>>차트번호</option>
				            <option value="pat_name" <? if ($search == "pat_name") echo "selected"; ?>>환자명</option>
				            <option value="test_item_code" <? if ($search == "test_item_code") echo "selected"; ?>>항목코드</option>
				            <option value="test_item_name" <? if ($search == "test_item_name") echo "selected"; ?>>항목명</option>
				            <option value="result" <? if ($search == "result") echo "selected"; ?>>결과</option>
				          </select>
                        
                      </div>
                    </div>
                  </div>
                  
                  <div class="form-group row">
                    <label class="col-md-3 col-form-label text-md-right">지역</label>
                    <div class="col-md-9">
                      <div class="form-inline">
                        <input type="text" class="form-control input-sm" name="local" value="" placeholder="예) 서울시 마포구" style="width:14em;">
                      </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-md-3 col-form-label text-md-right"><span class="text-danger">*</span> 연락처</label>
                    <div class="col-md-9">
                      <div class="form-inline">
                        <input type="text" class="form-control form-control-sm" name="contact" value="" placeholder="예) 010-5555-8888" style="width:14em;">
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
                
    
    <script src="/common/jquery/jquery-3.2.1.min.js"></script>
    <script src="/common/bootstrap/js/bootstrap.min.js"></script>
    <script src="/common/app.js"></script>
  </body>
</html>
