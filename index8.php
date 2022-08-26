<?php
//sort an unsorted array.
$a = [7,2,9,8,1,3,4,5,6];
$a_length = count($a);
$count = 0;
for($i=0;$i<$a_length;$i++)
{
    for($j=$i+1;$j<$a_length;$j++)
    {
        if($a[$i] > $a[$j])
        {
            $temp = $a[$i];
            $a[$i] = $a[$j];
            $a[$j] = $temp;
        }
    }
}
echo "<pre>";
print_r($a);exit;