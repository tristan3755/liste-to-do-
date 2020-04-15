<?php 




if( isset ($_GET ['titre'])){
    echo 'Le nom de la tâche est '  .  $_GET {'titre'} . '.';
    }


if( isset ($_GET ['description'])){
    echo ' Description : '  .  $_GET {'description'} . '.';
    }

    if( isset ($_GET ['Date'])){
        echo ' A éffectuer pour le  : '  .  $_GET {'Date'} . '.';
        }


        if( isset ($_GET ['list'])){
            echo ' Priorité  : '  .  $_GET {'list'};
            }

?>