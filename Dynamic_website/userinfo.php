<?php 

$con = mysqli_connect('localhost','root');

if($con){
    echo "Connection successfull";
}else{
    echo "No Connection";
}
mysqli_select_db($con,'Naturedata');

$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comments = $_POST['comments'];

$query = " insert into userinfodata(user,email,mobile,comment)
values('$user','$email','$mobile','$comments')";

echo "$query";

mysqli_query($con, $query);

header('location:index.php');

?>