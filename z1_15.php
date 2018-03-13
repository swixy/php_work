<?php
$n=8;
echo "Число: ",$n,"<br/>";
	$kol = 0;
		for ($k = 1; $k <=$n ; $k++) 
			{
			if ($n % $k==0)
				{
					$kol=$kol+1;
				}
			}	
	echo ' Количество делителей: ', $kol;
?>
