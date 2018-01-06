<?
	$selected_menu = "home";
	
	$api_key = "Xlc_SXYber_Ei8YgG8UyvPRRm3_JsRMG";
	$api_secret = "uZevzsYt7ytNKUzRV9kdMoTnS4TEWzWC";
	
	include "../../header.inc.php";
?>

<div class="container">

<br><br>

<script>
$(document).ready(function() {
  console.log("1111");
  
  $.post("https://api-us.faceplusplus.com/facepp/v3/detect", $("#db-form").serialize(), function(response) {
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
<input type="text" name="image_url" value="https://1.bp.blogspot.com/-yLdFyLauBQ8/VdQnzxeuR_I/AAAAAAAAJXQ/3vD5gkVnW7M/s1600/profile_photo_b_1508_005.jpg">
<input type="text" name="return_attributes" value="gender">

</form>

    

<br><br>

</div>
    
<?
	include "../../footer.inc.php";
?>
