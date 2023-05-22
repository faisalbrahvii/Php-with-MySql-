<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">
        <label for="">Student  Name</label>
        <input type="text" name="name" id="name"><br>
        <label for="">Student  Age</label>
        <input type="text" name="age" id="age"><br>
        <input type="submit" >
    </form>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "school";
    $conn=new mysqli($servername,$username,$password,$dbname);
    if($conn->connect_error){
        die("connection fail");
    }
    $name=$_POST['name'];
    $age=$_POST['age'];
    
    $sql="INSERT INTO `student`(`id`, `name`, `age`) VALUES (null,'$name','$age')";
    
    
    if($conn->query($sql)==true){
         echo "new record added";
        }
        else{
            echo "error";        
    }
    $conn->close();
    ?>
    ?>
</body>
</html>