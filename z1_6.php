<?php
for ($i = 1000; $i <= 9999; $i++) 
{
	$s=$i;
			$pervoe=$s/1000%10;
			$vtoroe=$s/100%10;
			$tritie=$s/10%10;
			$chetvertoe=$s%10; 
			if
				(($pervoe==0 || $vtoroe==2 || $tritie==3 || $chetvertoe==7)   and 
				($pervoe==2 || $vtoroe==3 || $tritie==7 || $chetvertoe==0)    and
				($pervoe==3 || $vtoroe==7 || $tritie==0 || $chetvertoe==2)    and		
				($pervoe==7 || $vtoroe==0 || $tritie==2 || $chetvertoe==3))
			{
				echo ' ',$i;
			}
	
}

?>