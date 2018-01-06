(function($) {
  "use strict";
  
  /*
  if (location.protocol != "https:") {
    location.href = 'https:' + window.location.href.substring(window.location.protocol.length);
  }
  */
  
  $(".contact-btn").on("click", function(e) {
    e.preventDefault();
    $("#contact-form-modal").load("/json/contact_form.php", function(result) {
      $("#contact-form-modal").modal({
        backdrop: "static",
        keyboard: true
      }).on("shown.bs.modal", function(e) {
        $("#we-do-best-1").fadeIn(1500, function() {
          $("#we-do-best-2").fadeIn(1500, function() {
            //$(":input[name='company']").focus();
          });
        });
      }).on("hidden.bs.modal", function(e) {
        $("#contact-form-modal").html("");
      });
    });
  });
  
})(jQuery);
