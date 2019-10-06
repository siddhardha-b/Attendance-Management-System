<?php
function getDat($raw)
{
	$det=array();$i=0;
	$tok = strtok($raw, ",");
	while ($tok !== false) 
	{
    	$det[$i++]=$tok;
    	$tok = strtok(",");
	}
	return $det;
}


function addComma($class)

{
	$first=substr_replace($class,",",1);
	$substr[0]=$class[1];
	$substr[1]=$class[2];
	$substr1=implode($substr);
	$i=1;
	 while(!isBranch($substr1)&&$i<=4)
	{

		for($x=1,$y=0;$x<=$i;$x++,$y++)
		{
			$substr[$y]=$class[$x];
			$substr1=implode($substr);
		}
		$i++;
	}
	$not_second=$substr1.$class[$i++];
	$second=$not_second.",";
	$third=substr($class,$i,strlen($class));
	$final=$first.$second.$third;
	return $final;
}


function isBranch1($branch)
{
	$query="SELECT * FROM branch_det WHERE branch_id='$branch' LIMIT 1";
	$result=mysql_query($query);
	if($result)
	{
		if(mysql_num_rows($result)>0)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	else
	{
		return false;
	}
}


?>