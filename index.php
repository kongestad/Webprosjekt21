<?php
require("header.php");

?>
<link rel="stylesheet" type="text/css" href="front_style.css">

<body>
<div id="header">
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

	
	<div id="header_search_outer">
		<div class="header_search_inner">
			<h2>Jeg vil</h2>


            <form method="post" action="results.php?go" id="searchform">
			<input type="text" name="search" placeholder="Søk + enter" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Søk + enter'">
			<input  type="submit" name="submit" value="Search">
            </form>


		</div>
	</div>

	<video playsinline autoplay muted loop id="bgvid">
    <source src="img/snow_footage.mp4" type="video/mp4">
</video>

</div>
<div id="wrapper">
	<div id="main">
		<center><h1>Vet du ikke hva du vil?</h1></center><br>
		<div id="mainflex">
			<div class="mainflex_item">
				<img src="img/shops/mat1.jpg" class="imgitem_main" width="100%">
				<div class="imgdesc_main">Spise</div>
			</div>
			<div class="mainflex_item">
				<img src="img/shops/opera.jpg" class="imgitem_main" width="100%">
				<div class="imgdesc_main">Musem</div>
			</div>
			<div class="mainflex_item">
				<img src="img/shops/nightlife.jpg" class="imgitem_main" width="100%">
				<div class="imgdesc_main">Uteliv</div>
			</div>
			<div class="mainflex_item">
				<img src="img/shops/park3.jpg" class="imgitem_main" width="100%">
				<div class="imgdesc_main">Parker</div>
			</div>
			<div class="mainflex_item">
				<img src="img/shops/coffeeshop2.jpg" class="imgitem_main" width="100%">
				<div class="imgdesc_main">Kaffe</div>
			</div>
			<div class="mainflex_item">
				<img src="img/shops/windowpants.jpg" class="imgitem_main" width="100%">
				<div class="imgdesc_main">Shopping</div>
			</div>
		</div>



	</div>

	<div id="main_info">
		<div class="main_info_wrap">

			<div style="float:left; width: 45%; margin-left: 5%; margin-top: 100px">
			<h1>WesterLife</h1>
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc posuere diam nec magna ultrices luctus. Nunc sed purus eu quam aliquam laoreet. Donec laoreet justo eu varius aliquet. <br><br>Praesent tincidunt neque id mauris rutrum venenatis. Aliquam tincidunt felis sem, quis auctor neque consequat in. Phasellus nec leo sit amet dui aliquet tempus.<br><br>

			<button>Les mer om oss</button>
			</div>

			<div style="float:left; width: 40%">
			<img src="img/westerlife_iphone.png" class="iphone" width="340px">
			</div>
			
		</div>
	</div>
	
</div>

<?php
require("footer.php");
?>

</body>
</html>
