
<!DOCTYPE html>
<html lang="en">
<head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
          <title>Document</title>
</head>
<body>
          <div class="conatiner mt-4">
                    <form action="" method="post">
                              <div class="form-group">
                                        <label for="">Name</label>
                                        <input type="text" name="std_name" id="" class="form-control" placeholder="" aria-describedby="helpID">
                              </div>
                              <div class="form-group">
                                        <label for="">Email</label>
                                        <input type="text" name="std_email" id="" class="form-control" placeholder="" aria-describedby="helpID">
                              </div>
                              <div class="form-group">
                                        <label for="">password</label>
                                        <input type="password" name="password" id="" class="form-control" placeholder="" aria-describedby="helpID">
                              </div>
                              <input type="submit" class="btn btn-dark" name="register" value="signup">
                    </form>
          </div>
          <?php
          if(isset($_POST['register'])){
                    $name = $_POST['std_name'];
                    $email = $_POST['std_email'];
                    $pas = $_POST['password'];
                    ?>
                    <h1><?php echo "hello" .$email ?></h1>
                    <?php
          }
                    ?>

</body>
</html>