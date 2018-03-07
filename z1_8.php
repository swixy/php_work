<?php
for ($i = 1000; $i <= 9999; $i++) 
{
	$s=$i;
			$pervoe=$s/1000%10;
			$vtoroe=$s/100%10;
			$tritie=$s/10%10;
			$chetvertoe=$s%10; 
			if
				(($pervoe!==$vtoroe and $pervoe!==$tritie and $pervoe!==$chetvertoe)  and
				($vtoroe !==$pervoe and $vtoroe!==$tritie and  $vtoroe!==$chetvertoe)    and
				($tritie!==$vtoroe and $tritie!==$vtoroe and $tritie!==$chetvertoe)     and		
				($chetvertoe!==$pervoe and $chetvertoe!==$vtoroe and $chetvertoe!==$tritie ))
			{
				echo ' ',$i;
			}
	
}

?>