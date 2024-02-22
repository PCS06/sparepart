<!DOCTYPE html>
<html class="no-js">

<head>
	<meta charset='UTF-8'>
	
	<title>SmallEnvelop : Simple PreLoader</title>
	
<style>
/* Paste this css to your style sheet file or under head tag */
/* This only works with JavaScript, 
if it's not present, don't show loader */
.no-js #loader { display: none;  }
.js #loader { display: block; position: absolute; left: 100px; top: 0; }
.se-pre-con {
	position: fixed;
	left: 0px;
	top: 0px;
	width: 100%;
	height: 100%;
	z-index: 9999;
	background: url(../tech.png) center no-repeat #fff; /* รูปloader ที่เป็น .gif  css หรืออื่นๆก็นำไปดันแปลงกันเอาครับ*/
}
</style>


<script>
	//paste this code under head tag or in a seperate js file.
	// Wait for window load
	$(window).load(function() {
		// Animate loader off screen
		$(".se-pre-con").fadeOut("slow");;
	});
</script>

</head>

<body>
	<!-- Paste this code after body tag -->
	<div class="se-pre-con"></div>
	<!-- Ends -->
	

</body>
</html>