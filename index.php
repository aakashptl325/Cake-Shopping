<?php include("header.php") ?>

<?php

echo("<style>.info:hover {
    background: #2196F3;
    color: blue;
  }</style>");  

  if(!isset($_SESSION["uid"]))
  {
      echo("Login with your accout&emsp;&emsp;<button  onclick=document.location='http://localhost/CakeShop/login.php' class='btn btn-primary rounded' />Login</button>");
      echo("<br/><hr/>");
  }  

echo("<h2>Themes for Cake</h2>");

$con=mysqli_connect("localhost:3306","root","","cakedb");

$query="select * from themes";
$result=mysqli_query($con,$query);
echo("<div class='row container-fluid'>");
while($row=mysqli_fetch_assoc($result))
{
    $themid=$row["id"];
	$desc=$row["desc"];
    $charge=$row["charges"];
    $name=$row["name"];
	echo("<div class='col-md-6'>");
	echo("<br/><br/><button  onclick=document.location='http://localhost/CakeShop/SelectCake.php?id=$themid' class='btn info' title='$desc'><img src='Images/$name.jpg' width='400' height='300' class='rounded' /><br/>$name</button>");
	echo("</div>");
}
echo("<br/>");
echo("</div>");

?>