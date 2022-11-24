<?php
require "vendor/autoload.php";
$dbname = 'dct';
try {
 $m = new
MongoDB\Client("mongodb+srv://phoprono1:<password>@cluster0.mtbt1wv.mongodb.net/?retryWrites=true&w=majority");
 $db = $m->$dbname;
 // $db = $m->selectDB($dbname);
//echo "<p>Connected!<p>";
  echo "thanh cong";
}
catch(Exception $ex) {
 print $ex;
 header("location:../error.html");
}
?>