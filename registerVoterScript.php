<?php
    $con = mysqli_connect("localhost", "root", "", "evote") or die (mysqli_error($con));
        
    echo '<br><h2><center>Inscription du nouveau votant</center></h2><br><br>';
   echo '<h4><center style="color: green;"\'>Vos informations ont bien été saisies</center></h4><br>';
  // if(isset($_POST['submitIns'])){
        echo "<center><hr>"."Vos détails sont:<br> ";
        $nom = $_POST["nom"];
        $prenom = $_POST["prenom"];
        $date_naiss = $_POST["date_naiss"];
        $Email = $_POST["Email"];
        $Password = $_POST["Password"];
        echo "Nom : $nom <br>";
        echo "Prénom : $prenom <br>";
        echo "Date de naissance : $date_naiss <br>";
        echo "Email : $Email <br>";
        echo "Mot de passe : ****** <br> <hr> </center>";

        $insert_query = "insert into co_vote(nom, prenom, date_naiss, email, password) VALUES('$nom','$prenom','$date_naiss','$Email','$Password')";
        $insert_submit= mysqli_query($con, $insert_query) or die(mysqli_error($con));
        $insert_query1 = "insert into de_vote(nom, prenom, date_naiss, email, password) VALUES('$nom','$prenom','$date_naiss','$Email','$Password')";
        $insert_submit= mysqli_query($con, $insert_query1) or die(mysqli_error($con));
   //} elseif (isset($_POST['submit'])) {
//}
  ?>
<style>
    hr{
        align: center;
        width: 500px;
    }
    </style>
    <center>
        <br>
        <br>
        <a href="./voterLogin.php">Cliquez ici pour vous connecter</a>
    </center>
<link href="https://fonts.googleapis.com/css?family=Secular+One" rel="stylesheet"> 
<link rel="stylesheet" type="text/css" href="master.css">
