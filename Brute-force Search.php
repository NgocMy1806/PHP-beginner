<?php
//Brute-force Search: find the element with value 4

$a= array(5,1,4,2,3);

foreach($a as $x=>$value){
        if ($value==4){
        $z=$x+1;
        echo "value 4 is the $z element of a, with index is $x";
    break;}
    echo $value ;//e thêm dòng này để e biết được là đã chạy loop mấy lần rồi, cái break có active ko. Nhưng mà e ko biết làm sao để các value hiển thị tách nhau a cho dễ nhìn được @@//
    echo "<br>"; // ko hiểu sao e ko gõ được thẻ br
}
?>


--
function swap ($a[$i],$a[$i+1]){
    $i=0;
    $z=$a[$i];
    $a[$i]=$a[$i+1];
    $a[$i+1]=$z; 
};

function compare


$a= array(5,2,1,4,3);
$i=0;
function swap(&$arr, $position1, $position2) {
    $z = $arr[$position1];
    $arr[$position1] = $arr[$position2];
    $arr[$position2] = $z;
    
    
};
$result = swap($a, 2, 3);

echo "<pre>";
print_r($a);
echo "</pre>";