<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./style.css" rel="stylesheet" />


    <title>Document</title>
</head>

<body>
    <header>
        <nav>


           
            <a class="butt"> LIST</a>
            <a class="butt"  href="./add.php">ADD A TASK</a>
            <a class="butt" href="./remove.php"> REMOVE </a>



        </nav>
    </header>

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