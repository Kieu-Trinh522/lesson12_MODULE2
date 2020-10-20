<?php
function bubbleSort($list)
{
    $count = count($list);
    for ($i = 0; $i < $count; $i++) {
        for ($j = 0; $j < $count - 1; $j++) {
            if($list[$j]>$list[$j+1]){
                $temp=$list[$j+1];
                $list[$j+1]=$list[$j];
                $list[$j]=$temp;
            }
        }
    }
    return $list;
}
$array=[2, 3, 2, 5, 6, 1, -2, 3, 14, 12];
print_r(bubbleSort($array));
