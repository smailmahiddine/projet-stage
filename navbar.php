<?php
include ('db.php');
?>

<!-- navabar -->
<nav class="navbar navbar-expand-md ">
            <a href="index.php"><i class="fa fa-cubes fa-3x text-dark mx-3"></i></a>
            <!-- button collapse -->
            <button type="button" class="navbar-toggler bg-light" data-toggle="collapse" data-target="#nav"> <span><i class="fa fa-align-justify" title="Align Justify"></i></span></button>

        <div class="collapse navbar-collapse justify-content-between" id="nav" >
             <!-- collapse faire disparaitre les elements dans tous les cas --> 
             <!-- justify-content-between  occuper tout lespace avec espace entre les deux div -->
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link text-uppercase" href="#">Presentation</a></li>
                <li class="nav-item"><a class="nav-link text-uppercase" href="#">Objectifs</a></li>

                <li class="nav-item dropdown"><a class="nav-link text-uppercase dropdown-toggle" data-toggle="dropdown"  href="#">Mode d'emploi</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">projet1</a>
                        <a class="dropdown-item" href="#">projet2</a>
                        <a class="dropdown-item" href="#">projet3</a>
                        <a class="dropdown-item" href="#">projet4</a>
                        <a class="dropdown-item" href="#">projet5</a>
                    </div>
                </li>
               
            </ul>
            <div >
                <button type="button"  onclick="myFunction1()"  class="btn   btn-primary btn-sm text-uppercase" id="mdpusers">Mon Compte</button>
                <button type="button"  onclick="myFunction2()"  class="btn   btn-primary btn-sm text-uppercase ">Inscription</button>
            </div>
        </div>
</nav>