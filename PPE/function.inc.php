<?php
function connexion()
{
  $servername = "localhost";
  $username = "root";
  $password = "root";
  $databasename = "ekara";
  $port = "3306";

  $con = mysqli_connect($localhost,$username,$password,$databasename, $port);

      if (mysqli_connect_errno())
      {
          echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }
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
