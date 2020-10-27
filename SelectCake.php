
<?php include("header.php") ?>

<?php

  if(!isset($_SESSION["uid"]))
  {
      echo("Login with your accout&emsp;&emsp;<button  onclick=document.location='http://localhost/CakeShop/login.php' class='btn btn-primary rounded' />Login</button>");
      echo("<br/><hr/>");
  }

  $id=$_REQUEST["id"];

  echo("<div class='container-fluid'><br/>");
  echo("<h2>Give Your choice for cake</h2><br/><br/>");
  echo("<div class='row'>");
  echo("<div class='col-md-4 bg-light'>");
  
  echo("<br/><h2>Cake Theme</h2><br/><br/>");

  $con=mysqli_connect("localhost:3306","root","","cakedb");

  $query="select * from themes where id = $id";

  $result=mysqli_query($con,$query);

  while($row=mysqli_fetch_assoc($result))
  {
      $desc=$row["desc"];
      $name=$row["name"];
      $charges=$row["charges"];
  }
  
  echo("<h4>$desc</h4>");

  echo("Charges for this Theme is $charges <br/><br/>");

  echo("<img src='Images/$name.jpg' width='350' height='300' class='rounded' /> <br/><br/>");


  echo("</div>");
  
  echo("<div class='col-md-1'></div>");

  echo("<div class='col-md-7 bg-light'><br/><br/>");
  echo("<h4>We only deal with trusted people.
  Feel free and do not hesitate to use our app</h4>");
  echo("<h4>U will find most delicious and pocket friendly deals here.
  Your happiness is our first priority</h4>");
  echo("<br/><br/><br/><br/>");
  echo("<form action=''");
  $con=mysqli_connect("localhost:3306","root","","cakedb");

  $query="select * from cakes";
  $result=mysqli_query($con,$query);
  echo("<div class='row container-fluid'>");
  
  echo("<div class='form-group'>");
  echo("<lable>Choose Your Flavor</lable>&emsp;&emsp;&emsp;");
  echo("<select name='flav'>");
  echo("<option value=''>(Select One)</option>");
  while($row=mysqli_fetch_assoc($result))
  {
      $cakeid=$row["cakeid"];
      $flavour=$row["flavour"];
      echo("<option value='$cakeid'>$flavour</option>");
  }

  echo("</select><br/><br/><br/>");

  echo("<lable>Choose Weight</lable>&emsp;&emsp;&emsp;");
  echo("<select name='weight'>");
  echo("<option value=''>(Select One)</option>");
  echo("<option value='0.5'>0.5 kg</option>");
  echo("<option value='1'>1 kg</option>");
  echo("<option value='1.5'>1.5 kg</option>");
  echo("<option value='2'>2 kg</option>");
  echo("<option value='2.5'>2.5 kg</option>");
  echo("</select><br/><br/>");

  echo("<h4>Eggless <img src='Images/eggless.png' width='25' height='25' />:&emsp;&emsp;<input type='checkbox' name='egg' /></h4><br/>");
  echo("<lable>Your Wishes On the Cake </lable><br/><textarea name='comments' row='7' cols='30'></textarea>");
  echo("</div>");
  echo("</div>");
  echo("</form>");
  echo("</div>");
  echo("</div>");
  echo("</div><br/><br/><br/><br/><br/>");
?>