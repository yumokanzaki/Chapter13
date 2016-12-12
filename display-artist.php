<?php

require_once('includes/art-config.inc.php');
require_once('lib/ArtistDB.class.php');
require_once('lib/ArtWorkDB.class.php');
require_once('lib/DatabaseHelper.class.php');



if ( isset($_GET['id']) ) {
   $id = $_GET['id'];
}
else {
   $id = 106;   
}

$artistData = new ArtistDB();
$artist = $artistData->findById($id);
$page = $_SERVER['PHP_SELF'];

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapter 13</title>

    <!-- Bootstrap core CSS  -->    
    <link href="bootstrap3_defaultTheme/dist/css/bootstrap.css" rel="stylesheet"> 
    <!-- Custom styles for this template -->
    <link href="bootstrap3_defaultTheme/theme.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

<?php include 'includes/art-header.inc.php'; ?>

<div class="container">
   <div class="row">

      <div class="col-md-10">
         <h2><?php echo $artist["FirstName"] . ' ' .$artist["LastName"]; ?></h2>
         <div class="row">
            <div class="col-md-5">
               <img src="images/art/artists/medium/<?php echo $artist["ArtistID"]; ?>.jpg" class="img-thumbnail img-responsive" alt="<?php echo $artist["FirstName"] . ' ' . $artist["LastName"]; ?>" title="<?php echo $artist["FirstName"] . ' ' .$artist["LastName"]; ?>"/>
               
            </div>
            <div class="col-md-7">
               <p>
               <?php echo utf8_encode($artist["Details"]); ?>
               </p>
               <div class="btn-group btn-group-lg">
                 <button type="button" class="btn btn-default">
                     <a href="#"><span class="glyphicon glyphicon-heart"></span> Add to Favorites List</a>  
                 </button>
               </div>               
               <p>&nbsp;</p>
               <div class="panel panel-default">
                 <div class="panel-heading"><h4>Artist Details</h4></div>
                 <table class="table">
                   <tr>
                     <th>Date:</th>
                     <td><?php echo $artist["YearOfBirth"]; ?> - <?php echo $artist["YearOfDeath"]; ?></td>
                   </tr>
                   <tr>
                     <th>Nationality:</th>
                     <td><?php echo $artist["YearOfDeath"]; ?></td>
                   </tr>  
                   <tr>
                     <th>More Info:</th>
                     <td><a href="<?php echo $artist["ArtistLink"]; ?>"><?php echo $artist["ArtistLink"]; ?></a></td>
                   </tr>    
                 </table>
               </div>                              
               
            </div>  <!-- end col-md-7 -->
         </div>  <!-- end row (product info) -->
         
         <p>&nbsp;</p>
 
         <?php include 'includes/art-artist-works.inc.php'; ?>
         

      </div>  <!-- end col-md-10 (main content) -->
      
      <div class="col-md-2">      
         <?php include 'includes/art-right-nav.inc.php'; ?>
      </div> <!-- end col-md-2 (right navigation) -->           
   </div>  <!-- end main row --> 
</div>  <!-- end container -->

<?php include 'includes/art-footer.inc.php'; ?>




    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="bootstrap-3.0.0/assets/js/jquery.js"></script>
    <script src="bootstrap-3.0.0/dist/js/bootstrap.min.js"></script>    
  </body>
</html>
