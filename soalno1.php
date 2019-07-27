<?php 



$mahasiswa = [
	[
		"name" => "Nur Muhammad Thariq",
		"age" => "20",
		"address" => "Kav Batan Parakan Pamulang 2 Tangerang Selatan",
		"Hobbies" => [
			"coding",
			"mengaji",
			"Sepak Bola"
		],
		"is_married" => false,
		"list_school" => [
			"Name" => "sasmita jaya",
			"year in" => 2013,
			"year_out" => 2016,
			"major"	  => "Multimedia"
		],
		"skils" => [
			["skils_name" => "Web Developer(codeigniter)","level" => "Beginner"],
			["skils_name" => "Android programming","level" => "Beginner"],
		],
		"Interest_in_coding" => true 
	]

];
 
function biodata($biodata) {
 	$data = json_encode($biodata);
 	echo $data;
	return $data;
 }

biodata($mahasiswa)


 ?>