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
<div class="container mt-4">
                    <form action="" method="post">
                              <div class="form-group">
                                        <label for="">Name</label>
                                        <input type="text" name="name" id="" class="form-control" placeholder="">
                              </div>
                              <div class="form-group">
                                        <label for="">age</label>
                                        <input type="number" name="age" id="" class="form-control" placeholder="" >
                              </div>
                              <div class="form-group">
                                        <label for="">salary</label>
                                        <input type="number" name="salary" id="" class="form-control" placeholder="" >
                              </div>
                              <div class="form-group">
                                        <label for="">loan amount </label>
                                        <input type="number" name="l_amount" id="" class="form-control" placeholder="" >
                              </div>
                              <div class="form-group">
                                        <label for="">advance loan</label>
                                        <input type="number" name="a_amount" id="" class="form-control" placeholder="" >
                              </div>

                    
                              <div class="form-group">
                                       <label for="">Select number of year</label>
                                       <select name="year" class="form-control" id="">
                                        <option >select</option>
                                        <option >5</option>
                                        <option >10</option>
                                        <option >15</option>
                                       </select>
                              </div>
                              <input type="submit" class="btn btn-dark" name="loan" value="signup">
                    </form>
          </div>
          <?php
          // if(isset($_POST["loan"])){
          //           $name = $_POST["naam"];
          //           $age = $_POST["age"];
          //           $salary = $_POST["salary"];
          //           $lamount = $_POST["l_amount"];
          //           $advance = $_POST["adv"];
          //           $year = $_POST["year"];
          //           $cal = $advance-($lamount/($year*12));


          //           if($age>25 && $salary>25000 && ($lamount>=1000000 && $lamount<=4000000)){
          //                     echo $name. "your are eligible for this scheme . <br> you will pay ".$cal." at every month till ".$year. "year";
          //           }
          //           else{
          //                     echo $name."you are not Eligible for this scheme";
          //           }
                    
          // }


          if(isset($_POST['loan'])){
                    $name = $_POST['name'];
                    $age = $_POST['age'];
                    $salary = $_POST['salary'];
                    $l_amount = $_POST['l_amount'];
                    $a_amount = $_POST['a_amount'];
                    $year = $_POST['year'];
                    $cal = ($a_amount - ($l_amount/($year*12)));


                    if($age>30 && $salary>=30000 && ($l_amount>=1000000 && $a_amount<=4000000)){
                              echo "eligible monthly installment " . $cal ;

                    }
                    else{
                              echo " not eligible";
                    }

          }
                    ?>

</body>
</html>