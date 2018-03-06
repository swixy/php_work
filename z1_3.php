<?php
$number = "12345678";
$k=0;
for($i = 0; $i <= strlen($number); $i++) {
	//echo $number[$i],' ';
	if ($number[$i]>$number[$i+1]) {
     $k++;
    	}
}
if ($k>1){
echo ' ne obrazuyt';
}
else{
echo ' obrazuyt';	
}
?>