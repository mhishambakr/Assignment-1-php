<?php
echo "Assignment 1";
echo "<hr/>";
// ===================================================================================================================

echo "1- Days translator"."</br>";

$day = "السبت";
if ($day == "الأحد" or $day == "الاحد"){
    echo "Sunday";
} elseif ($day == "الاثنين" or $day == "الإثنين"){
    echo "Monday";
} elseif ($day == "الثلاثاء"){
    echo "Tuesday";
} elseif ($day == "الاربعاء" or $day == "الأربعاء"){
    echo "Wednesday";
} elseif ($day == "الخميس"){
    echo "Thursday";
} elseif ($day == "الجمعة"){
    echo "Friday";
} elseif ($day == "السبت"){
    echo "Saturday";
} else{
    echo "Enter a real day in Arabic";
}
echo "<br/>";
echo "<hr/>";

// ===================================================================================================================

echo "2-Login Page</br>";

define('string', 'string'); // for the Warning: Use of undefined constant string - assumed 'string' (this will throw an Error in a future version of PHP)

$username = "tariq";
$password = "789";
if (gettype($username) && gettype($password) != string){
    echo "Enter a string";
} else {
    if (($username == "ahmed" && $password == "123") || ($username == "tariq" && $password == "789")){
        echo "username = ".$username."</br>"."password =".$password."</br>";
        
    } else{
        echo "wrong username or password";
    }
}
echo "<hr/>";
// ===================================================================================================================

echo "3-Tester</br>";

define('boolean', 'boolean');  // used for the Warning: Use of undefined constant boolean - assumed 'boolean' (this will throw an Error in a future version of PHP)
define('integer', 'integer');  // used for the Warning: Use of undefined constant integer - assumed 'integer' (this will throw an Error in a future version of PHP)
define('double', 'double');  // used for the Warning: Use of undefined constant double - assumed 'double' (this will throw an Error in a future version of PHP)

$test = 0.2;
if (gettype($test) == string){
    echo $test;
} elseif (gettype($test) == boolean){
    if ($test == TRUE){
        echo "YES";
    } else {
        echo "NO";
    }
} elseif (gettype($test) == integer){
    $test += 5;
    echo $test;
} elseif (gettype($test) == double){
    echo $test *= 7;
} else {
    echo "Error";
}
echo "<hr/>";
// ===================================================================================================================

?>