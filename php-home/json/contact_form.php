<script>
$(document).ready(function() {
  $("#contact-form").submit(function(e) {
    e.preventDefault();
    
    if ($(":input[name='contact']").val() == "") {
      alert("연락처를 입력하여 주십시오");
      $(":input[name='contact']").focus();
      return;
    }
    
    if ($(":input[name='content']").val() == "") {
      alert("내용을 입력하여 주십시오");
      $(":input[name='content']").focus();
      return;
    }
    
    $.post("/json/contact_form_save.php", $("#contact-form").serialize(), function(result) {
      var obj = JSON.parse(result);
      if (obj.mail == 1) {
        alert("문의해 주셔서 감사합니다.\n\n검토 후 빠른 시간에 연락드리겠습니다.");
      } else {
        alert("문의 내용이 정상적으로 전달되지 않았습니다.");
      }
      $("#contact-form-modal").modal("hide");
    }).fail(function(xhr) {
      console.log("contact_form_save fail");
      console.log(xhr);
    });
    
  });
});
</script>
  
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        CONTACT
        <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
      </div>
      
      <div class="modal-body">
        <h1 class="motd">
          <div class="text-title-block" id="we-do-best-1" style="display:none;"><span class="text-title-span">세상을 조금 더</span> <span class="text-title-span">효율적으로 만들 수 있도록</span></div>
          <div class="text-title-block" id="we-do-best-2" style="display:none;"><i class="fas fa-quote-left fa-1x mx-1"></i> 최선을 다 하겠습니다 <i class="fas fa-quote-right fa-1x mx-1"></i></div>
        </h1>
        
        <div class="row px-2">
          <div class="col-lg-6 mb-3">
            
            <div class="card">
              <div class="card-body bg-light">
                <ul class="list-unstyled">
                  <li class="media">
                    <i class="far fa-phone bg-blue mr-2"></i>
                    <div class="media-body">
                      <p>070-4950-8500</p>
                    </div>
                  </li>
                  <li class="media">
                    <i class="far fa-map-marker bg-blue mr-2"></i>
                    <div class="media-body">
                      <p>서울시 동대문구 장한로 186<br>
                      남일빌딩 201호 <span class="text-secondary">(우 02522)</span></p>
                    </div>
                  </li>
                </ul>
                
                <!-- 지도 -->
                <iframe width="100%" height="320" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJw2JtyyK7fDUR08Y0XjdDvJQ&key=AIzaSyBQ1N8x6KjiQUCDqZ5kfPW3I4Ljy4TqcRU" allowfullscreen></iframe>
                <!-- 지도 -->
              </div>
            </div>
            
          </div>
          <div class="col-lg-6 mb-3">
            
            <div class="card">
              <div class="card-body bg-light">
                
                <form method="post" role="form" id="contact-form">
                  <div class="form-group row">
                    <label class="col-md-3 col-form-label text-md-right">회사명</label>
                    <div class="col-md-9">
                      <div class="form-inline">
                        <input type="text" class="form-control input-sm" name="company" value="" placeholder="예) 데이터퍼스트" style="width:14em;">
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
                        <input type="text" class="form-control input-sm" name="contact" value="" placeholder="예) 010-5555-8888" style="width:14em;">
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
            </div>
            
          </div>
        </div> <!-- row -->
      </div> <!-- modal body -->
    </div> <!-- modal-content -->
  </div> <!-- modal-dialog -->

