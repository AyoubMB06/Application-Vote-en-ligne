<?php
session_start();
if(!isset($_SESSION['vid'])) 
{ 
   header("location: voterLogin.php"); 

} 
?>

<!DOCTYPE html>

<link href="https://fonts.googleapis.com/css?family=Secular+One" rel="stylesheet"> 
<link rel="stylesheet" type="text/css" href="master.css">
<?php 
//$id=$_GET['a'];
$id = $_SESSION['vid'];
$db = mysqli_connect("localhost","root","","evote");
$sql = "SELECT * FROM co_vote WHERE id=$id";
$result = mysqli_query($db,$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            body{
               background-color: #27ace854;
			
            }
            input{
                width: 250px;
                padding: 5px;
                margin: 5px;
                border-radius: 10px;
            }
            hr{
                align: center;
                width: 500px;
            }
        </style>
    </head>
    <body>
    <center>
        <h1>Vote Responsable</h1>
		<h2> Tableau de bord du Votant </h2>
		
        <hr>
        <br>
         <p > Salut, <span style="text-transform: uppercase;"><?php echo $row['prenom']," ", $row['nom']; ?></span></p>
		 
		
		<p>Votre email est: <?php echo $row['email']; ?> </p>
		<br>
		<hr>
		<?php 
			$voted = $row['vote'];
			if($voted!=NULL){
				echo '<b> <span style="color:yellow;">Vous pouvez pas voter, vous l\'avez déjà fait.</span></b>';
			}else{ 
				echo '<span style="color:yellow;">Vous n\'avez toujours pas voter, pour le faire veuillez <h2><a href=\'vote.php\'>cliquer ici</a></h2></span>';
			}
		?>
      
        <div class="jumbotron">
		
		
		<p>		
		
		
		</p>
		</div>
		<hr>
		<br>
		<br>

		<h3><a href="logout.php" style="color:red;">Se déconnecter</a></h3>	
        <h3> <a href="index.php">Revenir à la page d'accueil</a></h3>
    </center>
        <?php
            
        ?>
    </body>
</html>
