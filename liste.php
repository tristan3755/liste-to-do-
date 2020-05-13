
    <?php   include 'navBar.phtml';?>

    <div class="banniere">

    <h1>Liste des tâches</h1>

    </div>

<div class="divPhp"> 

<?php 

                  
//  Ouverture du fichier en écriture
$file = fopen('exo.csv', 'r');

//  Si l'ouverture du fichier a échoué
if($file == false)
{
  //  Transmission de l'échec
   return  false;
}

//  Initialisation du tableau recevant les lignes
$lines = [];

do
{
 
  $line = fgetcsv($file);

 
  if($line == false)
  {
    $endFile = true;
  }
  
  else
  {
    $endFile = false;
    
    $lines[] = $line;
  }
}

while(!$endFile);


foreach($lines as $line)


{


  echo '<h2>'.$line[0].'</h2>'; 
  echo '<h3>'.$line[1].'</h3>';
  echo '<p>'. "Pour la date du :".$line[2].'</p>';
  echo '<p>'. "Urgence de la tâche :". $line[3].'</p>';

  
 }

//  Fermeture du fichier
fclose($file);
               
?>

</div>

</body>

</html>