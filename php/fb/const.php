<?php
define("pi" ,3.142);
echo pi . "<br>"
?>
<?php
const blood = "O+";
$blood = "O-";
echo blood;
?>
<?php
//    function cal($num){
 //      echo (pi *  $num)+ $num2;
//    }
// cal(5,7)

$num1 = 34;
$num2 = 32;
function sum(){
          global $num1 , $num2;
          echo($num1 + $num2);
}
sum();
?>