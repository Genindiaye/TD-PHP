<?php
    $nb=806;
    $coup=0;

    $x=rand(0,1000);
        while($x!=$nb)
        {
        $x=rand(0,1000);
        $coup++;
        }
            echo "$nb trouvé en $coup coups ";
            ?>
            