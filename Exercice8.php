<?php
$tab=array("Ndiaye"=>array("Genevieve","Dakar",20),"Senghor"=>array("Ben Cheikh",
"Senegal",19),"Sow"=>array("Rassoul","Lac Rose",18));
print_r($tab);

    foreach($tab as $cle=>$valeur)
    {
    echo "<b>Elément $cle :</b><br />";
    foreach($valeur as $ind=>$val)
    {
    echo "elément $ind :", $val, "<br />";
    }
    }
    ?>