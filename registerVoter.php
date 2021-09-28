<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Inscription du nouveau votant</title>
        <link href="https://fonts.googleapis.com/css?family=Secular+One" rel="stylesheet"> 
        <style>
            body{
               color: white;
			
            }
            input{
                width: 250px;
                padding: 10px;
                margin: 5px;
                border-radius: 10px;
            }
            hr{
                align: center;
                width: 500px;
            }
        </style>
        <link rel="stylesheet" type="text/css" href="master.css">
    </head>
    <body>
    <center>

        <h1>Vote Responsable</h1>
		<h3>Inscription du nouveau votant</h3>
        <hr>
        <form action="registerVoterScript.php" method="post">
			
            <input type="text" placeholder="Nom" name="nom" >
            <br>
            <input type="text" placeholder="Prénom" name="prenom">
            <br>
            <input type="text" placeholder="Date de naissance" name="date_naiss">
            <br>
            <input type="text" placeholder="Email" name="Email">
            <br>
            <input type="password" placeholder="Password" name="Password">
            <br>

            <input  class="btn btn-primary" type="submit" name="submit" value="S'inscrire">

        </form>
        <hr>
        
    </center>
    <center>
                    <h3> <a href="index.php">Revenir à l'écran d'accueil</a> </h3>
    </center>

    </body>
</html>
