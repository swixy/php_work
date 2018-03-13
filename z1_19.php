<?php
$n=18;
$m=48;
echo " первое число: ",$n,"<br/>";
echo " второе число: ",$m,"<br/>";
		for ($k = 1; $k <=1000; $k++) 
			{
			$krat1=$k / $n;
			$krat2=$k / $m;
			   if (($k % $n==0) and ($k % $m==0))
				    {
                  if ($krat1=$krat2)
                  	{
                      echo $k,' ';
                  		
                      if($k>$min)
                  		{
                        $nok=$min;
                        break;
                  		}
                      else
                        $nok=$k;
                  	} 
            }
            $min=$k;	
			}
	echo 'нименьшее общее кратоное (НОK): ', $nok;
?>