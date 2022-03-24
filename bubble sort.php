<?php
$a= array(5,2,1,4,3);
$i=0;
function swap($a[$i],$a[$i+1]){
    $i=0;
    $z=$a[$i];
    $a[$i]=$a[$i+1];
    $a[$i+1]=$z; 
};
while($i<4){
    if ($a[$i] < $a[$i+1]){
        echo "vị trí của ".$a[$i]." và". $a[$i+1] ."đã đúng";
        ;
    } else {
        echo "vị trí của ".$a[$i]." và". $a[$i+1] ."ko đúng";
        swap ($a[$i],$a[$i+1])
    }
       ;
       $i++;}


?>