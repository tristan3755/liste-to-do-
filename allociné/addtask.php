<?php 

if(!empty($_GET)){

    $tableauJson = 'tableau.json';
    $current = file_get_contents($tableauJson);
    if($current == "")
{
    $GET=[];
   
}

else {

    $GET=json_decode($current);

}
    
    
    array_push ($GET, $_GET);/* rajouter une ligne au tableau*/
    $current=json_encode($GET);
    file_put_contents($tableauJson,$current);
   
}
            
?>