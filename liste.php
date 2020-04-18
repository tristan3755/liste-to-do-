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



          $file = fopen('exo.csv', 'r');

          $task = fgetcsv($file);

            fclose($file);

            


            for ($i = 1; $i <count($task); $i++) {
                echo ($task);
            }
            

?>



</body>

</html>