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
$Name = $_POST['Name'];
$Email = $_POST['Email'];
$PhoneNumber = $_POST['PhoneNumber'];
$Query = $_POST['Query'];

// database insert SQL code
$sql_query = "INSERT INTO `contactinfo` (Name, Email, PhoneNumber, Query) VALUES ('$Name', '$Email', '$PhoneNumber', '$Query')";

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