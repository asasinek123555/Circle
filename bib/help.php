<?php
	function checkhelp($i)
	{
		if(strtolower($i)=='help'||strtolower($i)=='-help'||strtolower($i)=='/help'||strtolower($i)=='--help'||strtolower($i)=='-h'||strtolower($i)=='/h') return true;
		else return false;
	}
	
	function write_help($text)
	{
			echo $text[3];
			echo $text[4];
			echo $text[5];
			echo $text[6];
	}
?>