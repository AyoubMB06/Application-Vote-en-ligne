<?php 
session_start();
if(!isset($_SESSION['adminLoggedin'])) 
{ 
   header("location: adminLogin.php"); 

} 
?>

<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Secular+One" rel="stylesheet"> 
</head>
<br>
<br>


<?php 

$conn = mysqli_connect("localhost", "root", "", "evote") or die(mysqli_error($conn));
$query = "Select * FROM de_vote";
$query1 = "Select * FROM co_vote";
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
$result1 = mysqli_query($conn, $query1) or die(mysqli_error($conn));
$totalRows = mysqli_num_rows($result);
$totalRows2 = mysqli_num_rows($result1);
echo "<h2 style='text-align:center; color:cyan;'>Résultats des votes</h2><br><br>";
echo "<h5 style ='text-align:left;'>Le classement final des candidats selon le vote est:</h5>";


mysqli_data_seek($result, 0);



$faouzi=0;
$chafai=0;
$salah=0;


while($row = mysqli_fetch_array($result)){
	if($row['vote']=='Faouzi Achour')
		$faouzi++;
	elseif($row['vote']=='Mohamed Chafai')
		$chafai++;
	elseif($row['vote']=='Salah Fersad')
		$salah++;
}

?>



<table class="table table-striped table-bordered table-hover">
		<tr> 
			<th>Nom</th> 
			<th>Prénom</th> 
			<th>Nombre de vote</th>
		</tr>


		<tr>
			<td>Achour</td>
			<td>Faouzi</td>			
			<td><?php echo $faouzi;?></td>		
		</tr>
		<tr>
			<td>Chafai</td>
			<td>Mohammed</td>			
			<td><?php echo $chafai;?></td>		
		</tr>
		<tr>
			<td>Fersad</td>
			<td>Salah</td>			
			<td><?php echo $salah;?></td>		
		</tr>
</table>

<br>
<hr border="2">
<br>

<?php 
echo "<h5 style ='text-align:left;'>Le nombre total des votants est: ".$totalRows."</h5>";
?>
<table class="table table-striped table-bordered table-hover">
		<tr> 
			<th>ID</th> <th>Nom</th> <th>Prénom</th> <th>Date de naissance</th><th>Email</th><th>Bulletin de vote</th>
		</tr>

<?php
	if($totalRows2>0){
		while($row = mysqli_fetch_array($result1)){
?>
		<tr>
			<td><?php echo $row['id'];?> </td>
			<td><?php echo $row['nom'];?> </td>
			<td><?php echo $row['prenom'];?> </td>
			<td><?php echo $row['date_naiss'];?> </td>
			<td><?php echo $row['email'];?> </td>
			<td><b><?php echo $row['vote'];?></b> </td>
		</tr>

<?php
		}
	}


 ?>
		
</table>




<?php
	if($totalRows>0){
		while($row = mysqli_fetch_array($result)){
?>
<?php
		}
	}
	
	//echo "sum2 = $sum2";
	
 ?>
		
<br>
<a href="adminLogout.php" class="btn">Se déconnecter</a>
<style type="text/css">
	
	body{
		padding-left: 10%;
		padding-right: 10%;
		text-align: center;
		font-family: "Secular One", serif;
		
	}
	table{
		text-align: center;
	}
		
	h1 {
	   font-size: 36px;
	   font-family: "Secular One", serif;
	   color: aqua;
	}
	.btn{
		padding:5px 15px;
		background-color: #00ffd2;
	}
}
</style>
