<?php  
$con=mysqli_connect("localhost","root","200101","android_api");  
 
mysqli_set_charset($con,"utf8");
  
if (mysqli_connect_errno($con))  
{  
   echo "Failed to connect to MySQL: " . mysqli_connect_error();  
}  
$name = $_POST['name'];  
$count = $_POST['count'];  
  
  
$result = mysqli_query($con,"insert into Score (name,count) values ('$name','$count')");  
  
  if($result){  
    echo 'success';  
  }  
  else{  
    echo 'failure';  
  }  
  
  
mysqli_close($con);  
?>

