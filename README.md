# PHP XML Expat parser
A class to wrap the Expat [XML Parser](http://docs.php.net/manual/en/book.xml.php) for PHP 5.4+, simplifying the parsing of forward only/streaming XML documents for reading.

Class accepts two anonymous functions, one called at the start of an XML element passing any attributes the second called for an elements data/text content. Each function will be passed the full element path, used to determine at what position in the document the parser is current at.

## Example
```sh
$ ./example.php
Element start: ROOT
Element start: ROOT/FIRST-NODE
Attrib list:
array(2) {
  ["ATTRIB1"]=>
  string(5) "value"
  ["ATTRIB2"]=>
  string(5) "value"
}
Element start: ROOT/FIRST-NODE/SECOND-NODE
Element data: second node value
Element start: ROOT/FIRST-NODE/THIRD-NODE
Element start: ROOT/FIRST-NODE/THIRD-NODE/FOURTH-NODE
Element data: fourth node value
Element start: ROOT/FIRST-NODE/THIRD-NODE/FIFTH-NODE
Attrib list:
array(1) {
  ["ATTRIB3"]=>
  string(5) "value"
}
Element data: fifth node value
```
