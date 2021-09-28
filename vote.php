<?php 
session_start();
 ?>

<link href="https://fonts.googleapis.com/css?family=Secular+One" rel="stylesheet"> 

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "evote";

echo "<br><h1>Vote Responsable </h1>";
echo"<h2>Voter Sur votre nouveau Responsable</h2><hr>";
echo "<h2>La liste des Responsables :<br></h2>";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT id, nom, email FROM co_vote";
$result = $conn->query($sql);




?>
<form action='voteCaste.php' method='POST'>
    <table class="table">
<?php	
if ($result->num_rows > 0) {
        ?>
        <input type="radio" id="respo1" name="respo" value="Faouzi Achour"
        checked>
        <label for="respo1">Faouzi Achour</label>
        <br>

        <input type="radio" id="respo2" name="respo" value="Mohamed Chafai"
        >
        <label for="respo2">Mohamed Chafai</label>
        <br>


        <input type="radio" id="respo3" name="respo" value="Salah Fersad"
        >
        <label for="respo3">Salah Fersad</label>
        <br>
        <br>


<?php
} else {
    echo "0 results";
}

$conn->close();
?> 
</table>
<input type="submit" value="Voter" class="btn" name="vote">
</form>
<style>
	body{
		backgroud-color:#345;
        font-family: "Secular One", serif;
        text-align: center;
        max-width: 750px;
        margin-right: auto;
        margin-left: auto;
	} 
    h1{
        color: aqua;
    }
    .btn{
        padding:5px 15px;
        background-color: #00ffd2;
    }
</style>

