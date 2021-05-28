<html>
<head>
    <title>login</title>
    <link rel="stylesheet" href="../../styles/parent.css">
</head>

<div id="FormContainer" style="display:block;">
	<form action="enter.php" method="post">
		Username: <input type="text" name="Username" required><br>
		Password: <input type="text" name="Password" required><br>
		<input type="submit"/>
	</form>
	<a onclick="form.NewUser()"><input type="button" value="signup"></a>
</div>

<div id="NewContainer">
	<form action="create.php" method="post">
		Username: <input type="text" name="Username" required><br>
		Email: <input type="text" name="Email" required><br>
		Password: <input type="text" name="Password" required><br>
		Date Of Birth<input type="date" name="DOB" required><br>
		<input type="submit">
		<a onclick="form.Open()"><input type="button" value="login"></a>
	</form>
</div>


<script src="../../scripts/login.js"></script>
<script src="../../scripts/banner.js"></script>
<script>
	var form = new loginForm() 
    //var banners = new banner_select()    
</script>

</html>

<?php session_start();
$DATABASE_HOST = "localhost";
$DATABASE_USER = "root";
$DATABASE_PASS = "";
$DATABASE_NAME = "phplogin";

$con = mysqli_connect($DATABASE_HOST,$DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if ( mysqli_connect_errno() ) {
    exit("failed to connect". mysqli_connect_error());
}

if ( !isset($_POST["Username"], $_POST["Password"])){
    exit("please fill both fields");
}

if ($stmt = $con->prepare("SELECT Password FROM useraccounts WHERE Username = ?")){
    $stmt->bind_param("s", $_POST["Username"]);
    $stmt->execute();
    $stmt->store_result();
    
    if ($stmt->num_rows > 0){
        $stmt->bind_result( $Password);
        $stmt->fetch();

        if (password_verify($_POST['Password'], $Password)){
        //if ($_POST["Password"]===$Password){
            session_regenerate_id();
            $_SESSION["loggedin"] = TRUE;
            $_SESSION["name"] = $_POST["Username"];

            header("Location: ../index/index.php");
        } else {
            $stmt->close();
            exit("incorrect Username and/or Passwordno1");
        }
    } else {
        $stmt->close();
        exit("incorrect Username and/or Passwordno2");
    }

    $stmt->close();
}

?>

