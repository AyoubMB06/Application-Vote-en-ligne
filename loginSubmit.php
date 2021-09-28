<?php 
if(!isset($_SESSION)) 
{ 
   session_start(); 
} 
 ?>

<?php
   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', '');
   define('DB_DATABASE', 'evote');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);   
      $email = $_POST['email'];
      $password = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT id FROM co_vote WHERE email = '$email' and password = '$password'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $id=$row['id'];
      $count = mysqli_num_rows($result);
      
		
      if($count == 1) {
         
         $_SESSION['vid'] = $row['id'];
         
         header("location: dashboard.php?a=$id");
      }else {
         $error = "Votre email ou mot de passe sont incorrects.";
		  header("location: voterLogin.php?error=$error");
      }
   
?>