<?php
$std_info=array("name"=>"Ali","Batch Code"=>"APtech nn","Course"=>"ADSE");
print_r(array_change_key_case($std_info,CASE_UPPER));
echo '<br>';

print_r(array_count_values($std_info));
echo '<br>';
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          
?>


<?php
$a = array(
  array(
    'id' => 5698,
    'first_name' => 'ALi',
    'last_name' => 'Ahmed',
  ),
  array(
    'id' => 4767,
    'first_name' => 'Muhammad',
    'last_name' => 'Rizwan',
  ),
  array(
    'id' => 3809,
    'first_name' => 'Bilal',
    'last_name' => 'khan',
  )
);

$last_names = array_column($a, 'last_name');
print_r($last_names) ;
echo '<br>';
?>

<?php
$fname=array("Rafay","Huzaifa","Sarim");
$age=array("35","37","43");

$c=array_combine($fname,$age);
print_r($c );
echo '<br>';

?>

<?php
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow","e","white");
$a2=array("e"=>"red","f"=>"green","g"=>"blue");

$result=array_diff($a1,$a2);
print_r($result);
echo '<br>';

?>