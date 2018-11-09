<?php
include('function.inc.php');
connexion();
 ?>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Acceuil</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/master.css">
  </head>
  <body>
    <?php include('navbar.php'); ?>
    <div class="container containerOffres">
      <h2>OFFRE D'EMPLOIS</h2>
      <!-- TODO SELECT SQL AVEC BOUCLE POUR AFFICHER LES OFFRES -->
      <?php include('offreEmplois.php'); ?>
      <!-- Creation de la modale -->
        <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalTitle" aria-hidden="true" data-backdrop="static"> <!-- data-keyboard="false" -->
        <div class="modal-dialog" id="modalDialog" role="document">
          <div class="modal-content" id="modalContent">
            <div class="modal-header">
              <h5 class="modal-title" id="modalTitle"></h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="location.reload();"> <!-- Un clic sur le bouton fermer recharge la page-->
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            </div>
            <!-- Bouton fermer en bas de la modale -->
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="location.reload();">Close</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
  <script type="text/javascript">
    // Creation d'un formulaire dans une modale pour ajouter un produit
    function modaleCompte(){
      $(".modal-title").html("Compte"); // Titre de la modale
      $(".modal-body").empty(); // On vide la modale
      $(".modal-body").append("<p>Login : <input type='text' id='login' required></p>"); // Formulaire pour la connexion
      $(".modal-body").append("<p>Mot de passe: <input type='text' id='pwd' required></p>");
      $(".modal-body").append("<p><button onClick='test'>Se connecter</button></p>"); // Bouton "Se connecter"
      }
    </script>
</html>
