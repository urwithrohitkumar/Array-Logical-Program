<?php
//alternative positive and negative number
$a = [7,2,-9,-8,1,-3,-4,5,-4,5];
$a_length = count($a);
$eo = 0;
for($i=0;$i<$a_length;$i++)
{
    if($i%2 == 0)
    {
        if($a[$i] < 0)
        {
            $k = 0;
            for($j = $i+1;$j<$a_length;$j++)
            {
                if($a[$j] > 0)
                {
                    $temp = $a[$i];
                    $a[$i] = $a[$j];
                    $a[$j] = $temp;
                    break;
                }
            }
        }
    }
    else
    {
        if($a[$i] > 0)
        {
            for($j = $i+1;$j<$a_length;$j++)
            {
                if($a[$j] < 0)
                {
                    $temp = $a[$i];
                    $a[$i] = $a[$j];
                    $a[$j] = $temp;
                    break;
                }
            }
        }
    }

}
echo "<pre>";
print_r($a);exit;