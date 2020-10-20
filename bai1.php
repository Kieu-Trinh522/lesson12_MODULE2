<?php
function selectionSort($list)
{
    for ($i = 0; $i < count($list) - 1; $i++) {
        $min = $i;
        for ($j = $i + 1; $j < count($list); $j++) {
            if ($list[$j] < $list[$min]) {
                $min = $j;
            }

        }
        $list=saw_positions($list,$i,$min);
    }
    return $list;
}
function saw_positions($lists,$sortedList,$unsortedList){
    $valueRight=$lists[$unsortedList];
    $lists[$unsortedList]=$lists[$sortedList];
    $lists[$sortedList]=$valueRight;
    return $lists;
}
$array=[1, 9, 4.5, 6.6, 5.7, -4.5];
echo implode(",",$array);
echo "<pre>";
echo implode(",",selectionSort($array));

