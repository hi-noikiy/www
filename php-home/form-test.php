
<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>삼성명인내과</title>
    <link rel="stylesheet" href="/common/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="/common/fontawesome-pro/css/fontawesome-all.css">
    <link rel="stylesheet" href="/common/style.css">
    <script src="/common/jquery/jquery-3.2.1.min.js"></script>
  </head>
  
  <body>
  
        <form method="get" role="form" action="/pat.php">
        <div class="input-group" style="width:300px">
          <input class="form-control" type="text" name="find_navbar" value="">
          <span class="input-group-append">
            <button type="submit" class="btn btn-default btn-flat"><i class="fas fa-search fa-fw"></i></button>
          </span>
        </div>
        </form>
  
    
    <form method="post" role="form" id="db-form" action="/mhb_hospital.php" enctype="multipart/form-data">
    
    <div class="content">
      <div class="content-header with-border">
        <big>병원 기초 정보 (기본 정보)</big>
      </div>
      
      <div class="content-body">
        
        <div class="form-group row">
          <label class="col-md-3 col-form-label text-md-right mr-auto"><span class="text-danger">기본 정보</span></label>
        </div>
        
        <div class="form-group row">
          <label class="col-md-3 col-form-label text-md-right"><span class="text-danger">*</span> 코드</label>
          <div class="col-md-9">
            <div class="form-inline">
              <p class="form-text">31379150</p>
              <p class="form-text text-muted ml-2">(변경 불가)</p>
            </div>
          </div>
        </div>
        
        <div class="form-group row">
          <label class="col-md-3 col-form-label text-md-right"><span class="text-danger">*</span> 이름</label>
          <div class="col-md-9">
            <div class="form-inline">
              <input class="form-control" type="text" name="name" value="삼성명인내과" maxlength="20" style="width:10em;">
            </div>
          </div>
        </div>
        
        <div class="form-group row">
          <label class="col-md-3 col-form-label text-md-right"><span class="text-danger">*</span> Tel</label>
          <div class="col-md-9">
            <div class="form-inline">
              <select class="form-control" name="tel_no1" style="width:60px;">
                <option value="" >선택</option>
                <option value="02" >02</option>
                <option value="051" >051</option>
                <option value="053" >053</option>
                <option value="032" >032</option>
                <option value="062" >062</option>
                <option value="042" >042</option>
                <option value="052" >052</option>
                <option value="044" >044</option>
                <option value="031" selected>031</option>
                <option value="033" >033</option>
                <option value="043" >043</option>
                <option value="041" >041</option>
                <option value="063" >063</option>
                <option value="061" >061</option>
                <option value="054" >054</option>
                <option value="055" >055</option>
                <option value="064" >064</option>
                <option value="070" >070</option>
              </select>
              <p class="form-text text-muted mx-1">-</p>
              <input type="tel" class="form-control" name="tel_no2" value="642" maxlength="4" style="width:4em;">
              <p class="form-control-plaintext text-muted mx-1">-</p>
              <input type="tel" class="form-control" name="tel_no3" value="1360" maxlength="4" style="width:4em;">
            </div>
          </div>
        </div>
        
        <div class="form-group row">
          <label class="col-md-3 col-form-label text-md-right">Fax</label>
          <div class="col-md-9">
            <div class="form-inline">
              <select class="form-control" name="fax_no1" style="width:60px;">
                <option value="" >선택</option>
                <option value="02" >02</option>
                <option value="051" >051</option>
                <option value="053" >053</option>
                <option value="032" >032</option>
                <option value="062" >062</option>
                <option value="042" >042</option>
                <option value="052" >052</option>
                <option value="044" >044</option>
                <option value="031" selected>031</option>
                <option value="033" >033</option>
                <option value="043" >043</option>
                <option value="041" >041</option>
                <option value="063" >063</option>
                <option value="061" >061</option>
                <option value="054" >054</option>
                <option value="055" >055</option>
                <option value="064" >064</option>
                <option value="070" >070</option>
              </select>
              <p class="form-control-plaintext text-muted mx-1">-</p>
              <input type="fax" class="form-control" name="fax_no2" value="642" maxlength="4" style="width:4em;">
              <p class="form-control-plaintext text-muted mx-1">-</p>
              <input type="fax" class="form-control" name="fax_no3" value="1361" maxlength="4" style="width:4em;">
            </div>
          </div>
        </div>
        
        <div class="form-group row">
          <label class="col-md-3 col-form-label text-md-right"><span class="text-danger">*</span> 지역</label>
          <div class="col-md-9">
            <div class="form-inline">
              <select class="form-control" name="local_sido" style="width:5em;">
                <option value="">시도</option>
<option value='서울'>서울</option>
<option value='부산'>부산</option>
<option value='인천'>인천</option>
<option value='대전'>대전</option>
<option value='대구'>대구</option>
<option value='울산'>울산</option>
<option value='광주'>광주</option>
<option value='세종'>세종</option>
<option value='경기' selected>경기</option>
<option value='강원'>강원</option>
<option value='충북'>충북</option>
<option value='충남'>충남</option>
<option value='경북'>경북</option>
<option value='경남'>경남</option>
<option value='전북'>전북</option>
<option value='전남'>전남</option>
<option value='제주'>제주</option>
              </select>
              <select class="form-control ml-1" name="local_sigungu" style="width:7em;">
                <option value="">시군구</option>
