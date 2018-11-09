<?php
function connexion()
{
  $user = 'root';
  $password = 'root';
  $db = 'ekara';
  $host = 'localhost';
  $port = '3307';

  $con = mysqli_connect($host, $user, $password, $db, $port);
  return $con;
}

function getOffreEmploisResumer()
{
  $con = connexion();
  $sql = "SELECT intituler, resumer FROM offre";
  $valeurs = mysqli_query($con, $sql);
  return $valeurs;
}

function connexionWeb()
{
  $con = connexion();
  $req = $bdd->prepare('SELECT login, motDePass FROM candidat WHERE login = :login');
  $req->execute(array(
      'login' => $login));
  $resultat = $req->fetch();

  // Comparaison du pass envoyé via le formulaire avec la base
  $isPasswordCorrect = password_verify($_POST['motDePass'], $resultat['MotDePass']);
  if (!$resultat)
  {
      echo 'Mauvais identifiant ou mot de passe !';
  }
  else
  {
      if ($isPasswordCorrect) {
          session_start();
          $_SESSION['id'] = $resultat['id'];
          $_SESSION['login'] = $pseudo;
          echo 'Vous êtes connecté !';
      }
      else {
          echo 'Mauvais identifiant ou mot de passe !';
      }
  }
}
 ?>
