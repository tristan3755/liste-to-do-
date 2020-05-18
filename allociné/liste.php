
  <?php   include 'navBar.phtml';?>  

  <div class="banniere">

<h1> Les films à l'affiche</h1>

</div>

<div class="divPhp"> 

<?php                




// le TDD test driven developpement 
// for avec i = 0 i inferieur longueur    i++
// récupérer le contenu du json pour le mettre dans un tableau 

$tableauJson = 'tableau.json';
$current = file_get_contents($tableauJson);
$tableau = json_decode($current,true);


for ($i=0 ; $i<count($tableau);++$i)
{


echo '<div class="php">'.'<div class=img>'.'<img src="'.($tableau[$i]["monImage"].'" id="image"/>'.'</div>');
echo '<h1>'.($tableau[$i]["titre"].'</h1>');
echo '<p>'.'Description : '.($tableau[$i]["description"].'</p>');
echo '<p>'.'Dans les salles le '.($tableau[$i]["Date"].'</p>'.'</div>');

}




?>

</div>


</body>

</html>


</body>
</html>






        