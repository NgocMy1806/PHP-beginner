<?php
$a = [5, 2, 1, 4, 3];
$i = 0;
function swap(&$m, &$n)
{
    $z = $m;
    $m = $n;
    $n = $z;
}

for ($b = count($a); $b >= 1; $b--) {
    for ($i = 0; $i < $b - 1; $i++) {
        if ($a[$i] < $a[$i + 1]) {
            echo "vị trí của " .$a[$i] . " và " .$a[$i + 1] ." đã đúng" ."\n";
        } else {
            echo "vị trí của " .$a[$i] ." và " .$a[$i + 1] ." ko đúng" ."\n";
            $x = &$a[$i];
            $y = &$a[$i + 1];
            echo $x . $y;
            swap($x, $y);
            echo " swap to " . $x . " and " . $y . "\n";
        }

        print_r($a);
    }
}
?> 
 ?>
