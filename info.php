<?php
require("header.php");
require ("inforesults.php");

?>
<link rel="stylesheet" type="text/css" href="info_style.css">

<body>
	<div id="topbar"><a href="javascript:history.back()">&larr; Tilbake til søkeresultatene</a></div>
	<div id="header">
        <?php require("map.php");?>

		//<br><br><br><br><br><br><br><br><br><br>
		//<center><h3>Kart</h3></center>
	</div>
	<div id="wrapper">

		<div id="main">
			<div class="place_title"><?= $object['navn'] ?></div>
			<div class="place_description"> <?= $object['beskrivelse'] ?>

			<!--Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat magna aliqua.--> <p id="text_area"></p><h3><a id="se_mer_knapp" onclick="toggle_text();" href="javascript:void(0);">Les mer</a></h3>
 			</div>
			<div class="place_photos"><center><h2>Bilder</h2></center></div>

		</div>
		<div id="sidebar">
			<div class="side_thumbnail"><img src="<?= $object['img'] ?>" width="240px" height="240px"></div>
			Tlfnr
			<hr >
			<h4>Åpningstider</h4>
			M 07-23<br>
			T 07-23<br>
			O 07-23<br>
			T 07-23<br>
			F 07-23<br>
			L 07-23<br>
			S 07-23
			<hr >
			social-links
		</div>
	</div>
	

<script type="text/javascript">
	var status = "mindre";

function toggle_text()
{
    var text="Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
    
    if (status == "mindre") {
        document.getElementById("text_area").innerHTML=text;
        document.getElementById("se_mer_knapp").innerText = "Se mindre";
        status = "mer";
    } else if (status == "mer") {
        document.getElementById("text_area").innerHTML = "";
        document.getElementById("se_mer_knapp").innerText = "Les mer";
        status = "mindre"
    }
}</script>

    <script type="text/javascript" src="mapAPI.js"></script>

</body>