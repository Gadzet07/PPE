<script type="text/javascript">
  // Creation d'un formulaire dans une modale pour ajouter un produit
  function afficherDetails(){
    $(".modal-title").html(""); // Titre de la modale
    $(".modal-body").empty(); // On vide la modale
    $(".modal-body").append("<p>Login : <input type='text' id='login' required></p>"); // Formulaire pour la connexion
    $(".modal-body").append("<p>Mot de passe: <input type='text' id='pwd' required></p>");
    $(".modal-body").append("<p><button onClick='test'>Se connecter</button></p>"); // Bouton "Se connecter"
    }
  </script>


// il faut l'intituler, description poste, metier, video
