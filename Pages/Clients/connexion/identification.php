<?php

    include ("bdconnect.php");
    include ("../../barre/barre.php");
    $mdp= $_POST['mdp'];
    $mail=$_POST['mail'];

    
    $sql= "SELECT * FROM Client WHERE Mail='$mail' AND Mdp='$mdp' ";
  $result = $bdd->query($sql);?>

<!DOCTYPE HTML>
<html lang=fr>
<Font face ='Arial'>
    <head>
    <meta charset = "UTF-8" />    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <style>
            .H1{
                font-size:40px;
                color:black;
                margin-top:150px;
                animation: slideIn 2s forwards; /* Appelle l'animation */
        }

        /* Animation pour faire glisser le texte */
        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateX(-100%);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

<style>
            .H2{
                font-size:25px;
                margin-top:150px;
    
            }

        </style>


    <?php if ($result->num_rows === 1) :?>

        <div class="container text-center mt-5">
              <H1 class='H1'> Bienvenue  <?php echo  $mail;?> ! </H1> 

              <hr>
         
         <div class="container mt-5">
    <h1 class="h4 text-center mb-4">Veuillez remplir ce formulaire pour finaliser votre demande d'essai</h1>

    <div class="row align-items-center gap-4">
        <div class="col-md-4">
            <img src="/supercar_project/assets/images/DE2.jpg" class="img-fluid rounded shadow" alt="Voiture Volkswagen">
        </div>

        <div class="col-md-6">
            <form>
                <div class="mb-3">
                    <input type="text" class="form-control" placeholder="Nom">
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" placeholder="mail">
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" placeholder="Adresse">
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" placeholder="Marque de la voiture">
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" placeholder="Modèle de la voiture">
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" placeholder="Date d'essai">
                </div>
                <a href="#" class="btn btn-primary">Envoyer</a> <a class="btn btn-secondary" href="Accueil-DE.php">Retour</a>
            </form>
        </div>
    </div>
</div>

    </div>
    
    
    
    
    <!----CONDITION ELSE----->
        <?php else : ?>
            <div class="container text-center mt-5">
                <H1 class='H1'> Nom d'utilisateur ou mot de passe incorrect.</H1>
        <br> <a href='connexion.php' class='H2'><u>Veuillez réessayer</u> </a>
        </div>
        <hr>
        
         <?php endif; ?>

        

<?php $bdd->close(); ?>

</body>
</html>



