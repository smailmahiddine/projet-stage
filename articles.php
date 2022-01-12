
<!DOCTYPE html>
    <head>
        <title> Seo For You </title>
        <meta charset="utf-4">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="style.css">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet" >
        <script src="https://kit.fontawesome.com/c26cd2166c.js"></script>
         <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    </head>
    <body>
    

    <!-- navabar -->
    <?php 
        include ("navbar.php");
    ?>
</main>

   <div class="article1 bg-light p-5">
        
        <?php      
        $article = $bdd->prepare('SELECT  * FROM articles');
        $article->execute(array());
        $article=$article->fetchAll();
        
            $titre = $article['titre'];
            $id= $article['id'];
            $contenu= $article['contenu'];
            

        /* traitement envois commentraire */
                if(isset($_POST['commentaireForm']))
                {

                        if(!empty($_POST['nom']) AND!empty($_POST['commentaire']))
                        {
                            $nom = htmlspecialchars($_POST['nom']);
                            $commentaire = htmlspecialchars($_POST['commentaire']);
                            
                            
                            
                            $insercomment = $bdd->prepare('INSERT INTO commentaires(nom, commentaire,id_article) values(?,?,?)');
                            $insercomment->execute(array($nom, $commentaire, $id));
                            $msg=" <span style='color:green'> merci de votre commentaire, nous prendrons le soin de l'étudier</span>";
                        }
                        else{
                            $msg="<span  style='color:red'>merci de remplir tous les champs !!!!</span>";
                        }
                }
    
        ?>
        <div class="row justify-content-center">
            <div class="col col-md-4 py-5 imgarticle1 ">
               <img src='images/imageArticle5.jpg'>
            </div>
            <div class="col col-md-8  py-5 ">
                <h1 ><?= $titre ?></h1>
            </div>        
            
        </div>
        <div>
        <p><?=  $contenu ?></p>
        </div>
        <div class="row">
                            <div class="col-lg-9 mx-auto">
                                <form  method="post" >
                                    <div class="form-row py-1">
                                        <div class="col-lg-6">
                                            <h6 class="font-italic">Votre commentaire</h6>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-lg-6">
                                            <label for="mail"> </label>
                                            <input type="text" class="form-control bg-light mb-3" placeholder="votre nom prénom" name="nom" required>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-lg-12">
                                            <label for="commentaire"> </label>
                                            <textarea  class="form-control bg-light" row="30"  placeholder="votre commentaire" name="commentaire" required ></textarea>                                            
                                        </div>
                                    </div>
                                    <button class="btn3 my-4 font-weight-bold" name="commentaireForm">Envoyer</button>
                                </form>
                            </div>         
        </div>
            <?php if(isset($msg))
                {
                    echo $msg;
                }
                ?>
    </div> 
    <div class="article2 p-5">
        <div class="row justify-content-center">
            <div class="col col-sm-4 py-5 imgarticle1 ">
               <img src='images/imageArticle.jpg'>
            </div>
            <div class="col col-sm-8  py-5 ">
                <h1>Marketing en ligne externaliser pour plus de résultats</h1>
            </div>  
            <div>
                <p class="text">L'externalisation du marketing en ligne chez SEO For You génère davantage de visiteurs, de prospects et de ventes sur le site Web.
                    Nous voulons tous être trouvés sur Internet, afin d'avoir des clients. Et ainsi apporter beaucoup de chiffre d'affaires et de profit.
                    Mais que faire si vous manquez de temps ou ne savez pas exactement comment cela fonctionne ?
                    L'externalisation de votre marketing en ligne est la solution. Nous vous montrerons quels sont les avantages 
                    et comment nous travaillons<span class="points">...</span>
                    <span class="plusDeText">
                        Pourquoi externaliser le marketing en ligne ?
                        Vous vous demandez peut-être : l'externalisation du marketing en ligne est-elle pour moi ? 
                        En tant qu'entrepreneur,vous êtes occupé avec votre propre entreprise et tout ce qui l'accompagne.
                        Vous vous occupez des clients, des tâches administratives et d'autres processus commerciaux.
                        Et puis il y a aussi le marketing en ligne. Vous savez qu'il est important de bien faire les choses,
                        car si vous pouvez être trouvé, vous augmentez les chances de clients. Mais parce que vous êtes déjà 
                        si occupé, le marketing en ligne devient rapidement un enfant négligé ou un « must ».
                        Et cela ne contribue généralement pas au résultat. De plus, en tant qu'entrepreneur, 
                        vous devez vous apprendre toutes sortes de techniques de marketing. Pour devenir trouvable,
                        vous devez tout savoir sur l'optimisation des moteurs de recherche et si vous souhaitez faire 
                        de la publicité, vous devez savoir comment la mettre en place de manière rentable. Et en plus,
                        vous devez également savoir, une fois que vous avez des visiteurs sur votre site Web, 
                        comment vous les convertissez en clients acheteurs. Êtes-vous fatigué de l'idée? Ensuite,
                        il est temps d'externaliser le marketing en ligne à une agence de marketing en ligne.
                    </span>
                <button class="btn5 lireLaSuite mt-3">Afficher plus --></button>
                </p>
            </div>
        </div>
    </div>
    
</main>
    <?php
    include ("footer.php");
    ?>