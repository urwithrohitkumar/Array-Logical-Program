<?php
//print prime number between 2 to 100
//Why is 1 not a Prime Number?
//The answer to this lies in the definition of prime numbers itself. For a number to be called as a prime number,
//it must have only two positive factors. Now, for 1, the number of positive divisors or factors is only one i.e. 1 itself.
//So, number one is not a prime number.
//Note: 2 is the smallest number that satisfies the definition of prime numbers.
$temp1 = array();
$temp2 = array();
$a = [5,10,21,4,1,23,29,9,2,19,13,14,15,30,18,11,20,3,22,28,24,26,27,6,8,17];
$a_length = count($a);
$first = array();
$second = array();
for($i=2;$i<=100;$i++)
{
    $flag = 0;
    for($j=2;$j<=$i/2;$j++)
    {
        if($i%$j == 0)
        {
            $flag = 1;
            break;
        }
    }
    if($flag == 0)
    {
        echo $i."<br/>";
    }
}