<?php

$con = mysqli_connect("localhost","root","Green1408","greenavia");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  echo "Error: Unable to connect to MySQL." . PHP_EOL;
  echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
  echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
  exit();
}

// $qalaqebis_result = mysqli_query($con, "SELECT DISTINCT departure_city FROM flights");

// $qalaqebis_array = mysqli_fetch_all($qalaqebis_result);

// // echo var_dump($qalaqebis_array);

// foreach($qalaqebis_array as $qalaqi){
//   echo $qalaqi[key($qalaqebis_array)];
//   echo "<br/>";
// }

?>


