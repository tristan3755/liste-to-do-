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