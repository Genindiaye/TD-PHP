<?php
    function ppcm($a,$b){

        $res = $a * $b;
        while($a > 1){
            $r = $a % $b;
        if($r == 0 ){
          $result = $res / $b;
            break; 
                 }
            $a = $b;
            $b = $r;
        }
         return $result;
    }
?>

<?php
    echo ppcm( 6,10 );
?>
