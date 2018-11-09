<?php
include('function.inc.php');
connexion();
$var_modal_forme = "modal-connexion";
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
          <div id='modalContent'>
            <div class="modal-header">
              <h3 class="modal-title" id="modalTitle"></h3>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="location.reload();"> <!-- Un clic sur le bouton fermer recharge la page-->
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
  <script type="text/javascript">
    // Creation d'un formulaire dans une modale pour ajouter un produit
    function modaleConnexion(){
      var element = document.getElementById("modalContent");
      element.classList.remove("modal-inscription");
      element.classList.add("modal-connexion");
      $(".modal-title").empty();
      $(".modal-title").html("CONNEXION"); // Titre de la modale
      $(".modal-body").empty(); // On vide la modale
      $(".modal-body").append("<p>Login : </p><input type='text' id='login' required>"); // Formulaire pour la connexion
      $(".modal-body").append("<p>Mot de passe: </p><input type='text' id='pwd' required>");
      $(".modal-body").append("<button onClick='test'>Se connecter</button>"); // Bouton "Se connecter"
      $(".modal-body").append("<p class='text-center'>Pas de compte ? <label onclick='modaleInscription()'>Inscivez-vous !</label></p>");
      }
      function modaleInscription(){
        var element = document.getElementById("modalContent");
        element.classList.remove("modal-connexion");
        element.classList.add("modal-inscription");
        $(".modal-title").empty();
        $(".modal-title").html("INSCRIPTION"); // Titre de la modale
        $(".modal-body").empty(); // On vide la modale
        $(".modal-body").append("<div class='row'>"); // Information personnel
        $(".modal-body").append("<div class='col-sm-6'><p>Nom : <input type='text' id='nom' required></p></div>");
        $(".modal-body").append("<div class='col-sm-6'><p>Prénom : <input type='text' id='prenom' required></p></div>");
        $(".modal-body").append("</div>");
        $(".modal-body").append("<div class='row'>");
        $(".modal-body").append("<div class='col-sm-6'><p>Email : <input type='text' id='email' required></p></div>");
        $(".modal-body").append("<div class='col-sm-6'><p>Téléphone : <input type='text' id='tel' required></p></div>");
        $(".modal-body").append("</div>");
        $(".modal-body").append("<div class='row'>"); // Information de connexion
        $(".modal-body").append("<div class='col-sm-6'><p>Login : <input type='text' id='login' required></p></div>");
        $(".modal-body").append("<div class='col-sm-6'><p>Mot de passe: <input type='text' id='pwd' required></p></div>");
        $(".modal-body").append("</div>");
        $(".modal-body").append("<button class='con-input' onClick='test'>S'inscrire</button>"); // Bouton "Se connecter"
        $(".modal-body").append("<p class='text-center'>Déjà un compte ? <label onclick='modaleConnexion()'>Connectez-vous !</label></p>");
        }
    </script>
</html>
