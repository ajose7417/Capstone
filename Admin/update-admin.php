<?php
include("../database.php");
$password = $_POST['password'];
$userid=$_POST['userid'];


            $str = "UPDATE users SET password='$password' WHERE user_id='$userid'";
            $res=mysqli_query($con,$str);
            if($res) {
    $msg="<span style='color: green;'> Admin updated successfully</span>";
}
else{
    $msg="<span style='color: red;'> Error</span>";
}
        

        echo $msg;

?>