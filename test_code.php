<?php
	$array_1 = array("so mot", "so hai", "so ba", "so bon", "so nam", "so sau");
	$array_2 = array("so bay", "so tam", "so chin", "so muoi", "so muoi mot", "so muoi hai");
	$array_3 = array_merge($array_1,$array_2);
	shuffle($array_3);
	foreach($array_3 as $array){
		echo $array;
	}
?>