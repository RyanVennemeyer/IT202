<!DOCTYPE html>
<html>
    <head>

    </head>
<body>

<h1>PHP Connect TEST</h1>
<?php
//Makes DB connection
$servername = "sql1.njit.edu";
$username = "rv356";
$password = "password";
$dbname = "rv356";
$con = mysqli_connect($servername,$username,$password,$dbname);
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
else
 {
echo "CONNECTED ";
}


?>
<form method="get" action ="https://web.njit.edu/~rv356/IT202HW11/IT202HW11part2/">
Student ID <input type="text" name="StudentID" placeholder="Enter ID" Required>
<br>
<input Type = "submit">
</form>

<?php 
session_start();

$_SESSION[ 'StudentID'] = $ans;
$ans = $_POST["StudentID"]; 

$sql = "SELECT IT202Student.StudentID
FROM IT202Student
WHERE EXISTS (IT202Student.StudentID =$ans);";

?>


</body>
</html>