<?php
function ABEncryption($faculty_id,$password)
{
	$hash_faculty_id=Encryptfunc($faculty_id);
	$key=md5($hash_faculty_id);
	if(strlen($key)>24)
	{
		$key=substr($key,0,24);
	}
	$input=$password;
	$encrypted_data = mcrypt_ecb (MCRYPT_3DES, $key, $input, MCRYPT_ENCRYPT);
	$hex_encrypted_data=bin2hex($encrypted_data);
	return $hex_encrypted_data;
}

function ABDecryption($username,$password)
{
	$hash_faculty_id=Encryptfunc($username);
	$key=md5($hash_faculty_id);
	if(strlen($key)>24)
	{
		$key=substr($key,0,24);
	}
	$input=$password;
	$bin_pwd=pack("H*" ,$password);
	$decrypted_pwd=mcrypt_decrypt(MCRYPT_3DES,$key ,$bin_pwd,"ecb");
	return $decrypted_pwd;
}

function Encryptfunc($faculty_id)
{
	$t=0;$ch=0;
	while($t<4)
	{
		$rem=$faculty_id%10;
		$ch+=($rem+48);
		$ch*=100;
		$faculty_id=(int)$faculty_id/10;
		$t++;
	}
	
	$ch=$ch/100;
	
	return $ch;
}

?>