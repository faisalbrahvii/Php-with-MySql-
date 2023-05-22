<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $name ="faisal";
    $color ="yellow";
    $red ="red";
    $color1 ="100px";
    if($name == "faisal"){
            echo "<h1 style= 'color:$color' > name is ". $name ."</h1>";
        }
        else{
            echo "<h1 style=' font-size:$color1; color:$red'>" . " not match " . "</h1>";
        }
    ?>
</body>
</html>