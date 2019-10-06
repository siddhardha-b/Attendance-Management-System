<?php
function generateRandomNumber()
{
	$a=rand(1000000,9999999);
	return $a;
}

function generatePresentee()
{
	$date=date("j");
	$dup_date=$date;
	if($dup_date>9)
	{
		$rem=(int)$dup_date%10;
		$dup_date=(int)$dup_date/10;
		$sum_date=$rem+$dup_date;
	}
	else
		$sum_date=$date;
	if($sum_date%2==0)
		$sum_date_even=true;
	else
		$sum_date_even=false;
		$a=generateRandomNumber();
	$sum_rand_digits=EncryptFunc($a);
		if($sum_date_even)
		{
			if(is_Even($sum_rand_digits))
			{
				return ($a*10)+addEvenDigit();
			}
			else
			{
				return ($a*10)+addOddDigit();
			}	
		}
		else
		{
			if(is_Even($sum_rand_digits))
			{
				return ($a*10)+addOddDigit();
			}
			else
			{
				return ($a*10)+addEvenDigit();
			}
		}
}

function generateAbsentee()
{
	$date=date("j");
	$dup_date=$date;
	if($dup_date>9)
	{
		$rem=(int)$dup_date%10;
		$dup_date=(int)$dup_date/10;
		$sum_date=$rem+$dup_date;
	}
	else
		$sum_date=$date;
	if($sum_date%2==0)
		$sum_date_even=true;
	else
		$sum_date_even=false;
		$a=generateRandomNumber();
	$sum_rand_digits=EncryptFunc($a);
		if($sum_date_even)
		{
			if(is_Even($sum_rand_digits))
			{
				return ($a*10)+addOddDigit();
			}
			else
			{
				return ($a*10)+addEvenDigit();
			}
		}
		else
		{
			if(is_Even($sum_rand_digits))
			{
				return ($a*10)+addEvenDigit();
			}
			else
			{
				return ($a*10)+addOddDigit();
			}
		}
}






function is_Even($RandomDigitSum)
	{
		if($RandomDigitSum%2==0)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	function EncryptFunc($RandomDigit)
	{
		$dup_digit=$RandomDigit;
		$even_sum=0;
		$odd_sum=0;
		$result=0;
		while($dup_digit!=0)
		{
			
			$rem=$dup_digit%10;
			if($rem%2==0)
			{
				$even_sum+=$rem;
			}
			else
			{
				$odd_sum+=$rem;
			}
			$dup_digit=(int)$dup_digit/10;
		}
		if($odd_sum!=0)
			$result=(int)$even_sum%$odd_sum;
		return $result;
	}
	function addEvenDigit()
	{
		$x=rand(0,9);
		if($x%2==0)
		{
			return $x;
		}
		else
		{
			return ($x-1);
		}
	}
	function addOddDigit()
	{
		$y=rand(0,9);
		if($y%2==0)
		{
			return $y+1;
		}
		else
		{
			return $y;
		}
	}
	
	
	function decrypt($encrypted_value)
	{
		$date=date("j");
		$dup_date=$date;
		if($dup_date>9)
		{
			$rem=(int)$dup_date%10;
			$dup_date=(int)$dup_date/10;
			$sum_date=$rem+$dup_date;
		}
		else
			$sum_date=$date;
		$dup_digit=$encrypted_value;
		$rem=(int)$dup_digit%10;
		$dup_digit=(int)$dup_digit/10;
		$Digit_Encrypt_Sum=EncryptFunc($dup_digit);
		$result=$Digit_Encrypt_Sum+$rem+$sum_date;
		if($result%2==0)
		{
			return "P";
		}
		else
		{
			return "A";
		}
	}
	function decrypt1($encrypted_value,$date)
	{
		//$date=date("j");
		$date=date('j', strtotime("$date"));
		$dup_date=$date;
		if($dup_date>9)
		{
			$rem=(int)$dup_date%10;
			$dup_date=(int)$dup_date/10;
			$sum_date=$rem+$dup_date;
		}
		else
			$sum_date=$date;
		$dup_digit=$encrypted_value;
		$rem=(int)$dup_digit%10;
		$dup_digit=(int)$dup_digit/10;
		$Digit_Encrypt_Sum=EncryptFunc($dup_digit);
		$result=$Digit_Encrypt_Sum+$rem+$sum_date;
		if($result%2==0)
		{
			return "P";
		}
		else
		{
			return "A";
		}
	}
	
function generatePresentee1($date)
{
	$dup_date=$date;
	if($dup_date>9)
	{
		$rem=(int)$dup_date%10;
		$dup_date=(int)$dup_date/10;
		$sum_date=$rem+$dup_date;
	}
	else
		$sum_date=$date;
	if($sum_date%2==0)
		$sum_date_even=true;
	else
		$sum_date_even=false;
		$a=generateRandomNumber();
	$sum_rand_digits=EncryptFunc($a);
		if($sum_date_even)
		{
			if(is_Even($sum_rand_digits))
			{
				return ($a*10)+addEvenDigit();
			}
			else
			{
				return ($a*10)+addOddDigit();
			}	
		}
		else
		{
			if(is_Even($sum_rand_digits))
			{
				return ($a*10)+addOddDigit();
			}
			else
			{
				return ($a*10)+addEvenDigit();
			}
		}
}

function generateAbsentee1($date)
{
	$dup_date=$date;
	if($dup_date>9)
	{
		$rem=(int)$dup_date%10;
		$dup_date=(int)$dup_date/10;
		$sum_date=$rem+$dup_date;
	}
	else
		$sum_date=$date;
	if($sum_date%2==0)
		$sum_date_even=true;
	else
		$sum_date_even=false;
		$a=generateRandomNumber();
	$sum_rand_digits=EncryptFunc($a);
		if($sum_date_even)
		{
			if(is_Even($sum_rand_digits))
			{
				return ($a*10)+addOddDigit();
			}
			else
			{
				return ($a*10)+addEvenDigit();
			}
		}
		else
		{
			if(is_Even($sum_rand_digits))
			{
				return ($a*10)+addEvenDigit();
			}
			else
			{
				return ($a*10)+addOddDigit();
			}
		}
}





	
	
?>