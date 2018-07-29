<?php
$xml=simplexml_load_file("note.xml");
var_dump($xml);
echo $xml->to . "<br>";
echo $xml->from . "<br>";
echo $xml->heading . "<br>";
echo $xml->body;
?>