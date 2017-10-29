<?php
$contest = fopen("data.txt", "r");
$sum = 0;
for($i=0; $i<=12; $i++){
	$string = fgets($contest);
	$n = (int)$string;
	if(is_int ($n)){
		$sum = $sum + $n;
	}
}
echo "$sum";
