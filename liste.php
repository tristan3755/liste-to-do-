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
            <a class="butt"> REMOVE </a>



        </nav>
    </header>

    <div class="banniere">

        <h1>Click on add in order to add a task</h1>

    </div>



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


foreach($lines as $line)
{
 var_dump($line);
}


//  Fermeture du fichier
fclose($file);
        

          
        
        
        
        ?>

<?php 
    /*      while
         
       
          foreach($tasks as $task)
          {
            var_dump($task);
          }

          fclose($file);*/

      
       
          
         

        /* for ($i = 0; $i <count($task); $i++) {
            echo ($task);
        }*/
            
       /* foreach($tasks as $task)
        {
          var_dump($tasks[$i]);
        }
         $tasks= [$_GET ['titre'],$_GET['description'],$_GET ['Date'],$_GET['list']];
        
        */




        ?>

</body>

</html>