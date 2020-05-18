<?php   include 'navBar.phtml';?>

    <div class="banniere">

        <h1>Selectionnez une tâche à supprimer</h1>

    </div>

<div class="divPhp"> 

     <?php   include 'fonction.php';

 

$boutonSupp = '<input type="button" value="supprimer" id="supp">';

foreach($lines as $line)
{
  echo '<h2>'.$line[0].'</h2>'; 
  echo '<h3>'.$line[1].'</h3>';
  echo '<p>'. "Pour la date du :".$line[2].'</p>';
  echo '<p>'. "Urgence de la tâche :". $line[3].'</p>';
  echo '<a input type="button" value="supprimer" id="supp" href="./suppressionTaches.php?suppLigne=titre"> supprimer </a>';
  
 }

//  Fermeture du fichier
fclose($file);
                
?>

</div>

</body>

</html>