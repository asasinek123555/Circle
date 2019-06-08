<?php

function circle($radius)
{
	$radius=$radius/2;
	$n=2*($radius-1)+$radius+2;

	for($i=0;$i<$n;$i++)
	{
		$test=true;
		$test2=false;
		for($j=0;$j<$n;$j++)
		{
			$x=$i-($radius);
			$x=$x*$x;
			$y=$j-($radius);
			$y=$y*$y;
			if($x+$y-1<$radius*$radius)
			{
				$test=false;
				echo '**';
			}
			else
			{
				if($test==false) $test2=true;
				echo '  ';
			}
			if($test2) break;
		}
		echo PHP_EOL;
		if($test) break;
	}
}



?>