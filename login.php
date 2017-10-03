<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Pick Me Up</title>

    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="https://colorlib.com/polygon/gentelella/css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="build/css/customm.css" rel="stylesheet">
    <style>
      html {
        height: 100%;
      }
      body {
        height: 100%;
        background: #F7F7F7;   
      }

    </style>
  </head>

  <body>
    <div class="login_wrapper">
      

      <div class="text-center">
        <span class="fa-stack fa-3x">
          <i class="fa fa-circle-thin fa-stack-2x" style="font-size:  82px"  ></i>
          <i class="fa fa-car fa-stack-1x" style="margin-top:  2px"  ></i>
        </span>
      </div>

      <h1 class="welcome text-center">Pick Me Up</h1>  
      <div class="login_content">  

          <form style="margin:5% 5%" action ="index.php" method="post">
            <h1 style="letter-spacing: 0.5px;">Welcome!</h1>
            <div>
              <input type="text" name ="user" class="form-control" placeholder="Username" required="" />
            </div>
            <div>
              <input type="password" name ="pass" class="form-control" placeholder="Password" required="" />
            </div>
            <div>
                <a href="index.php"><button type="submit" name ="submit" class="btn btn-success">Sign In</button><
            </div>

            <div class="clearfix"></div>

            
          </form>

      </div>

      <div class="separator">
        <div class="text-center">
          <p style="font-size: 14px;">
            <b>©2017 Proyek Interaksi Manusia dan Komputer</b>
            <br>  
            <br> Sanitya Purnomo • Martina Marcelline
            <br> Kevin Nyoto • Elbert Jonathan • Satria Damai 
            <br> Albert Pratomo • Stephanie Liem  
            <br>  
            <br> All Rights Reserved 
          </p>
        </div>
      </div>
    </div>
  </body>
</html>