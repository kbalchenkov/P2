
<!DOCTYPE html>
<html>
<head>
  <title>xkcd style password generator.</title>

  
  <link rel='stylesheet' href='styles.css' type='text/css'>
 <?php require 'logic.php' ?>
  <?php require 'listofwords.php' ?>

</head>
<body class="<?php echo $image; ?>">

<h1> It is <?php echo $time_now	?> </h1>
<h1>Time Zone <?php echo date_default_timezone_get();?></h1>

<br>
<img src='http://making-the-internet.s3.amazonaws.com/php-<?php echo $image; ?>.png' alt='Scenery matching the time of day'>



<?php  
foreach($keywords as $keyword => $result) {
    echo $keyword." is a ".$result.".<br>";
}
?>   
  
  
</body>
</html>