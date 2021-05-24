<?php 
session_start();
?>

<HTML>
	<head>
		<title>
        RPG
		</title>
        <link rel="stylesheet" href="../../styles/parent.css">
		<link rel="stylesheet" href="../../styles/index.css">
	</head>
<body>

<!--sidebannerimage-->
<div id="left">
</div>
<div id="right">
</div>


        <!--need make NAV scale like rest of elements-->
		<div id="NavBar">
		<!--NAV BAR+LOG IN-->
		<ul id="Nav">
        <!--logo,,setingsymbol,,signin=use images-->
            <li><a id="homeNav" href="./index.php">Home</a></li>
            <li><a id="gameNav" href="../game/Game.php">RPG</a></li>
			<li><a id="accountNav" href="">account</a></li>
			<li><a id="loginNav" href="../account/logout.php">Logout</a></li>
        </ul>
        </div>


<div style="position:absolute; left:25%; top:5%; font-size:20px;">
    Welcome <?= $_SESSION["name"]?> 
</div>


<div class = "Backdrop">
	<div class = "Title">
	</div>
	<div class = "Play">
	</div>
</div>


<div class="News">
	<div class="Slide UpdateSlide">
		<div class="infobox" style="left:6%;">
			<a class="NewsText" id="1" href="../info/info.php#1">iframetestlink</a>
		</div>
		<div class="infobox" style="left:38%;">
			<a class="NewsText" id="2" href="../info/info.php">456</a>
		</div>
		<div class="infobox" style="right:6%;">
			<a class="NewsText" id="3" href="../info/info.php">789</a>
		</div>		
	</div>

	<div class="Slide UpdateSlide">
		<a class="NewsText" href="../info/info.php">B</a>
	</div>
	<div class="Slide UpdateSlide">
		<a class="NewText" href="../info/info.php">C</a>
	</div>
	<a class="Prev" style="left:1.5%;" onclick="upSlider.changeSlide(-1)">&#10094;</a>
	<a class="Next" style="right:1.5%;"  onclick="upSlider.changeSlide(1)">&#10095;</a>
</div>


<div class="News">
	<div class="Slide NewsSlide">
							<!--page.html,,id to go to-->
		<a class="NewsText" href="../info/info.php#123">123test</a>
	</div>
	<div class="Slide NewsSlide">
		<a class="NewsText" href="../info/info.php#456">abc</a>
	</div>
	<div class="Slide NewsSlide">
		<a class="NewsText" href="../info/info.php">456</a>
	</div>
	<a class="Prev" style="left:1.5%;" onclick="newSlider.changeSlide(-1)">&#10094;</a>
	<a class="Next" style="right:1.5%;" onclick="newSlider.changeSlide(1)">&#10095;</a>
</div>



<script src="../../scripts/slider.js"></script>
<script src="../../scripts/login.js"></script>
<script src="../../scripts/banner.js"></script>
<script>
	var newSlider = new slider("NewsSlide")
	var upSlider = new slider("UpdateSlide") 
    var banners = new banner_select()    
</script>

</body>
</HTML>