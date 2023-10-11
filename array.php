<?php
// associative array
// $userData  = array(
//     'id' => 12,
//     'name' => 'Mursaleen',
//     'age' => 20,
//     'city' => 'karachi'

// );
// echo "<table border='2'>";
// foreach ($userData as $k => $val) {
//    echo '<tr> <td>' . $k . '</td><td> ' . $val  .'</td></tr>';
// }
// echo "</table>";

$studentData = [
    ["Mursaleen" , 20,"NN",1000],
    ["Moeez" , 23,"NK", 1000],
    ["Ubaid" , 22,"NN 2", 2000],
    ["Hammad" , 25,"NN", 5000],
    ["Muzammil" , 18,"NN 2",10000]
];

echo "<table border='3'>";

for ($row=0; $row < 5 ; $row++) {
    echo "<tr>"; 
    for ($col=0; $col < 4 ; $col++) { 
    echo  '<td>' . $studentData[$row][$col] . '</td>' ;
    }
    echo "</tr>"; 

}
echo "</table>";








// echo '<table border="1">';
// for ($row=0; $row < 4; $row++) {
//     echo '<tr>'; 
//     for($col = 0 ; $col < 4 ; $col++ ){

//         echo '<td>' . $studentdata[$row][$col] . '</td>';
//     }
//     // echo "<>";
//     echo '</tr>'; 

// }

// echo '</table>';


// echo "<pre>";
// print_r($studentData[4][0]);

// echo "</pre>";



// for ($i=0; $i < 1  ; $i++) { 
// echo  $userData[$i] ;
// }











// foreach($stddata as $keys => $val){
//     echo $keys. ":" . $val . '<br>';
// }



// print_r($userData);

// echo "<pre>";
// print_r("Name: " . $userData['name'] . "<br>Age: " . $userData['age']);
// echo "</pre>";

// // index array
// $x = array("Mursaleen","Moeez","Ubaid");

// echo "<pre>";
// print_r($x);
// echo "</pre>";






















// $userdata = array(
//     'id' => '101',
//     'name' => 'ali'
// );

// multi dimnsional array
// $studentdata = [
//     [1,"aliya","HTML",10000],
//     [2,"navera","HTML CC",1000],
//     [3,"areeba","JS",5000],
//     [4,"iqra","HTML4",6000],

// ];

// echo $studentdata[0][1] . '<br>';





// echo '<table border="1">';
// for ($row=0; $row < 4; $row++) {
//     echo '<tr>'; 
//     for($col = 0 ; $col < 4 ; $col++ ){

//         echo '<td>' . $studentdata[$row][$col] . '</td>';
//     }
//     // echo "<>";
//     echo '</tr>'; 

// }

// echo '</table>';






// $stddata = array(
//     "name" => "naveera",
//     "age" => 1234
// );


// echo $stddata["name"];

// foreach($stddata as $keys => $val){
//     echo $keys. ":" . $val . '<br>';
// }

// for ($i=0; $i < 3 ; $i++) { 
// echo '<li>' . $stddata[$i] . '</li>';

// }



// $stddata= array("name","age",123);
// $stddata = [1,"name","class12345"];
// // echo $stddata[1];
// // echo '<ul>';

// echo '</ul>';


// Indexed array

// $color = array("red", "grreen","yellow");






// echo $color[0];

// 
// echo "<pre>";
// print_r($color);
// echo "</pre>";




// $colors = ["name",123,"ali"];


// echo '<ul>';
// for ($i=0; $i < 3; $i++) { 
//     echo '<li>' . $colors[$i]  . '</li>';
// }
// echo '</ul>'

// associative array




// $studentdetail = [
//     "name" => "ali",
//     "age" => 123,
//     "class" => "aptech"
// ];
// echo $studentdetail["name"] . '<br>';
// with for each loop
// loop foreach
// $color = array("red", "grreen","yellow");
// $color = ["name" => "red" , "num" => 0321];

// foreach($color as $values){
//     echo $values;
// }

// foreach($color as $key => $values){
//     echo $key . '= '. $values;
// }


// print_r($studentdata)

// for ($i=0; $i < 20 ; $i++) { 
//     # code...
//     for ($j=0; $j < $i; $j++) { 
//         # code...
//         echo '*' ;
//     }
//     echo '<br>';
// }

?>