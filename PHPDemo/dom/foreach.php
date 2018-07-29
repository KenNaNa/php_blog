<?php
	$xmlDoc = new DOMDocument();
	$xmlDoc->load("note.xml");

	$x = $xmlDoc->documentElement;
	var_dump($x);
	echo "<br/>";
	foreach ($x->childNodes AS $item){
	 	print $item->nodeName . " = " . $item->nodeValue . "<br>";
	}
?>