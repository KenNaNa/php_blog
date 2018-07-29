<?php
	$xml=simplexml_load_file("note.xml");
	var_dump($xml);
	echo $xml->getName() . "<br>";

	foreach($xml->children() as $child){
 		echo $child->getName() . ": " . $child . "<br>";
 	}
?>