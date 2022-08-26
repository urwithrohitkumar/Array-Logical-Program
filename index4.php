<?php
//find smallest and largest number in array.
$a = [7,2,9,8,8,14,2,2,3,4,5,6,4,5,6,8];
$a_length = count($a);
$sm = $a[0];
$mx = $a[0];
for($i=0;$i<$a_length;$i++)
{
    if($a[$i] < $sm)
    {
        $sm =$a[$i];
    }
    if($mx < $a[$i])
    {
        $mx = $a[$i]; 
    }
}
echo "Smallest numbe in array is ".$sm."<br>";
echo "Largest numbe in array is ".$mx."<br>";