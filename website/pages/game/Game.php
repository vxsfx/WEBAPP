<HTML>
	<head>
		<title>
		RPG
		</title>
        <link rel="stylesheet" href="../../styles/parent.css">

        <!--need to add game-->
		<link rel="stylegame" href="Game/TemplateData/style.css">
		<script src="Game/TemplateData/UnityProgress.js"></script>
		<script src="Game/Build/UnityLoader.js"></script>
		<script>
			var unityInstance = UnityLoader.instantiate("unityContainer", "Game/Build/Game.json", 
			{onProgress: UnityProgress});  
  		</script>
    </head>
    

<body>
<!--sidebannerimage-->
<div class="left">
</div>
<div class="right">
</div>

        <!--need make NAV scale like rest of elements-->
		<div id="NavBar">
		<!--NAV BAR+LOG IN-->
		<ul id="Nav">
        <!--logo,,setingsymbol,,signin=use images-->
			<li><a id="gameNav" href="./Game.php">RPG</a></li>
			<li><a id="accountNav" href="">account</a></li>
			<li><a id="loginNav" href="../account/logout.php">Logout</a></li>
        </ul>
        </div>
		
	<!--GAME-->
	<div id="unityContainer" style="left:20%; width: 60%; height: 70%; padding: 0px; 
	margin: 0px; border: 0px; position: relative; background: rgb(35, 31, 32);">
	<canvas id="#canvas" style="width: 100%; height: 100%; cursor: default;" width="960" height="600">
	</canvas><div class="logo Dark" style="display: none;"></div>
	<div class="progress Dark" style="display: none;"><div class="empty" style="width: 0%;">
	</div><div class="full" style="width: 100%;"></div></div></div>




	<!--full screen script-->
		<script>
			
		</script>
		</div>


</body>


<footer>
</footer>


</HTML>