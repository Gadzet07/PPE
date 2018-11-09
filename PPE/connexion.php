<?php
include('function.inc.php');
connexion();
 ?>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Connexion</title>
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
    <div class="container">
      <div class="col-sm-8 containerConnexion" style="margin-left: 18%;margin-top: 7%;">
        <h2 class="text-center">CONNEXION</h2>
        <form action="index.php" method="post">
          <div class="form-group">
            <label for="email">Login :</label>
            <input type="text" class="form-control" id="login">
          </div>
          <div class="form-group">
            <label for="pwd">Mot de passe :</label>
            <input type="password" class="form-control" id="pwd">
          </div>
          <input type="submit" class="btn btn-default" name="connexion" value="CONNEXION">
          <button type="submit" class="btn btn-default" id="inscription">inscription</button>
        </form>
      </div>
    </div>
    <?php
    if($_POST){
    if(isset($_POST['connexion'])){
        connexionWeb();
    }elseif(isset($_POST['inscription'])){
        inscriptionWeb();
    }
}
    ?>
  </body>
</html>
