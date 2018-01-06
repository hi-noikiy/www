<!DOCTYPE html>
<html>
<style>
div {
  border: 5px solid red;
  text-align: center;
  width: 100px;
  transition: all 1s;
}
#first-thumbnail-icon-2 {
  display: none;
}
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body>


<!--
https://stackoverflow.com/questions/29640486/is-there-any-way-to-have-a-transition-effect-when-changing-the-innerhtml
-->


<div id="div1" class="fa fa-5x"></div>

<div>
	<i class="fa fa-globe fa-5x fa-fw" id="first-thumbnail-icon-1"></i>
	<i class="fa fa-phone fa-5x fa-fw" id="first-thumbnail-icon-2"></i>
</div>

<script>
function hourglass() {
  var a;
  a = document.getElementById("div1");
  a.style.opacity = 0;
  a.innerHTML = "&#xf251;";
  setTimeout(function () {
      a.innerHTML = "&#xf252;";
      a.style.opacity = 1;
    }, 1000);
  setTimeout(function () {
      a.style.opacity = 0;
    }, 2000);
    
  setTimeout(function () {
      a.innerHTML = "&#xf253;";
      a.style.opacity = 1;
    }, 3000);
  setTimeout(function () {
      a.innerHTML = "&#xf253;";
      a.style.opacity = 0;
    }, 4000);
}
hourglass();
setInterval(hourglass, 3000);
</script>

<p>This example demonstrates how to use an icon library to make an animated effect.</p>
</body>
</html>
