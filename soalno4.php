<?php 
function count_Vowels($string)
{
	preg_match_all('/[aiueo]/i', $string, $matches);
	return count($matches[0]);
}
//Test
print_r(count_Vowels('programmer'));


 ?>