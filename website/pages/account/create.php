<html>
<head>
    <title>login</title>
    <link rel="stylesheet" href="style.css">
</head>


<div id="FormContainer">
	<form action="enter.php" method="post">
		Username: <input type="text" name="Username" required><br>
		Password: <input type="text" name="Password" required><br>
		<input type="submit"/>
	</form>
	<a onclick="form.Close()"><input type="button" value="cancel"></a>
	<a onclick="form.NewUser()"><input type="button" value="signup"></a>
</div>


<div id="NewContainer" style="display:block;">
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


<script src="../../scripts/script.js"></script>
<script>
	var form = new loginForm() 
</script>

</html>

<?php
    $DATABASE_HOST = "localhost";
    $DATABASE_USER = "root";
    $DATABASE_PASS = "";
    $DATABASE_NAME = "phplogin";

    $con = mysqli_connect($DATABASE_HOST,$DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
    if ( mysqli_connect_errno() ) {
        exit("failed to connect". mysqli_connect_error());
    }
    //need to actulaly check html form input length???
    if ( !isset($_POST["Username"], $_POST["Password"], $_POST["Email"], $_POST["DOB"])){
        exit("please fill all fields");
    }
    if (!filter_var($_POST["Email"], FILTER_VALIDATE_EMAIL)){
        exit("email invalid");
    }

    if ($stmt = $con->prepare("SELECT Username, Email From accounts WHERE Username=?")){
        $stmt->bind_param("s", $_POST["Username"]);
        $stmt->execute();
        $stmt->store_result();

        if($stmt->num_rows > 0){
            $stmt->close();
            exit("Username already taken");
        }
    }
    else{
        exit("failed to validate new user");
    }
    //need to check email real[x]//and DOB[]//and user length(of 20)[]
    if ($stmt = $con->prepare("INSERT INTO accounts (Username, Password, Email, DOB) Values (?,?,?,?)")){
        $password = password_hash($_POST['Password'], PASSWORD_DEFAULT);
        $stmt->bind_param('ssss', $_POST['Username'], $password, $_POST['Email'], $_POST["DOB"]);
        $stmt->execute();
        exit("now login");
    }
    else{
        exit("failed to prepare");
    }
?>