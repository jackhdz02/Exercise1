<?php
$counter=0;
for($num=2;$num<1000;$num++)
{
    if(($num%3==0)||($num%5==0))
    {
        $counter+=$num;
    }
}
echo $counter;
?>