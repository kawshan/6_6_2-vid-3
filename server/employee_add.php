<?php

require_once("db.php");

if (   ! (isset($_POST['name']) && isset($_POST['age']) && isset($_POST['gender'])  )   ){
die("error");
}
$name=$_POST['name'];
$age=$_POST['age'];
$gender=$_POST['gender'];

echo ($name);
echo ($age);
echo ($gender);


//$sql="select id,name,age,(select name from gender where id=gender_id) as gender from employee";
//$result=mysqli_query($conn,$sql);
//
//$employees=array();
//    while ($employee=mysqli_fetch_assoc($result)){
//        array_push($employees,$employee);
//
//    }
//    $json=json_encode($employees);
//    echo ($json);
    ?>
