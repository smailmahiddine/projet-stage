<?php
/*
include ('db.php');

    session_start();
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
  
    
        if(isset($_POST['submit'])) {
            $nom = clean($_POST['nom']);
            $password = clean($_POST['password']);
           

            if  (password_verify($password, $passwordh)) {
              
                $_SESSION["Nomutilisateur"] = 'Admin';
                $_SESSION["username"] = $Nom;
                $_SESSION["mdputilisateur"] = $passwordh;

                header("location: navbar.html");
            }

            else {

                header("location: footer.html");
                }
        }          
            
        else {
            echo 'problème post';
            header("location: index.html");
        }


function clean($data)
    {
        $data = trim($data); //enleve les espaces
        $data = stripslashes($data); //enleve les slash
        $data = htmlspecialchars($data); //transforme des carteres speciaux en chaine de caractere
        return $data;
    }
    ?>*/