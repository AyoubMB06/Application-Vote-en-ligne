<?php 
if(!isset($_SESSION['adminLoggedin'])) 
{ 
	session_start();
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	<style type="text/css">
		body{
			text-align: center;
		}
		.container{
			margin-top: 10%;
			border:20px solid #e4e4e4;
			padding-bottom: 5%;
			padding-right: 5%;
			padding-left: 5%;
			display: inline-block;
			border-radius: 20px;
		}
		input{
			padding:5px;
			border-radius: 5px;
			margin:10px;
			width: 200px;
		}
		form{
			border: 5px solid #c1ded0;
			padding:15px;
			display: inline-block;
			border-radius: 10px;
		}
		h2{
			color: #ffe300;
		}
	</style>
	<link href="https://fonts.googleapis.com/css?family=Secular+One" rel="stylesheet"> 
<link rel="stylesheet" type="text/css" href="master.css">
</head>
<body>
	<h1>Vote Responsable</h1>
	<div class="container">
		<h2>Authentification</h2>
		<form target="" method="post">
			<input type="text" name="user" placeholder="Nom d'utilisateur" value="">
			<br>
			<input type="password" name="pass" placeholder="Mot de passe" value="">
			<br>
			<input type="submit" name="loginbtn" value="Se connecter">
		</form>

	</div>
<p><a href="index.php">Revenir à l'acceuil</a></p>
</body>
</html>

<?php 
if(isset($_POST['loginbtn'])){
	if($_POST['user']=="admin" & $_POST['pass']=='admin'){
		echo "Login réussi";
		$_SESSION['adminLoggedin']="ok";
		header("location: result.php");
	}else{
		echo "<script>alert('Informations Incorrects.')</script>";
	}
}
 ?>