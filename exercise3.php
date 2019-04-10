<?php
$numO=600851475143;
$factors[]=array(10000);
$higher=0;
for($num1=2;$num1<=$numO;$num1++)
{
    if($numO%$num1==0)
    {
        $numO=$numO/$num1;
        $factors[$num1]= $num1;
        echo $factors[$num1].', ';
        $heigher=$num1;
    }
}
echo 'El factor mayor es: '. $heigher;
?>