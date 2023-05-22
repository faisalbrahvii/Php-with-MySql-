<form action="practice.php" method="post">
<label for="">Name</label>
<input type="text" name="fname" id="fname"><br>
<label for="">lname</label>
<input type="text" name="lname" id="lname"><br>
<input type="submit">
</form>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "keyboard";

$conn=new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
    die("connection fail");
}
$fname=$_POST['fname'];
$lname=$_POST['lname'];

$sql="INSERT INTO `students` (`sr`, `fname`, `lname`) VALUES (NULL, '$fname', '$lname')";


if($conn->query($sql)==true){
     echo "new record added";
    }
    else{
        echo "error";        
}
$conn->close();
?>