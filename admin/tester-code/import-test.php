<?php

//import.php

if(isset($_POST["student_name"]))
{
 $connect = new PDO("localhost", "root", "","uprs");
 $student_name = $_POST["student_name"];
 $student_phone = $_POST["student_phone"];
 for($count = 0; $count < count($student_name); $count++)
 {
  $query .= "
  INSERT INTO sewa_cimura(student_name, student_phone) 
  VALUES ('".$student_name[$count]."', '".$student_phone[$count]."');
  
  ";
 }
 $statement = $connect->prepare($query);
 $statement->execute();
}

?>