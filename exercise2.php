<?php
$num1=1;
$num2=0;
$suma=0;
$total=0;

for($count1=0;$count1<=33;$count1++)
{
    $suma=$num1+$num2;
    $num1=$num2;
    $num2=$suma;
    echo $suma.',';
    if($num2%2==0)
    {
        $total+=$suma;
    }
}
echo "El total es:" . $total;
?>