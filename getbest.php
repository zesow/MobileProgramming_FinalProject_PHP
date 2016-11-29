<?php

function unistr_to_xnstr($str){
    return preg_replace('/\\\u([a-z0-9]{4})/i', "&#x\\1;", $str);
}

$con=mysqli_connect("localhost","root","200101","android_api");

if (mysqli_connect_errno($con))
{  
   echo "Failed to connect to MySQL: " . mysqli_connect_error();
}


mysqli_set_charset($con,"utf8");

$res = mysqli_query($con,"select MAX(count) as max from Score");

$result=array();

while($row = mysqli_fetch_array($res)){
  array_push($result,
    array('max'=>$row[0]
    ));
}


$json = json_encode(array("result"=>$result));
//echo unistr_to_xnstr($json);
echo $json
mysqli_close($con);

?>

