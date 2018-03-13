
<?php
echo 'десять парных простых числ: <br/>';
for ($i =1; $i <=100; $i++) 
	{
		for ($j =1; $j <=100; $j++) 	
			{   
				if($kol == 10){
					break;
				}
				$k=$i-$j;
				if ($i-$j==2)
					{
					  $kol=$kol+1;
                      echo ' ',$i,' ',$j,' <br/>';
                      break;
					}
				
			}
	}
?>