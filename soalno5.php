<?php

function sort_array($abjad__)
{
	$arrayUtama= array();
	for ($i=0; $i < count($abjad__); $i++) { 
		asort($abjad__[$i]);
		$arrayUtama[$i] = $abjad__[$i]; 
	}

	return $arrayUtama;
}

$data = array(
	array("g","h","i","j"),
	array("a","c","b","e","d"),
	array("g","e","f")
);
print_r(sort_array($data));
?>
