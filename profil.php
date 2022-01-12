<!DOCTYPE html>
    <head>
        <title> Check Hotel Prices </title>
        <meta charset="utf-4">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="style.css">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet" >
        <script src="https://kit.fontawesome.com/c26cd2166c.js"></script>
         <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    </head>
    <body>

<?php
session_start();
include('navbar.php');
if(isset($_GET['id'])AND $_GET['id']>0)
{
    $getid = $_GET['id'];
    $requser= $bdd->prepare('SELECT * FROM users where id = ?');
    $requser->execute(array($getid));
    $userinfo=$requser->fetch();
}
?>

<h2> Bienvenue sur votre profil <?php echo "<font color=green>". $userinfo['prenom']."</font>"?></h2>

<div>
<h3> Informations personnelles</h3>
Nom Utilisateur = <?php echo $userinfo['nom']; ?> </br></br>
Prenom : <?php echo $userinfo['prenom']; ?></br></br>
Mail : <?php echo $userinfo['mail']; ?></br></br>
Statut : <?php echo $userinfo['statut']; ?></br></br>
Organisme : <?php echo $userinfo['organisme']; ?></br></br>

<?php
         if(isset($_SESSION['id']) AND $userinfo['id'] == $_SESSION['id']) {
         ?>
         <br />
         <a href="editionprofil.php">Editer mon profil</a>
         <a href="deconnexion.php">Se déconnecter</a>
         <?php
         }

























