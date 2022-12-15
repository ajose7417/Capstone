<?php
include("../database.php");
$email = $_POST['email'];
$password = $_POST['password'];


$str1="SELECT user_name from users WHERE user_name='$email'";
$res1=mysqli_query($con,$str1);
if((mysqli_num_rows($res1))>0)	
		{
            $msg="<span style='color: red;'> Admin is already added</span>";
        }
        else {
            $str = "INSERT INTO users (user_name, password, type) values ('$email', '$password', 1)";
            $res=mysqli_query($con,$str);
            if($res) {
    $msg="<span style='color: green;'> Admin added successfully</span>";
}
else{
    $msg="<span style='color: red;'> Error</span>";
}
        }

        echo $msg;

?>