<?php
$n=24;
$m=54;
echo " первое число: ",$n,"<br/>";
echo " второе число: ",$m,"<br/>";
	$sum = 0;
		for ($k = 1; $k <=$n ; $k++) 
			{
			$del1=$n / $k;
			$del2=$m / $k;
			if (($n % $k==0) and ($m % $k==0))
				{
         
                  if ($del1=$del2)
                  	{
                  		if($k>$max)
                  		{
                          $nok=$k;
                  		}
                  		
                  	} 
                }
            $max=$k;	
			}
	echo 'наибольший общий делитель (НОД): ', $nok;
?>