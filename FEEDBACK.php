<?php
$servername="localhost";
$username="root";
$password="";
$database_name="db_contact";
// database connection code
 //$con = mysqli_connect($localhost, $username, $password, $database_name);
$con = mysqli_connect('localhost', 'root', '','papillonsarees');
if(!$con)
{
die("Connection Failed:" .mysqli_connect_error());
}
// get the post records
if(isset($_POST['submit']))
{
$firstName = $_POST['firstName'];
$mobileNo = $_POST['mobileNo'];
$message = $_POST['message'];

// database insert SQL code
$sql_query = "INSERT INTO `feedbacktable` (firstName, mobileNo, message) VALUES ('$firstName', '$mobileNo', '$message')";

// insert in database
if( mysqli_query($con, $sql_query))
{
echo "Contact Records Inserted";
}

else
{
echo "Are you a genuine visitor?";

}
}

?>