<?php
	$index=0;
	for($i=1;$i<=50;$i++){
		$j=$i;
		$prima=0;
		while($j>0 && $prima<=2){
			if($i%$j==0){
				$prima++;
			}
			$j--;
		}
		if($prima==2){
			$bilanganprima[$index]=$i;
			$index++;
		}
	}
	echo "Bilangan prima dari 1 sampai 50 adalah [$bilanganprima[0]";
	for($i=1;$i<$index;$i++){
		echo ", $bilanganprima[$i]";
	}
	echo "]";
?>