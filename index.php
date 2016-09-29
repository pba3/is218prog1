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
$myarray[] = 'some value 1';
$myarray[] = 'some value 2';
$myarray[] = 'some value 3';

print_r($myarray);
//this is an example of an associative array and a nested array
$myAssoc = array('value1' => $myarray,  'value2' => $myarray);
print_r($myAssoc);
//this is how you print r access array by naming the key y9ou want to access
print_r{$myAssoc[ 'value1']};
//this is how you define a class in php
class myclass {
//three different property with scopes
  public $myPublic;
  private $myPrivate;
  protected $myProtected;

  public function __construct {} {
  // this is the internal the arrow point to a property for method to 
    $this ->myPublic =1;
    $this ->myPrivate =2;
    $this ->myProtected =3;
    //this is how you call amethod inside the object and pass a variable or value
    
    public function sayHello($name) {
    	echo 'Helo' . $name . "<br>";

    }
    }
//this is how you instantiate
?$obj=new myclass;
print_r{$obj};
?>
