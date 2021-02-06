<html>
<head>
    <title>login</title>
    <link rel="stylesheet" href="style.css">
</head>

<div id="FormContainer" style="display:block;">
	<form action="enter.php" method="post">
		Username: <input type="text" name="Username" required><br>
		Password: <input type="text" name="Password" required><br>
		<input type="submit"/>
	</form>
	<a onclick="form.Close()"><input type="button" value="cancel"></a>
	<a onclick="form.NewUser()"><input type="button" value="signup"></a>
</div>

<div id="NewContainer">
	<form action="create.php" method="post">
		Username: <input type="text" name="Username" required><br>
		Email: <input type="text" name="Email" required><br>
		Password: <input type="text" name="Password" required><br>
		Date Of Birth<input type="date" name="DOB" required><br>
		<input type="submit">
		<a onclick="form.Close()"><input type="button" value="cancel"></a>
		<a onclick="form.Open()"><input type="button" value="login"></a>
	</form>
</div>


<script src="./scripts/script.js"></script>
<script>
	var form = new loginForm() 
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

if ($stmt = $con->prepare("SELECT ID, Password FROM accounts WHERE Username = ?")){
    $stmt->bind_param("s", $_POST["Username"]);
    $stmt->execute();
    $stmt->store_result();
    
    if ($stmt->num_rows > 0){
        $stmt->bind_result($ID, $Password);
        $stmt->fetch();
        //needs password made with hash
        if (password_verify($_POST['Password'], $Password)){
        //if ($_POST["Password"]===$Password){
            session_regenerate_id();
            $_SESSION["loggedin"] = TRUE;
            $_SESSION["name"] = $_POST["Username"];
            $_SESSION["id"] = $ID;

            header("Location: Index.php");
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

