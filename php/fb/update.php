<?php
include("connection.php")
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
<div class="container mt-4">
            <form  action="">
                <!-- <div class="form-group mb-3">
                    <label for="">id</label>
                    <input type="text" name="e_id" id="" class="form-control" placeholder="">
                </div> -->
                <div class="form-group mb-3">
                    <label for="">name</label>
                    <input type="text" name="e_name" id="" class="form-control" placeholder="">
                </div>
                <div class="form-group mb-3">
                    <label for="">email</label>
                    <input type="text" name="e_email" id="" class="form-control" placeholder="">
                </div>
                <div class="form-group mb-3">
                    <label for="">salary</label>
                    <input type="number" name="e_salary" id="" class="form-control" placeholder="">
                </div>
               
               
               <button type="submit" name="update">update</button>
                </form>
        </div>

</body>
</html>