<?php
$n=76;
$p=$n;
while ($p>=1) {
	$p=$p/10;
	$i++;
}
$a= $n * $n;
$f= pow(10 , $i);
$b= $a%$f;
if ($n==$b){
echo ' da';
}
else{
echo " net";
}




?>