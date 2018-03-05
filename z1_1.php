
<?php
$number = "154791";
$kol=0;
for($i = 0; $i <= strlen($number); $i++) {
	if ($number[$i]>5) {
     $kol++;
    	}
}
echo 'Kolichecstvo chisel= ', $kol;
?>


