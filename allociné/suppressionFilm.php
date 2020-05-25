<?php



//$retour="";

if(isset($_GET["titre"]))
{
    $tableauJson = 'tableau.json';
    $current = file_get_contents($tableauJson);
    $tableau = json_decode($current,true);
   
    
    
    for ($i=0 ; $i<count($tableau);++$i)
    {
        if($current!=$_GET["titre"])
        {
            //On stocke la ligne dans un tableau sauf celle qu'on veut supprimer
            array_push ($current,$_GET);
            
        }
    }



   
}


?>

