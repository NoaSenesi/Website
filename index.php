<?php
include "lang.php";

$d1 = new DateTime();
$d2 = new DateTime("2002-06-27");
$age = $d2->diff($d1)->y;
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="style.css">
		<link rel="icon" href="img/logo.png">
		<title>Noa Senesi</title>
	</head>
	<body>
		<header>
			<div class="introduction">
				<span><?= $_LANG["introduction"] ?></span>
				<span class="typing">&nbsp;</span>
			</div>
		</header>
		<div class="space"></div>
		<article class="about-me">
			<div class="image">
				<img src="img/logo.png" draggable="false">
			</div>
			<div class="container">
				<div class="title"><?= $_LANG["about_me"] ?></div>
				<div class="content"><?= str_replace("{age}", $age, $_LANG["about_me_text"]) ?></div>
			</div>
		</article>
		<div class="space"></div>
		<article class="block background">
			<div class="title"><?= $_LANG["background"] ?></div>
			<?php
			foreach ($_LANG["background_elements"] as $bg) {
			?>
			<div class="part">
				<div><?= $bg["title"] ?></div>
				<div><?= $bg["description"][0] ?></div>
				<div><?= $bg["description"][1] ?? "&nbsp;" ?></div>
			</div>
			<?php
			}
			?>
		</article>
		<hr>
		<article class="block skills">
			<div class="title"><?= $_LANG["skills"] ?></div>
			<div class="container">
				<?php
				foreach ($_LANG["skills_elements"] as $skill) {
				?>
				<div class="subtitle"><?= $skill["subtitle"] ?></div>
				<?php
				foreach ($skill["elements"] as $el) {
				?>
				<div class="part">
					<div class="skill"><?= $el["name"] ?>:</div>
					<div class="bar" style="--width: <?= $el["value"] ?>%"></div>
				</div>
				<?php
				}}
				?>
			</div>
		</article>
		<hr>
		<article class="block links">
			<div class="title"><?= $_LANG["links"] ?></div>
			<div class="container">
				<div>
					<?php
					foreach ($_LANG["links_elements"] as $link) {
					?>
					<a href="<?= $link["value"] ?>" target="_blank"><?= $link["name"] ?></a>
					<?php
					}
					?>
				</div>
			</div>
		</article>
		<div class="space"></div>
		<script src="script.js"></script>
	</body>
</html>