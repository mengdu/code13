<?php
	include"code13.class.php";
	//$c=new code13("TEST8052",200,80);
	if(isset($_GET["code"]))
	{
	   $c=new code13(strtoupper($_GET["code"]),200,80);
		$c->showCodeImage();
	//echo strtoupper($_GET["code"]);
	}
	//echo strtoupper($_GET["code"]);
	//echo "<pre>";
	//var_dump($c->showCodeImage());
	//echo "</pre>";
	//$c="TEST8052";
	/*$c=array("T","E","S","1");$k=array_search("S",$c);
	echo $k;*/
	
	
?>