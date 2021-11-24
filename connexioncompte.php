<!DOCTYPE html>
    <head>
        <title>Check Hotel Prices </title>
        <meta charset="utf-4">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="style.css">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet" >
        <script src="https://kit.fontawesome.com/c26cd2166c.js"></script>
         <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    </head>
    <body>
    <?php include('navbar.php');
    ?>
       <!-- formulaire connexion -->
<main>
    <div class="container mt-5">
                <h1 class="text-center py-3">Bienvenue sur votre espace</h1>
                <h3 class="text-center py-3">Merci de saisir vos identifiants</h3>    
                <form method="post">
                    <div class="row row justify-content-center ">
                        <div class="col-md-6 py-3">
                            <label for="Nomutilisateur" class="form-label">Nom d'utilisateur</label>
                            <input type="text" class="form-control" id="Nom" required>
                        </div>
                    </div>
                    <div class="row row justify-content-center ">
                        <div class="col-md-6 py-3">
                            <label for="mdputilisateur" class="form-label"> Mot de passe</label>
                            <input type="password" class="form-control" id="mdputilisateur" required>
                        </div>
                    </div>
                    <div class="row row justify-content-center ">
                        <div class="col-md-6 py-3">
                        <label for="confmdputilisateur" class="form-label">Confirmation Mot de passe</label>
                        <input type="password" class="form-control" id="confmdputilisateur" required>
                        </div>
                    </div>
                    <div class="row row justify-content-center "> 
                        <div class="col-md-6 py-3  text-center">
                            <button type="button" class="btn4 btn-primary" onclick="valider()" id="btnaccescompte" type="submit">Soumettre</button>
                        </div>
                        <p id="msg"></p>
                    </div>
                </form>
            </div>
</main>
<?php
include ("footer.php");
?>