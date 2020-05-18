<?php

if(isset($_GET["titre"]))
{
    //On ouvre en lecture
    $tableauJson = 'tableau.json';
    $current = file_get_contents($tableauJson);
    $GET = [];
   
    function suppression() 
{
    unset($GET['titre']);
}

    $current=json_encode($GET);
    file_put_contents($tableauJson,$current);

}  


  
?>