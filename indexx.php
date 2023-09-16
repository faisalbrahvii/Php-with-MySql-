<?php
$students = ["sami", "huzaifa", "atif", "Abdul"];

foreach ($students as $value) {
    echo $value . "<br>";
}

?>
<h1>Assoiative Array</h1>
<?php
$students = [
    "std1"=>"m",
    "std2"=>"huzaifa",
    "std3"=>"atif",
    "std4"=>"Abdul"
];
echo $students['std1']. " " . $students['std3']. "<br>";

foreach($students as $key => $item){
    echo $item. "<br>";
}
?>