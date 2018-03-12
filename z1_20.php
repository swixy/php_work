
<?php
$n=7;
$m=17;
echo " диапазон чисел начинается с ",$n,"<br/>";
echo " заканчивается по ",$m,"<br/>";
for ($i =$n; $i <=$m ; $i++) 
	{ 
	$t=$i; 
	$sum = 0;
		for ($k = 1; $k <=$t ; $k++) 
			{
			$sum_del=$t / $k;
			if ($t % $k==0)
				{
					$sum=$sum+$sum_del;
					if($sum>$max)
					{
                    	$max_sum = $sum;
                    	$chislo=$t;
					}
					else
						 $max_sum=$max;
					}
			}
    $max=$sum;
  // echo $sum,' ';	
}
	echo ' Число с наибольшей суммой делителей = ',$chislo,'<br/> Сумма делителей:', $max_sum, ' ';
?>