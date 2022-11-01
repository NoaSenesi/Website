<?php
include "lang.php";

$d1 = new DateTime();
$d2 = new DateTime("2002-06-27");
$age = $d2->diff($d1)->y;

if (isset($_POST)) {
	$lang = "";
	if (isset($_POST["fr"])) $lang = "fr_fr";
	if (isset($_POST["uk"])) $lang = "en_uk";
	if (isset($_POST["de"])) $lang = "de_de";

	if ($lang) {
		setcookie("lang_id", $lang, strtotime("+365 days"), "/");
		header("Location: " . str_replace("index.php", "", $_SERVER["PHP_SELF"]));
	}
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=0">
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="responsive.css">
		<link rel="icon" href="img/logo.png">
		<script src="script.js" defer></script>
		<title>Noa Senesi</title>
	</head>
	<body>
		<header>
			<div class="introduction"><span>Hello, I am</span><span class="name">Noa Senesi</span></div>
		</header>
		<?php for ($i = 0; $i < 100; $i++) { ?>
		<h1>Test</h1>
		<?php } ?>
	</body>
</html>