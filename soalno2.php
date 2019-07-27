<?php 
function is_username_valid($nama)
{
	$nama_regex = '/^[a-zA-Z]([a-zA-Z0-9_-]){5,9}/';
	if (preg_match($nama_regex, $nama)) {
		echo 'true<br>';
	} else {
		echo 'false<br>';
	}
}

function is_password_valid($password)
{
	$password_regex = '/^([a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[#$^+=!*()@%&]).{8,}$/';
	if (preg_match($password_regex, $password)) {
		echo 'true<br>';
	} else {
		echo 'false<br>';
	}
}

is_username_valid('Xruta1');
is_username_valid('1Diana');
is_password_valid('passW0rd=');
is_password_valid('C0d3YourFuture!#');
 ?>