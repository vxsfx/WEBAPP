<?php 
session_start();
?>

<HTML>
	<head>
		<title>
        RPG
		</title>
		<link rel="stylesheet" href="style.css">
	</head>
<body>

<!--sidebannerimage-->
<div class="LEFT">
</div>
<div class="RIGHT">
</div>


        <!--need make NAV scale like rest of elements-->
		<div class="TextSize">
		<!--NAV BAR+LOG IN-->
		<ul>
        <!--logo,,setingsymbol,,signin=use images-->
			<li><a class="LogoNav" href="Game.php">RPG</a></li>
			<li><a class="Profile" href="">account</a></li>
			<li><a class="Sign" href="logout.php">Logout</a></li>
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


<div class="Updates">
	<div class="UpSlide">
		<div class="infobox" style="left:6%;">
			<a class="Uptext" href="Info.php">1ad23</a>
		</div>
		<div class="infobox" style="left:38%;">
			<a class="Uptext" href="Info.php">456</a>
		</div>
		<div class="infobox" style="right:6%;">
			<a class="Uptext" href="Info.php">789</a>
		</div>
	</div>

	<div class="UpSlide">
		<a class="Uptext" href="Info.php">B</a>
	</div>
	<div class="UpSlide">
		<a class="Uptext" href="Info.php">C</a>
	</div>
	<a class="UpPrev" onclick="upSlider.changeSlide(-1)">&#10094;</a>
	<a class="UpNext" onclick="upSlider.changeSlide(1)">&#10095;</a>
</div>


<div class="News">
	<div class="NewSlide">
		<a class="newtext" href="Info.php">1</a>
	</div>
	<div class="NewSlide">
		<a class="newtext" href="Info.php">2</a>
	</div>
	<div class="NewSlide">
		<a class="newtext" href="Info.php">3</a>
	</div>
	<a class="NewPrev" onclick="newSlider.changeSlide(-1)">&#10094;</a>
	<a class="NewNext" onclick="newSlider.changeSlide(1)">&#10095;</a>
</div>


<script src="./scripts/script.js"></script>
<script>
	var newSlider = new slider("NewSlide")
	var upSlider = new slider("UpSlide") 
</script>

</body>
</HTML>