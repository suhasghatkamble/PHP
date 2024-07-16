<?php
$num=4567;
$s=0;
#find he sum of digits of the number
while($num>0){
    $d=$num%10;
    $num=$num/10;
    $s=$s+$d;
}
echo "addition of digits : $s <br>";
$num=234;
do{
    print "$num<br>";
    $num++;
}while($num<240);
?>