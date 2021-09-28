<?php 

session_start();

$id = $_SESSION['vid'];

    if(isset($_POST['vote'])){
        if(!empty($_POST['respo'])){
            $resp = $_POST['respo'];
        }
    }

$db = mysqli_connect("localhost","root","","evote");
$sql = "SELECT * FROM co_vote WHERE id=$id";
$result = mysqli_query($db,$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);

$option = 0;
$cipher = "AES-256-CTR";
$encr_iv="1234567891234567";


$res=openssl_pkey_new();
openssl_pkey_export($res,$privaetkey);


$publickey=openssl_pkey_get_details($res);
$publickey=$publickey["key"];

openssl_public_encrypt($resp, $crypttext, $publickey);

$sql = "UPDATE co_vote SET vote = '$crypttext' WHERE id=$id";
$result = mysqli_query($db,$sql);

//echo $crypttext;

openssl_private_decrypt($crypttext, $decrypted, $privaetkey);


$sql = "UPDATE de_vote SET vote = '$decrypted' WHERE id=$id";
$result = mysqli_query($db,$sql);





?>


<br><br><br><br><br><br><br><br><br>
 <h2>Merci pour votre vote, vous avez choisi <?php   echo '<span style="color:green;">'.$resp.'</span>'?> comme responsable.</h2>
 <br>
 <h4><a href="logout.php" style="color: red;">Se Déconnecter</a></h4>
 <link href="https://fonts.googleapis.com/css?family=Secular+One" rel="stylesheet"> 
<link rel="stylesheet" type="text/css" href="master.css">
<style type="text/css">
	*{
		text-align: center;
	}
	.c1{
		border: 2px solid yellow;
		display: inline-block;
		padding: 10px 20px;
	}
	h1{
		color: aqua;
	}
</style>