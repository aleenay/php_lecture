<!-- // __construct function call automatically when initialize  -->

<?php
class person{
public $name;
function __construct($n){
    $this->name = $n;

}
function get_name(){
    echo $this->name;
}
}
$objPerson = new person("working");
$objPerson2 = new person("working 2");

$objPerson->get_name();
$objPerson2->get_name();

// echo $objPerson->name = "abc";



?>