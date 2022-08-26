<?php
//sort an unsorted array.
$a = [7,2,9,8,1,3,4,5,4,5];
$a_length = count($a);
$count = 0;
$b = array();
for($i=0;$i<$a_length;$i++)
{
    // if($i==7)
    //             {
    //                 echo "<pre>";
    //                 print_r($b);exit;
    //             }
    for($j=$i+1;$j<$a_length;$j++)
    {
        if($a[$i] + $a[$j] == 9)
        {
            $g = 0;
            foreach($b as $bdataval)
            {
                if($bdataval[0] == $a[$i]."+".$a[$j])
                {
                    $g=1;
                }
            }
            $data = array();
            if($g != 1)
            {
                    array_push($b,array($a[$i]."+".$a[$j],9));
            }
        }
    }
}
echo "<pre>";
print_r($b);exit;