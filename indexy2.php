<?php
//longest consecutive sequence
$temp1 = array();              /////new
$temp2 = array();
$a = [5,10,21,4,1,23,29,9,2,19,13,14,15,30,18,11,20,3,22,28,24,26,27,6,8,17];
$a_length = count($a);
$first = array();
$second = array();
for($i=0;$i<$a_length;$i++)
{
    $temp = $a[$i];
    for(;in_array($temp-1,$a);)
    {
        array_push($first,$temp-1);
        $temp=$temp-1;
    }
    sort($first);
    array_push($first,$a[$i]);
    $temp = $a[$i];
    for(;in_array($temp+1,$a);)
    {
            array_push($first,$temp+1);
            $temp=$temp+1;
    }
    if(count($first) > count($second))
    {
        $second = $first;
        $first = array();
    }
    else
    {
        $first = array();
    }
}
echo "<pre>";
print_r($second);exit;