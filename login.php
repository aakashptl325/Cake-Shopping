<!DOCTYPE html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <link href="bootstrap-4.5.2-dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="bootstrap-4.5.2-dist/jss/bootstrap.min.js"></script>
</head>
<html>
    <head>
        <title>Login Page</title>
    </head>
    <body style="background-color:lightsteelblue">
        <div class="container-fluid">
            <div class="row">
                <br/><br/>
                <div class="col-md-5" ></div>
                <div class="col-md-2" >
                    <?php
                        if(isset($_COOKIE["invalid"]))
                        {
                            echo("<span style='color:red'>".$_COOKIE["invalid"]."</span>");
                        }
                    ?>
                </div>
                <div class="col-md-5" ></div>
                <br/><br/>
            </div>    
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-*"></div>    
            </div>
            <div class="row">
            <div class="col-md-4"></div>
                <div class="col-md-3">
                    <h1 style="text-align:center">Login</h1>
                    <br/><br/>
                    <form class="form-inline" action="http://localhost/CakeShop/logincheck.php">
                        <div class="form-group">
                            <lable>User ID</lable>
                            &emsp;&emsp;&emsp;<input type="text" name="uid" id="uid" class="form-control" /><br/><br/>
                        </div>
                        <div class="form-group">
                            <lable>Password</lable>
                            &emsp;&emsp;&emsp;<input type="password" name="pwd" id="pwd" class="form-control" /><br/><br/>
                        </div>
                        <div>
                            &emsp;&emsp;&emsp;<input type="submit" value="Login" class="form-control btn btn-primary" /><br/><br/>
                        </div>
                    </form>
                </div>
                <div class="col-md-5"></div>
            </div>
        </div>
    </body>
</html>