<?php
//Brute-force Search: find the element with value 4
class mymy
{
    function BruteforceSearch($arr, $need_search_value)
    {
        foreach ($arr as $x => $value) {
            if ($value == $need_search_value) {
                $z = $x + 1;
                echo $need_search_value .
                    " is the " .
                    $z .
                    "element of a, with index is " .
                    $x;
                break;
            }
            echo $value . "\n"; //e thêm dòng này để e biết được là đã chạy loop mấy lần rồi
        }
    }
}
$a = [5, 1, 4, 2, 3];
$mymy1 = new mymy();
$mymy1->BruteforceSearch($a, 4);
?>

 
