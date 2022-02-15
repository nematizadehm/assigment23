<?php
ini_set('display_errors',0);
 
$n1 = 45;
$n2 = 37;
$operator= '+';

if($operator=="+")
{
$res= $n1+$n2;
}
if($operator=="-")
{
$res= $n1-$n2;
}
if($operator=="*")
{
$res =$n1*$n2;
}
if($operator=="/")
{
$res= $n1/$n2;
}
echo $res ;
?>