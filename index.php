<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/fullpage.css" />
	<link rel="stylesheet" type="text/css" href="css/responsive.css">
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<title>Skill Corner</title>
</head>

<body>
	<header class="header-desktop">
		<img class="logo" src="img/icon/logo.svg" alt="Logo SC">
		<a class="contact-link" href="#">CONTACT US</a>
	</header>
	<div id="fullpage">
		<div class="section section fp-auto-height-responsive" id="section-1">
			<?php require 'section-1.php';?>
		</div>
		<div class="section section fp-auto-height-responsive" id="section-2">
			<?php require 'section-2.php';?>
		</div>
		<div class="section section fp-auto-height-responsive" id="section-3">
			<?php require 'section-3.php';?>
		</div>
		<div class="section section fp-auto-height-responsive" id="section-4">
			<?php require 'section-4.php';?>
		</div>
		<div class="section section fp-auto-height-responsive" id="section-5">
			<?php require 'section-5.php';?>
		</div>
		<div class="section" id="section-6">
			<?php require 'section-6.php';?>
		</div>
	</div>
	<div class="responsive-display">
		<p>Hey! Flip or resize your screen for better experience ⚽️ ⚽️</p>
	</div>
	</div>
</div>
<script type="text/javascript" src="js/fullpage.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>

<script type="text/javascript">

$('.list-ul>li:nth-child(1)').on('click',function() {
	$(".section:nth-child(2)").css('background-image','url(img/bg/bg-section-2/bg-1.png)');
	$(".content-circle-2 ").css('visibility', 'hidden');
})
$('.list-ul>li:nth-child(2)').on('click', function() {
	$(".section:nth-child(2)").css('background-image','url(img/bg/bg-section-2/bg-2.png)');
	$(".content-circle-2 ").css('visibility', 'hidden');
})
$('.list-ul>li:nth-child(3)').on('click', function() {
	$(".section:nth-child(2)").css('background-image','url(img/bg/bg-section-2/bg-3.png)');
	$(".content-circle-2 ").css('visibility', 'hidden');
})
$('.list-ul>li:nth-child(4)').on('click', function() {
	$(".section:nth-child(2)").css('background-image','url(img/bg/bg-section-2/bg-4.png)');
	$(".content-circle-2 ").css('visibility', 'visible');
})


$('.nav-slider-ul>a:nth-child(1)').on('click',function() {
	$("#slider-1 ").css('display', 'flex');
	$("#slider-2 ").css('display', 'none');
	$("#slider-3 ").css('display', 'none');
	$("#baseline-1 ").css('display', 'block');
	$("#baseline-2 ").css('display', 'none');
	$("#baseline-3 ").css('display', 'none');
})

$('.nav-slider-ul>a:nth-child(2)').on('click',function() {
	$("#slider-1 ").css('display', 'none');
	$("#slider-2 ").css('display', 'flex');
	$("#slider-3 ").css('display', 'none');
	$("#baseline-1 ").css('display', 'none');
	$("#baseline-2 ").css('display', 'block');
	$("#baseline-3 ").css('display', 'none');
})

$('.nav-slider-ul>a:nth-child(3)').on('click',function() {
	$("#slider-1 ").css('display', 'none');
	$("#slider-2 ").css('display', 'none');
	$("#slider-3 ").css('display', 'flex');
	$("#baseline-1 ").css('display', 'none');
	$("#baseline-2 ").css('display', 'none');
	$("#baseline-3 ").css('display', 'block');
})



if ($(window).width() < 960) {
	$('.list-ul>li:nth-child(1)').on('click',function() {
		$(".section:nth-child(2)").css('background-image','url()');
		$(".content-circle-2 ").css('visibility', 'hidden');
	})
	$('.list-ul>li:nth-child(2)').on('click', function() {
		$(".section:nth-child(2)").css('background-image','url()');
		$(".content-circle-2 ").css('visibility', 'hidden');
	})
	$('.list-ul>li:nth-child(3)').on('click', function() {
		$(".section:nth-child(2)").css('background-image','url()');
		$(".content-circle-2 ").css('visibility', 'hidden');
	})
	$('.list-ul>li:nth-child(4)').on('click', function() {
		$(".section:nth-child(2)").css('background-image','url()');
		$(".content-circle-2 ").css('visibility', 'visible');
	})
}

$(function() {
   $('a.link-list').click(function() {
       $('a.link-list').removeClass('active');
       $(this).addClass('active');
   });
});
</script>

</body>
</html>
