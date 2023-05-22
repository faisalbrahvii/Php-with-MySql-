<?php
include ("connection.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form action="" method="post">
        
                <div class="form-group mb-3">
                    <label for="">name</label>
                    <input type="text" name="name" id="" class="form-control" placeholder="">
                </div>
                <div class="form-group mb-3">
                    <label for="">email</label>
                    <input type="text" name="email" id="" class="form-control" placeholder="">
                </div>
                <div class="form-group mb-3">
                    <label for="">salary</label>
                    <input type="number" name="salary" id="" class="form-control" placeholder="">
                </div>
                
               
               <button type="submit" name="ins">insert</button>
        </form>
    </div>
    <?php
    if(isset($_POST['ins'])){
        // $id = $_POST['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $salary = $_POST['salary'];
        $query = $pdo->prepare("insert into faculty (name ,email,salary) value (:name,:email,:salary) ");
        $query->bindParam('name',$name);
        $query->bindParam('email',$email);
        $query->bindParam('salary',$salary);
        $query->execute();
        echo"data successfully inserted";
    }
    
    ?>
</body>
</html>