<?php
//Print missing number between 1 to 100.
$a = ["55","28","19","37","58","74","78","68","25","18","98","15","23","4","5","2","27","11","8","34"];
$a_length = count($a);
for($i=1;$i<=100;$i++){
    $b1 = 0;
for($j=0;$j<$a_length;$j++)
{
    if($i == $a[$j])
    {
        $b1 = 1;
        break;
    }
}
if($b1 != 1)
{
    echo $i;
    echo "<br>";
}
}