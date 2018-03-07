
<?php
$n=25;
echo 'chislo= ',$n,'<br/>';
for ($i = 2; $i<sqrt($n); $i++) {
    if ($n % $i == 0) {
        echo " ne prostoe ";
        break;
    }
    else{
    	echo "prostoe ";
    	break;
    }
}
	
?>

