<?php
//remove duplicate number from array.
$a = [7,2,9,8,8,14,2,2,3,4,5,6,4,5,6,8];
$a_length = count($a);
$count = 0;
for($i=0;$i<$a_length;$i++)
{
    for($j=$i+1;$j<$a_length;$j++)
    {
        if($a[$i] == $a[$j])
        {
            for($k=$j;$k<$a_length;$k++)
            {
                $a[$k] = $a[$k+1];
            }
            $a_length--;
            $j--;
            array_pop($a);
        }
    }
}
echo "<pre>";
print_r($a);exit;