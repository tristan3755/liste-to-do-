<?php   include 'navBar.phtml';?>

<div class="banniere">

<h1>Liste des tâches</h1>

</div>

<div class="divPhp"> 

<?php   include 'fonction.php';

foreach($lines as $line)
{
  echo '<h2>'.$line[0].'</h2>'; 
  echo '<h3>'.$line[1].'</h3>';
  echo '<p>'. "Pour la date du :".$line[2].'</p>';
  echo '<p>'. "Urgence de la tâche :". $line[3].'</p>';
}

fclose($file);
               
?>

</div>
</body>
</html>