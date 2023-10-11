<!-- // pg : 55 -->
<?php 

$batch_std_name = "abdullah farooq";
echo strlen($batch_std_name)  . '<br>';
echo str_word_count($batch_std_name) . '<br>';
echo strrev('hey') . '<br>';
echo strpos($batch_std_name,'l') . '<br>';
echo str_replace($batch_std_name,"Abdul",$batch_std_name) . '<br>';
echo ucwords($batch_std_name);







// $name = "aleena"; 
// echo strlen($name) . '<br>'; //strlen return the length of the string
// echo str_word_count("hello world")  ; //str_word_count return the word count num
// echo '<br>'. strrev("hey"); //string reverse
// echo '<br>' . strpos($name,'e'); // it return the string position first match 
// echo '<br>' . str_replace($name,"anila",$name); // first parameter word search thn replace word , thn which sentence
// echo '<br>' . ucwords($name); //first letter of the words in a string to uppercase

?>