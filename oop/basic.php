<?php
class car{
  // properties;
  public $Carname;
  public $CarColor;

 public function setName($c,$color){
    echo $this->Carname = $c;
    echo $this->CarColor = $color;

  }
}

$objCar = new car();
$objCar->setName("BMW","black");




// class car {
//     // Properties
//     public $Cname;
//     public $ccolor;
  
//     // Methods
//     function set_name($name) {
//       $this->Cname = $name;
//     }
//     function get_name() {
//       return $this->Cname;
//     }
//   }
  
//   $obj1 = new car();
//   $obj2 = new car();
 
//   $obj1->set_name('Civic');
//   $obj2->set_name('audi');


  
//   echo $obj1->get_name();
//   echo '<br>';
//   echo $obj2->get_name();

  

?>