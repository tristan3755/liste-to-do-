<?php   include 'navBar.phtml';?>

<div class="banniere">

        <h1> Nouvelle programmation de film</h1>

    </div>

    <form action="addtask.php" method="GET" name="formulaire">
    <div id="form">

        <label for="titre"> Titre: </label>
        <input type="text" name="titre"> 

        <label for="monImage" class="img">Selectionnez une image:</label> 
        <input type="text"  name="monImage">


        <textarea placeholder="Description" class="descript" name="description"></textarea>
        <div class="dat">
            <label for=".date"> Date: </label>
            <input type="date" class="date" name="Date">
        </div>
        
        <div>
            <input type="submit" class="bouton" >
        </div>


    </div>
</form>

</body>

</html>



</body>
</html>