<?php
$cptrow = 0;
$resultOffre = getOffreEmploisResumer();
//Vérification si le résultat possède des données
if (mysqli_num_rows($resultOffre) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($resultOffre)) {
      if($cptRow == 2){
        echo "<div class='row'>";
      }
      echo "<div class='col-sm-4 offresEmplois'>";
      echo "<div class='row inter'>";
      echo "<h3>".$row['intituler']."</h3>";
      echo "</div>";
      echo "<div class='row inter'>";
      echo "<h4>Résumé</h4>";
      echo "</div>";
      echo "<div class='row inter'>";
      echo "<p>".$row['resumer']."</p>";
      echo "</div>";
      echo "<button onClick='afficherDetails()'>Detail</button>";
      echo "</div>";
      if ($cptRow == 2) {
        echo "</div>";
      }
      if($cptRow == 2)
      {
        $cptRow = 0;
      }else{
        $cptRow += 1;
      }
    }
} else {
    echo "0 results";
}
?>
