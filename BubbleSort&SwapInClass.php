<?php
class algo
{
    function swap(&$m, &$n)
    {
        $z = $m;
        $m = $n;
        $n = $z;
    }
    function bubble_sort($arr)
    {
        $i = 0;
        for ($b = count($arr); $b >= 1; $b--) {
            for ($i = 0; $i < $b - 1; $i++) {
                if ($arr[$i] < $arr[$i + 1]) {
                    //do nothing
                } else {
                    $x = &$arr[$i];
                    $y = &$arr[$i + 1];
                    $this->swap($x, $y);
                }
            }
        }
        print_r($arr);
    }
}
$algo1 = new algo();
$j = 2;
$k = 4;
$algo1->swap($j, $k);
echo "swap to " . $j . " and " . $k . "\n";
$a = [5, 2, 1, 4, 3];
$algo1->bubble_sort($a);
?>  
