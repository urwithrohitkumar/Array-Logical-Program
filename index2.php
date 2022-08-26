<?php
//Print duplicate number and count.
$a = [7,2,9,8,8,14,2,2,3,4,5,6,4,5,6,8];
$b = array();
$c = "";
$a_length = count($a);
for($i=0;$i<$a_length;$i++)
{
    $c = 1 ;
    for($j=0;$j<$a_length;$j++)
    {
        if($i != $j)
        {
            if($a[$i] == $a[$j]){
            $c = $c+1;
        }
        }
    }
    if($c > 1)
    {
        $b[$a[$i]] = $c;
    }
}
echo "<br>";
print_r($b);