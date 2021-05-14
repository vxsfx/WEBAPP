<?php
session_start();

echo($_SESSION["name"])
?>

<HTML>
	<head>
		<title>
		RPG
		</title>
        <link rel="stylesheet" href="../../styles/parent.css">

        <!--need to add game-->
		<link rel="stylegame" href="../../../Game/WEBAPPGAME/TemplateData/style.css">
    </head>
    

<body>

<!--sidebannerimage-->
<!--
<div class="left">
</div>
<div class="right">
</div>
-->
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


<script src="../../../Game/WEBAPPGAME/TemplateData/UnityProgress.js"></script>
<script src="../../../Game/WEBAPPGAME/Build/UnityLoader.js"></script>
<script src="../../scripts/unitySender.js"></script>
<script>

var unityInstance = new UnityLoader.instantiate("unityContainer", "../../../Game/WEBAPPGAME/Build/WEBAPPGAME.json", {onProgress: UnityProgress});

    nameToSend = "<?php echo $_SESSION['name']; ?>"

        //unconnected = true;
        //while(unconnected){
            try{
                setTimeout(() => {
                    unityInstance.SendMessage("Multiplayer", "loadPlayer", nameToSend);},6000);
                    unconnected = false;
                setTimeout(() => {
                    unityInstance.SendMessage("Multiplayer", "setLocalPlayerName", nameToSend);},10000);
                }
            catch{
                console.log("no player loaded")
            }
        //}
        console.log("hereaaa")

</script>




</body>


<footer>
</footer>


</HTML>