<?php

$fechauno = $argv[1];
$fechados = $argv[2];

$fechaaamostar = $fechauno;
while(strtotime($fechados) >= strtotime($fechauno))
{
	if(strtotime($fechados) != strtotime($fechaaamostar))
	{
	echo $fechaaamostar."\n";
	
	$fechaaamostar = date("d-m-Y", strtotime($fechaaamostar . " + 1 day"));
	}
	else
	{
	echo $fechaaamostar."\n";
	break;
	}
}