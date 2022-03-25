<?php
//Brute-force Search: find the element with value 4

$a = [5, 1, 4, 2, 3];

foreach ($a as $x => $value) {
    if ($value == 4) {
        $z = $x + 1;
        echo "value 4 is the $z element of a, with index is $x";
        break;
    }
    echo $value . "\n"; //e thêm dòng này để e biết được là đã chạy loop mấy lần rồi, cái break có active ko
}
?>
