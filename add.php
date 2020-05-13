<?php   include 'navBar.phtml';?>

    <div class="banniere">

        <h1>Add a Task</h1>

    </div>

    <form action="addtask.php" method="GET" name="formulaire">
    <div id="form">

        <label for="titre"> Titre: </label>
        <input type="text" name="titre">


        <textarea placeholder="Description" class="descript" name="description"></textarea>
        <div class="dat">
            <label for=".date"> Date: </label>
            <input type="date" class="date" name="Date">
        </div>
        <div class="priority">
            <label for=".liste"> Priority: </label>
            <select class="liste" name="list">

                <option> hight </option>
                <option> medium </option>
                <option> low </option>

            </select>

        </div>
        <div>
            <input type="submit" class="bouton" >
        </div>


    </div>
</form>

</body>

</html>