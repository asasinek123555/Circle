<?php

function white($radius)
{
	for($i=0;$i<$radius;$i++)
	{
		echo ' ';
	}
}

function single($radius)
{
	white($radius);
	echo '*';
	white($radius);
}

function circle($radius)
{
	$j=0;
	single($radius);
	echo PHP_EOL;
	for($i=round(2*($radius-1)+2);$i>0;$i-=2)
	{
		$j++;
		if($i>$radius)
		{
			white($radius-$j);
			echo '*';
			white($radius-$j);
			echo '*';
			white($radius-$j);
			echo PHP_EOL;
		}
		else
		{
			white($radius-round($i/2));
			echo '*';
			white($radius-round($i/2));
			echo '*';
			white($radius-round($i/2));
			echo PHP_EOL;
		}
	}
	if(!$radius==0)single($radius);
}



?>