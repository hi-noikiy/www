<?
	// REQUIRE FILES (필수)
	require "./set_init_data.inc.php";
	require "./config.inc.php";
	require "./function.inc.php";
	
	// MYSQLi INSTANCE
	$mysqli = mysqli_instance();
	
	list($id, $title, $appoint_wait_cnt, $test_wait_cnt, $waiting_time) = fetch_first_row($mysqli, "SELECT id, title, appoint_wait_cnt, test_wait_cnt, waiting_time FROM waiting2 ORDER BY id DESC LIMIT 0, 1");
	list($waiting_time_h, $waiting_time_m, $waiting_time_s) = explode(":", $waiting_time);
	
	// HEADER INCLUDE
	include "./header.inc.php";
?>
<script>
$(document).ready(function() {
  $("#input-form").submit(function(e) {
    e.preventDefault();
    
    if ($(":input[name='title']").val() == "") {
      alert("제목을 입력하여 주십시오");
      $(":input[name='title']").focus();
      return;
    }
    
    $.post("./input_save.php", $("#input-form").serialize(), function(response) {
      console.log(response);
      alert("입력 되었습니다.");
      $("#waiting-id").html(response.id);
    }, "json").fail(function(xhr) {
      console.log("contact_form_save fail");
      console.log(xhr);
    });
    
  });
});
</script>
    
    <h1 class="text-center my-4">햇살 대기판 (#<span id="waiting-id"><?= $id ?></span>)</h1>
    
    <div class="container">
      <div class="card">
        <div class="card-body bg-light">
          
          <form method="post" role="form" id="input-form">
            <div class="form-group row">
              <label class="col-md-5 col-form-label text-md-right">제목</label>
              <div class="col-md-7">
                <div class="form-inline">
                  <input type="text" class="form-control" name="title" value="<?= $title ?>" placeholder="" style="width:10em;">
                  <p class="form-control-plaintext text-muted ml-2">예) 1진료실</p>
                </div>
              </div>
            </div>
            
            <div class="form-group row">
              <div class="col-md-6 mx-auto"><hr></div>
            </div>
            
            <div class="form-group row">
              <label class="col-md-5 col-form-label text-md-right">예약 대기 환자</label>
              <div class="col-md-7">
                <div class="form-inline">
                  <input type="text" class="form-control text-right" name="appoint_wait_cnt" value="<?= $appoint_wait_cnt ?>" placeholder="" style="width:3em;">
                  <p class="form-control-plaintext text-muted ml-1">명</p>
                </div>
              </div>
            </div>
            
            <div class="form-group row">
              <label class="col-md-5 col-form-label text-md-right">검사 대기 환자</label>
              <div class="col-md-7">
                <div class="form-inline">
                  <input type="text" class="form-control text-right" name="test_wait_cnt" value="<?= $test_wait_cnt ?>" placeholder="" style="width:3em;">
                  <p class="form-control-plaintext text-muted ml-1">명</p>
                </div>
              </div>
            </div>
            
            <div class="form-group row">
              <div class="col-md-6 mx-auto"><hr></div>
            </div>
            
            <div class="form-group row">
              <label class="col-md-5 col-form-label text-md-right">예상 대기 시간</label>
              <div class="col-md-7">
                <div class="form-inline">
                  <input type="text" class="form-control text-right" name="waiting_time_h" value="<?= $waiting_time_h ?>" placeholder="" style="width:3em;">
                  <p class="form-control-plaintext text-muted ml-1">시간</p>
                  <input type="text" class="form-control text-right ml-2" name="waiting_time_m" value="<?= $waiting_time_m ?>" placeholder="" style="width:3em;">
                  <p class="form-control-plaintext text-muted ml-2">분</p>
                </div>
              </div>
            </div>
            
            <div class="form-group row">
              <div class="col-md-7 ml-auto">
                <button type="submit" class="btn btn-primary">SEND</button>
              </div>
            </div>
            
            <input type="hidden" name="act" value="insert">
          </form>
        </div>
      </div>
    </div>
    
<?
	// FOOTER INCLUDE
	include "./footer.inc.php";
	
	// MYSQLi CLOSE
	$mysqli->close();
?>
