<?php
// calculate the sum of following two array in a single array;
$a = [
    ["id"=>1,"val"=>100],
    ["id"=>2,"val"=>300],
    ["id"=>3,"val"=>500],
    ["id"=>9,"val"=>500]
];
$b = [
    ["id"=>1,"val"=>50],
    ["id"=>2,"val"=>150],
    ["id"=>5,"val"=>150]
];
$c = array();
foreach($a as $adata)
{
    array_push($b,$adata);
}
foreach($b as $bdata)
{
    $i = 0;
    foreach($c as &$cdata)
    {
        if($bdata['id'] == $cdata['id'])
        {
            $cdata['val'] = $cdata['val']+$bdata['val'];
            $i= $i+1;
        }
    }
    if($i == 0)
    {
        array_push($c,$bdata);
    }
}
echo "<pre>";
print_r($c);