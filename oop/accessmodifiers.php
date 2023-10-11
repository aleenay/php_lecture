<!-- public  -->
<?php  
// class car 
//     {  
//         public $name ;
//         function __construct($n){
//             $this->name = $n;
        
//         }
//      function get_name()  
//         {  
//             echo $this->name ;
//         }  
//     }  
//     class car2 extends car  
//     {  
//         function fun2()  
//         {  
//             echo "batch 2207G1";  
//         }  
//     }  
//     $objCar2 = new car2("Civic");  
//  $objCar2->get_name();  

?>


<!-- private -->
<?php
// class car 
// {  
//     private $name ;
//     function __construct($n){
//         $this->name = $n;
    
//     }
//  private function get_name()  
//     {  
//         echo $this->name ;
//     }  
// }  
// class car2 extends car  
// {  
//     function fun2()  
//     {  
//        $this->get_name();
//         echo "batch 2207G1";  
//     }  
// }  
// $objCar2 = new car2("city");  
// $objCar2->fun2();

?>



<!-- protected -->
<?php
class car 
{  
    protected $name ;
    function __construct($n){
        $this->name = $n;
    
    }
 protected function get_name()  
    {  
        echo $this->name ;
    }  
}  
class car2 extends car  
{  
    function fun2()  
    {  
       $this->get_name();
        echo "batch 2207G1";  
    }  
}  
$objCar2 = new car2("city");  
$objCar2->fun2();





?>