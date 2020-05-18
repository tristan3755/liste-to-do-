<?php

if(isset($_GET["titre"]))
{
   
    $tableauJson = 'tableau.json';
    $current = file_get_contents($tableauJson);
    $GET = [];
   
    function suppression() 
{
    unset($_GET['']);
}

    $current=json_encode($GET);
    file_put_contents($tableauJson,$current);

}  


  
?>