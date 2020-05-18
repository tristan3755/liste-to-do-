<?php
$ret = "";
if(isset($_GET["titre"]))
{
    //On ouvre en lecture
    $tableauJson = 'tableau.json';
    $current = file_get_contents($tableauJson);
    $numL = 0;
    $GET = [];
    while($GET=json_decode($current))
    {
        if($numL!=$_GET["titre"])
        {
            //On stocke la ligne dans un tableau sauf celle qu'on veut supprimer
            array_push ($GET, $_GET);
        }
        $numL++;
    }

    $current=json_encode($GET);
    file_put_contents($tableauJson,$current);

}  


  
    //On ouvre le fichier en écriture de remplacement
    $tableauJson = 'tableau.json';
    $current = file_get_contents($tableauJson);
    $tableau = json_decode($current,true);

    for ($i=0 ; $i<count($tableau);++$i)
    {
        if($ret=="")
        {
            //on a eut aucune erreur
            $ret = "J'ai bien supprimée";
        }
    }
  
    
    


?>