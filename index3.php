<?php
//check given number is exist or not and how many times of occurance.
$a = [7,2,9,8,8,14,2,2,3,4,5,6,4,5,6,8];
$b = 2;
$c = 0;
$d = array();
$a_length = count($a);
for($i=0;$i<$a_length;$i++)
{
    if($a[$i] == $b)
    {
        $c = $c+1;
    }
}
if($c > 0)
{
    $d[$b] = $c;
    echo "Number ".$b." found ".$c." times in array.";
}