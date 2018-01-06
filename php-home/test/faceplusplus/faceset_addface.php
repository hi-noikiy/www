<?
	$selected_menu = "home";
	
	$api_key = "Xlc_SXYber_Ei8YgG8UyvPRRm3_JsRMG";
	$api_secret = "uZevzsYt7ytNKUzRV9kdMoTnS4TEWzWC";
	
	include "../../header.inc.php";
?>

<script>
$(document).ready(function() {
  console.log("1111");
  
  $.post("https://api-us.faceplusplus.com/facepp/v3/faceset/addface", $("#db-form").serialize(), function(response) {
    console.log(response);
    //$(location).attr("href", $(".list-btn").attr("href"));
  }, "json").fail(function(xhr) {
    console.log("error");
    console.log(xhr);
  });
  
});
</script>


여기 TEST

<form method="post" role="form" id="db-form">
<input type="text" name="api_key" value="<?= $api_key ?>">
<input type="text" name="api_secret" value="<?= $api_secret ?>">
<input type="text" name="outer_id" value="newfaceset">
<input type="text" name="face_tokens" value="297638045c774db7e2a0467e6164c0e4">
</form>

    

    
<?
	include "../../footer.inc.php";
?>