<option value='가평군'>가평군</option>
<option value='고양시 덕양구'>고양시 덕양구</option>
<option value='고양시 일산동구'>고양시 일산동구</option>
<option value='고양시 일산서구'>고양시 일산서구</option>
<option value='과천시'>과천시</option>
<option value='광명시'>광명시</option>
<option value='광주시'>광주시</option>
<option value='구리시'>구리시</option>
<option value='군포시'>군포시</option>
<option value='김포시'>김포시</option>
<option value='남양주시'>남양주시</option>
<option value='동두천시'>동두천시</option>
<option value='부천시 소사구'>부천시 소사구</option>
<option value='부천시 오정구'>부천시 오정구</option>
<option value='부천시 원미구'>부천시 원미구</option>
<option value='성남시 분당구'>성남시 분당구</option>
<option value='성남시 수정구'>성남시 수정구</option>
<option value='성남시 중원구'>성남시 중원구</option>
<option value='수원시 권선구'>수원시 권선구</option>
<option value='수원시 영통구'>수원시 영통구</option>
<option value='수원시 장안구'>수원시 장안구</option>
<option value='수원시 팔달구'>수원시 팔달구</option>
<option value='시흥시'>시흥시</option>
<option value='안산시 단원구'>안산시 단원구</option>
<option value='안산시 상록구'>안산시 상록구</option>
<option value='안성시'>안성시</option>
<option value='안양시 동안구'>안양시 동안구</option>
<option value='안양시 만안구'>안양시 만안구</option>
<option value='양주시'>양주시</option>
<option value='양평군'>양평군</option>
<option value='여주시'>여주시</option>
<option value='연천군'>연천군</option>
<option value='오산시'>오산시</option>
<option value='용인시 기흥구'>용인시 기흥구</option>
<option value='용인시 수지구'>용인시 수지구</option>
<option value='용인시 처인구'>용인시 처인구</option>
<option value='의왕시'>의왕시</option>
<option value='의정부시'>의정부시</option>
<option value='이천시' selected>이천시</option>
<option value='파주시'>파주시</option>
<option value='평택시'>평택시</option>
<option value='포천시'>포천시</option>
<option value='하남시'>하남시</option>
<option value='화성시'>화성시</option>
              </select>
            </div>
          </div>
        </div>
        
        <div class="form-group row">
          <label class="col-md-3 col-form-label text-md-right"><span class="text-danger">*</span> 주소1</label>
          <div class="col-md-9">
            <div class="form-inline">
              <input class="form-control" type="text" name="addr1" value="장호원읍 장감로 85 " maxlength="100" style="width:18em;">
              <p class="form-control-plaintext text-muted ml-2">예) 양화로 21 (도로명 or 지번 주소)</p>
            </div>
          </div>
        </div>
        
        <div class="form-group row">
          <label class="col-md-3 col-form-label text-md-right"><span class="text-danger">*</span> 주소2</label>
          <div class="col-md-9">
            <div class="form-inline">
              <input class="form-control" type="text" name="addr2" value="2~3층" maxlength="100" style="width:18em;">
              <p class="form-control-plaintext text-muted ml-2">예) 상록빌딩 201호 (건물명, 호수)</p>
            </div>
          </div>
        </div>
        
        <div class="form-group row">
          <label class="col-md-3 col-form-label text-md-right">우편번호</label>
          <div class="col-md-9">
            <div class="form-inline">
              <input class="form-control" type="text" name="zip_code" value="17418" maxlength="7" style="width:6em;">
            </div>
          </div>
        </div>
        
        <div class="form-group row">
          <label class="col-md-3 col-form-label text-md-right">홈페이지</label>
          <div class="col-md-9">
            <div class="form-inline">
              <input class="form-control" type="text" name="homepage_url" value="www." maxlength="100" style="width:18em;">
              <p class="form-control-plaintext text-muted ml-2">예) www.google.com (http:// 제외)</p>
            </div>
          </div>
        </div>
        
        <div class="form-group row">
          <label class="col-md-3 col-form-label text-md-right">이메일</label>
          <div class="col-md-9">
            <div class="form-inline">
              <input class="form-control" type="text" name="email" value="" maxlength="100" style="width:18em;">
            </div>
          </div>
        </div>
        
        <div class="form-group row">
          <div class="col-md-10 mx-auto"><hr></div>
        </div>
        
        <div class="form-group row">
          <label class="col-md-3 col-form-label text-md-right mr-auto"><span class="text-danger">로고 이미지</span></label>
        </div>
        
        <div class="form-group row">
          <label class="col-md-3 col-form-label text-md-right">로고 이미지 등록</label>
          <div class="col-md-9">
            <div class="form-inline">
              <input class="form-control text-right" type="file" name="logo_img" accept="image/png,image/jpeg,image/gif" value="" maxlength="20" style="width:20em;">
            </div>
          </div>
        </div>
              
      </div>
      
      <div class="content-footer with-border">
        <button class="btn btn-primary save-btn" type="submit">저장</button>
      </div>
      
    </div>
    
    <input type="hidden" name="act" value="update">
    </form>
    
    
    <script src="/common/bootstrap/js/popper.min.js"></script>
    <script src="/common/bootstrap/js/bootstrap.min.js"></script>
    
  </body>
</html>
