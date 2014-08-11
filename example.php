#!/usr/bin/env php
<?php
require('parser.php');


// create parser
$parser = new Parser(
	// start element handler
	function($name,$elementPath,$attribList) {

		echo('Element start: ' . $elementPath . "\n");

		if ($attribList) {
			echo("Attrib list:\n");
			var_dump($attribList);
		}
	},
	// element data handler
	function($elementPath,$data) {

		echo('Element data: ' . $data . "\n");
	}
);

// open XML file for reading
$fh = fopen('example.xml','r');
while (!feof($fh)) {
	// process file in really small chunks
	$parser->process(fread($fh,20));
}

// close file handle and XML parser
fclose($fh);
$parser->close();
