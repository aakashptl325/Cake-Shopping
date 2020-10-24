<?php include("header.php") ?>

<?php

echo("<style>.info:hover {
    background: #2196F3;
    color: blue;
  }</style>");  

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
	echo("<div class='col'>");
	echo("<br/><br/><button  onclick=document.location='http://localhost/CakeShop/SelectProduct.php?cid=$themid' class='btn info' title='$desc'><img src='Images/$name.jpg' width='500' height='300' class='rounded' /><br/>$name</button>");
	echo("</div>");
}
echo("</div>");
?>