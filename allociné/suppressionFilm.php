<?php

if(isset($_GET["titre"]))
{
   
    $tableauJson = 'tableau.json';
    $current = file_get_contents($tableauJson);
    $GET=[];
   
    if($_GET["titre"]==$tableauJson)
{
    unset($tableauJson['titre']);
}

    $current=json_encode($GET);
    file_put_contents($tableauJson,$current);

}  


  
?>