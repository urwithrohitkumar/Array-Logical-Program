<?php
//find pair of number which is sum of given number.
$a = [7,2,9,8,8,14,2,2,3,4,5,6,4,5,6,8];
$a_length = count($a);
$sum = 8;
$b = array();
for($i=0;$i<$a_length;$i++)
{
    for($j=0;$j<$a_length;$j++)
    {
        if($a[$i]+$a[$j] == $sum)
        {
            $b[$a[$i].",".$a[$j]] = $sum;
        }
    }
}
echo "<pre>";
print_r($b);exit;