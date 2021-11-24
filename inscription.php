<!DOCTYPE html>
<html>
    <head>
        <title>Inscription </title>
        <meta charset="utf-4">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="style.css">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet" >
        <script src="https://kit.fontawesome.com/c26cd2166c.js"></script>
         <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    </head>
    <body>
        <?php
        include ('navbar.php');
        ?>
    <main>
        <div class="container">
        <form method="post" clas="row" >
            <div class="well">
                <div class="row text-center">
                    <div class="col-md-offset-2 col-md-10 py-5">
                        <h1> Page d'inscription<br/><small> Merci de renseigner vos informations </small></h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-offset-2 col-md-6 py-1">
                        <div class="form-group">
                            <label for="Nom" class="form-label">Votre Nom</label>
                            <input type="text" class="form-control" id="nom" required>
                        </div>
                    </div>
                    <div class="col-offset-2 col-md-6 py-1" >
                        <div class="form-group">
                            <label for="prenom" class="form-label">Votre Prénom</label>
                            <input type="text" class="form-control" id="prenom" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-offset-1 col-md-6 py-1">
                        <div class="form-group">
                            <label for="statut" class="form-label">Vous êtes</label>
                            <select name="statut" id="statut"class="form-control">
                                <option value="particulier">Particulier</option>
                                <option value="Etudiant">Etudiant</option>
                                <option value="professionnel">Professionnel</option>
                                <option value="autre"> Autre</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-offset-1 col-md-6 py-1">
                        <div class="form-group">
                            <label for="organisme" class="form-label">Organisme</label>
                            <input type="text" class="form-control" id="organisme" >
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-offset-1 col-md-6 py-1">                 
                        <label for="mail" class="form-label" >Email</label>
                        <input type="mail" class="form-control" id="mail" required>                   
                    </div>
                    <div class="col-offset-1 col-md-6 py-1">
                        <label for="telephone" class="form-label">Téléphone</label>
                        <input type="text" class="form-control" id="telephone" placeholder="+33 6 XX XX XX XX">
                    </div>
                </div>
                <div class="row">
                    <div class="col-offset-1 col-md-6 py-1">
                        <label for="pswd_inscription" class="form-label" >Mot de passe</label>
                        <input type="mail" class="form-control" id="pswd_inscription" required>
                    </div>
                    <div class="col-offset-1 col-md-6 py-1">
                        <label for="pswd_inscriptionconfirm" class="form-label" >Confirmation Mot de passe</label>
                        <input type="mail" class="form-control" id="pswd_inscriptionconfirm" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 py-1 ">
                        <label for="commentaire_inscription" class="form-label">Commentaire</label>
                        <textarea class="form-control" name="commentaire_inscription" id="commentaire_inscription"  rows="10" required></textarea>
                    </div>
                    <div class="col-md-6 py-1">
                        <button class="btn btn-primary" type="submit">Soumettre</button>
                    </div>              
                </div>
                </div>
            </div>
        </form>
    </main>


    <!-- footer-->
    <?php
    include("footer.php");
    ?>
    
    </body>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" ></script>
    <script src="https://cdn.jsdeliver.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" ></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" ></script>
        <script src="script.js"></script>
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</html>