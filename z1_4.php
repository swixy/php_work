<?php
for ($k = 9999; $k >= 1000; $k--) 
{
	$ybyvanie=0;
	$number="$k";
	for($l = 0; $l <= strlen($number); $l++) {
	
		if ($number[$l] > $number[$l+1])  {
	     $ybyvanie++;
	    	}
	}
	if ((($ybyvanie>3) and (($k % 2) == 0))){
	echo ' ',$k;
	}
}
echo ' ',$ybyvanie;
?>