<?php
require("header.php");
require ("inforesults.php");
require ("googleJson.php");

?>

<link rel="stylesheet" type="text/css" href="info_style.css">

<div id="header_menu">
	<div class="header_menu_inner">
	<div class="header_menu_logo"><a href="index.php"><img src="img/logo_greenblue.png" width="50px"></a></div>
	<div class="header_menu_child">
	<a href="index.php">Hjem</a>
	<a href="#">Kategorier</a>
	<a href="#">Om</a>
	<a href="#">Hjelp</a>
	</div>
	</div>
	</div>

	<a href="javascript:history.back()"><div id="go_back">&larr; Tilbake til søkeresultatene</div></a>

<body>
	<div id="topbar"></div>
	<div id="header">
        <?php require("map.php");?>

		<br><br><br><br><br><br><br><br><br><br>
		<center><h3>Kart</h3></center>
	</div>
	<div id="wrapper">

		<div id="main">
			<div class="place_title"><?= $object['navn'] ?></div>

			
  				
			<div class="read_more" tabindex="0">
				<?= $object['beskrivelse'] ?>	
			   
			</div>
	







			<div class="place_photos"><center><h2>Bilder</h2></center></div>

		</div>
		<div id="sidebar">

			<div class="side_thumbnail"><img src="<?= $object['img'] ?>" width="240px" height="240px"></div>

			<img src="img/icons/Phone.png" width="20px"> <?= $object['tlf'] ?>
			<hr>
            <?= $object['adresse'] ?>

			<hr >
			<h4>Åpningstider</h4>
            <script>
                if(typeof jSonReq === 'object') {
                    for (i = 0; i < jSonReq.result.opening_hours.weekday_text.length; i++) {
                        document.write(jSonReq.result.opening_hours.weekday_text[i] + '<br>');
                        console.log(jSonReq.result.opening_hours.weekday_text[i]);
                        console.log("nummer: 1" + jSonReq);
                    }
                }else{
                    document.write('Ingen åpningstider registrert for denne siden.');
                    console.log("nummer: 2");
                }
            </script>
			<!--M 07-23<br>
			T 07-23<br>
			O 07-23<br>
			T 07-23<br>
			F 07-23<br>
			L 07-23<br>
			S 07-23-->
			<hr >

			<div class="side_social">
			<center>
                <?php
                $faceb = '<a href="' . $object["facebook"] .'"> <img src="img/icons/Facebook.png" width="35px"><a/>';
                $twitter = '<a href="' . $object["twitter"] .'"> <img src="img/icons/Twitter.png" width="35px"><a/>';
                $googlepluss = '<a href="' . $object["googlepluss"] .'"> <img src="img/icons/Google Plus.png" width="35px"><a/>';

                if($object['facebook'] == !null) echo $faceb;
                if($object['twitter'] == !null) echo $twitter;
                if($object['googlepluss'] == !null) echo $googlepluss;




                ?>
            </center>
			</div>
		</div>

	</div>


    <script type="text/javascript" src="mapAPI.js"></script>

</body onload="initialize()">