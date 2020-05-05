<?php


//  Ouverture du fichier en écriture
$file = fopen('exo.csv', 'r');

//  Si l'ouverture du fichier a échoué
if($file == false)
{
  //  Transmission de l'échec
   return false;
}

//  Initialisation du tableau recevant les lignes
$lines = [];

do
{
  //  Récupération d'une ligne CSV
  $line = fgetcsv($file);

  //  Si la fin du fichier est atteinte
  if($line == false)
  {
    $endFile = true;
  }
  //  Si la fin du fichier n'est pas atteinte
  else
  {
    $endFile = false;
    //  Ajout de la ligne à l'ensemble des lignes
    $lines[] = $line;
  }
}
//  Tant que la fin du fichier n'est pas atteinte
while(!$endFile);






//  Fermeture du fichier
fclose($file);
        





?>