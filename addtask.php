<!DOCTYPE html>
<html lang="en">

<head>
</head>

<body>

<h1> Tâche enregistrée</h1>

</body>

</html>







<?php 




/*$task= [$_GET ['titre'],$_GET['description'],$_GET ['Date'],$_GET['list']];*/

var_dump($_GET);

if(!empty($_GET))
{


          $file = fopen('exo.csv', 'a');

            /*fputcsv($file, $task);*/

            fputcsv($file, $_GET);




         

            fclose($file);

         
}
            


        

            

?>