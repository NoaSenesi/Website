<?php
$d1 = new DateTime();
$d2 = new DateTime("2002-06-27");
$age = $d2->diff($d1)->y;
$bd = $d2->format("d/m") == $d1->format("d/m");
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/header.css">
		<link rel="stylesheet" href="css/footer.css">
		<link rel="stylesheet" href="css/responsive.css">
		<script src="js/script.js" defer></script>
		<link rel="icon" href="img/logo.png">
		<title>Noa Senesi</title>
	</head>
	<body>
		<header>
			<div class="introduction">
				<span>Hello, I am</span>
				<span>Noa Senesi</span>
			</div>
			<div class="brand"></div>
		</header>
		<div class="about-me full-block">
			<div class="title">About me</div>
			<div class="bio-rea"><b>Bio</b>nic <b>Rea</b>ding</div>
			<div class="content">
				<?php include "about-me.php"; ?>
				<div class="more">
					<div<?= $bd ? " class=\"birthday\"" : "" ?>>Birthdate: 27 June 2002</div>
					<div>Nationality: French</div>
				</div>
			</div>
		</div>
		<div class="spacing"></div>
		<footer>
			<div class="container">
				<div>
					<img src="img/fullname.png">
				</div>
				<div>
					<div>
						<span>Contact:</span>
						<span>noa.senesi@gmail.com</span>
					</div>
				</div>
			</div>
		</footer>
	</body>
</html>