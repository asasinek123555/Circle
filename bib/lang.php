<?php
function loadLang($lang_short)
{
	$lang_short=__DIR__.'/../lang/'.$lang_short.'.lang';
	//file_exists ( string $filename ) : bool
    //file ( string $filename [, int $flags = 0 [, resource $text ]] ) : array
	if(file_exists($lang_short))
	{
		return file($lang_short);
	}
	else
	{
		echo "0X0001".PHP_EOL;
		return "0X0001";
	}
}


?>