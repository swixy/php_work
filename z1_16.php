
<?php
$n=1;
$m=500;
echo " диапазон чисел начинается с ",$n,"<br/>";
echo " заканчивается по ",$m,"<br/>";
echo " совершенные числа: <br/>";
for ($i =$n; $i<=$m ; $i++) 
	{ 
	$t=$i; 
	$sum = 0;
		for ($k = 1; $k<=$t-1 ; $k++) 
			{
			$sum_del=$t / $k;
			if ($t % $k==0)
				{
					$sum=$sum+$k;
					if($sum == $t)
					{
						echo $t,' ';
						break;	
					}
				}		
			}
	}
?>