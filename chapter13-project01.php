<?php


// initialize variables
$email = "";
$password = "";
$emailMessage = '';
$emailClass = '';
$passwordMessage = '';
$passwordClass = '';      

$emailMessage = '';
$emailClass = '';



$passwordMessage = '';
$passwordClass = '';
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Chapter 13</title>

   <!-- Bootstrap core CSS -->
   <link href="bootstrap3_defaultTheme/dist/css/bootstrap.css" rel="stylesheet">

   <!-- Custom styles for this template -->
   <link href="chapter13-project01.css" rel="stylesheet">

   <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
   <!--[if lt IE 9]>
   <script src="bootstrap3_defaultTheme/assets/js/html5shiv.js"></script>
   <script src="bootstrap3_defaultTheme/assets/js/respond.min.js"></script>
   <![endif]-->
</head>

<body>

<div class="container">
   <div class="row">
      <div class="col-md-3">
      </div>
      <div class="col-md-6">
         <div id="login">

            <div class="page-header">
               <h2>Login</h2> 
            </div>
            <form role="form" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
              <div class="form-group <?php echo $emailClass; ?>">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" name="email" value="<?php echo $email; ?>">
                <p class="help-block"><?php echo $emailMessage; ?></p>
              </div>
              <div class="form-group <?php echo $passwordClass; ?>">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" name="password"  value="<?php echo $password; ?>>
                <p class="help-block"><?php echo $passwordMessage; ?></p>
              </div>
              <div class="form-group">
                <label for="exampleInputFile">Server</label>
                <select name="server" class="form-control">
                <?php
                  for ($i = 1; $i < 6; $i++) {
                     echo '<option>Server ' . $i . '</option>';
                  }
                ?>
                </select>             
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>  

         </div>
      </div>
      <div class="col-md-3">
      </div>
   </div>  
</div>  <!-- end container -->

 <!-- Bootstrap core JavaScript
 ================================================== -->
 <!-- Placed at the end of the document so the pages load faster -->
 <script src="bootstrap3_defaultTheme/assets/js/jquery.js"></script>
 <script src="bootstrap3_defaultTheme/dist/js/bootstrap.min.js"></script>    
</body>
</html>
