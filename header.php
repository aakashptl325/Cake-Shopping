<?php session_start(); ?>

<!DOCTYPE html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <link href="bootstrap-4.5.2-dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="bootstrap-4.5.2-dist/jss/bootstrap.min.js"></script>
</head>

<?php

echo("<div class='container-fluid'>");
echo("<br/>");
if(isset($_SESSION["uid"]))
{
    echo("<h2> Welcome ".$_SESSION["name"]."</h2>");
}
else
{
    echo("<h2> Welcome Guest</h2>");
}
echo("<br/><hr/>");
echo("</div>");

?>