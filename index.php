<?php
//this is how you print text in php
echo'hello world';
//this is how you store a vale in a variable
$myvar = 'some text i want to store in a variable';
//this is an example of the difference between single quotes and double quotes 

echo '<br>';
echo '$myvar';
echo '$<br>';
echo "$myvar";

//this is an example of php arrays
$myarray = array();
$myarray() = 'some value 1';
$myarray() = 'some value 2';
$myarray() = 'some value 3';

print_r($myarray);
//this is an example of an associative array and a nested array
$myAssoc = array('value1' => $myarray,  'value2' => $myarray);
print_r($myAssoc);
?>
