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
<?php
// $name =$fname = $class = $school = $isl =$urdu =$math =$eng = $phy = $roll = "";
          if(isset($_POST['sub'])){
                    $name = $_POST['name'];
                  $f_name = $_POST['f_name'];
                    $class = $_POST['class'];
                    $roll = $_POST['roll'];
                    $school = $_POST['school'];
                    $urdu = $_POST['urdu'];
                    $isl = $_POST['isl'];
                    $math = $_POST['math'];
                    $eng = $_POST['eng'];
                    $phy = $_POST['phy'];
          }
        
                    ?>
          <h1 class="text-center">Board of F.S</h1>
          <div class="container w-50">
          <div class="row">
                  
                    <div class="col">
                              <h6>Student Name : <?php echo $name ?></h6>
                              <h6> Father Name  : <?php echo $f_name ?></h6>
                              <h6>Class <?php echo $class ?></h6>
                              <h6>Roll Number :<?php echo $roll ?></h6>
                              <h6>School :<?php echo $school ?></h6>
                    </div>
          </div>
     <table border="1px">
         <tr>
          <th>Component 1</th>
          <th>Marks</th>
          <th>Component 2</th>
          <th>Marks</th>
         </tr>
         <tr>
          <td>English</td>
          <td><?php echo $eng?></td>
          <td>Urdu</td>
          <td><?php echo $urdu?></td>
         </tr>
         <tr>
          <td>Isl</td>
          <td><?php echo $isl?></td>
          <td>physic</td>
          <td><?php echo $phy?></td>
         </tr>
         <tr>
          <td>Math</td>
          <td><?php echo $math?></td>
         </tr>
         
     </table>
          </div>
</body>
</html>