<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Carousel Example</h2>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">

  <?php
include 'admin/includes/functions.php';
$a = $con->query("SELECT * from images_a  order by id DESC ") or die(mysqli_error($con));
$i=0;


?>
    <!-- Indicators -->
    <ol class="carousel-indicators">
        
     <?php while($row = $a->fetch_assoc()) { ?> 
      <li data-target="#myCarousel" data-slide-to="<?php echo $i++; ?>"><?php echo $i++; ?></li>
     
      <?php } ?>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

<?php

while($rows = $a->fetch_assoc()) {

?>

<div class="item">
      <img src="admin/SuperAdmin/img/<?php echo $rows['name']; ?>" alt="Los Angeles" style="width:100%;">
        <div class="carousel-caption">
          <h3>Chicago</h3>
          <p>Thank you, Chicago!</p>
        </div>
      </div>
      <?php } ?>     
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

</body>
</html>