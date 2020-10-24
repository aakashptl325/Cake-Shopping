<?php

$uid=$_REQUEST["uid"];
$pwd=$_REQUEST["pwd"];

$con=mysqli_connect("localhost:3306","root","","cakedb");
if($con)
{
    $query="select * from userinfo where uid='$uid' and password='$pwd'";
    echo($query);
    $result=mysqli_query($con,$query);
    if(mysqli_num_rows($result)==1)
    {
        $row=mysqli_fetch_assoc($result);
        $_SESSION["name"]=$row["fname"]." ".$row["lname"];
        $_SESSION["uid"]=$row["uid"];
        $_SESSION["password"]=$row["password"];
        $_SESSION["email"]=$row["emailid"];
        setcookie("invalid","",time()-20);
        Header('Location:http://localhost/CakeShop/index.php');
    }
    else
    {
        setcookie("invalid","Invalid User ID or Password");
        Header('Location:http://localhost/CakeShop/login.php');
    }
}

?>