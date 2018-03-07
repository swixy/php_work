
<?php
$n=1000;
echo 'kolichestvo natyralnyh chisel= ',$n,'<br/>';
echo 'sootvetstvuet ysluviy: ','<br/>';




for ($i = 1; $i <=1000 ; $i++) 
	{
		$sum = 0;
		$b=0;
		$number="$i";
			for($m = 0; $m <= strlen($number); $m++)
				{
      				$sum = $sum + $number[$m];
      				$b=$number / $sum;
					}
					if (!is_float($b)){
      				$nat=$b;
      				echo ' ',$i;
      				
				}
			
	}
	
?>
