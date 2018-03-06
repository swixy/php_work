
<?php
$chislo=14;
echo 'chisla = ';

for ($i = 1000; $i <= 9999; $i++) 
	{
		$sum = 0;
		$number="$i";
			for($m = 0; $m <= strlen($number); $m++)
				{
      				$sum = $sum + $number[$m];
      				if($sum <> $chislo)
      					{
							echo '';
						}
							else 
							{
								echo $number, ' ';
								break;	
				     		}
			
				}
	}
	
?>


