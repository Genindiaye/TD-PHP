<?php
function estparfait($A)
{
    $sum = 0;
       
    for ($i = 1; $i < $A; $i++)
    {
        if ($A % $i == 0)
        {
            $sum = $sum + $i;
        }      
    }
      
    return $sum == $A;
}
   
$A= 12;
  
if (estparfait($A))
    echo " Nombre parfait";
else
    echo "est pas parfait";
?>