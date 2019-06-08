<?php
	include_once 'bib/lang.php';
	include_once 'bib/circle.php';
	include_once 'bib/help.php';
	
	//lading language
	if(isset($argv[2]))//not && becouse of error
	{
		if(checkhelp($argv[2])) //chack secound is help to mage <lang> <help> work
		{
			if(strlen($argv[1])==2) $lang=strtoupper($argv[1]);
			else $lang='PL';
		}
		else
		if(strlen($argv[2])==2) $lang=strtoupper($argv[2]);
		else $lang='PL';
	}
	else $lang='PL';
	$text=loadLang($lang);
	if(!is_array($text)) die();
	
	//chacking for help
	foreach($argv as $i)
	{
		if(checkhelp($i))
		{
			write_help($text);
			die();
		}
	}

	
	//chack for radius exist
	if(isset($argv[1]))//not && becouse of error
	{
		if(is_numeric($argv[1]))
		{
			$radius = $argv[1];
		}
		else
		{
			echo $text[1];
			echo "0X0003".PHP_EOL;
			die();
		}
	}
	else 
	{
		echo "0X0002".PHP_EOL;
		echo $text[0];
		die();
	}
	
	//making circle
	echo $text[2].PHP_EOL;
	circle($radius);
	die();
?>