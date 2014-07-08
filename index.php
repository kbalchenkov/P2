<?php
error_reporting(E_ALL);         # Report Errors, Warnings, 
ini_set('display_errors' , 1);   # Display errors on page (instead of a log file)
 
?>


<!DOCTYPE html>
<html>
<head>
  <title>xkcd style password generator.</title>

  
  <link rel='stylesheet' href='styles.css' type='text/css'>
 
 <?php require 'listofwords.php' ?>
 <?php require 'logic.php' ?>

  

</head>

<body>


	<h1>xkcd style password generator</h1>
 
<form method='POST' action='index.php'>

# of words: <input name="numberofwords" id ="numberofwords" min="1" max="5" maxlength=1 type="number" required> (Max 5)<br>
<br>


<input type='checkbox' name='addanumber' id='addanumber' ><label for='addanumber'>Add a number</label> <br>


<input type='checkbox' name='addasymbol' id='addasymbol' > 
<label for='addasymbol'>Add a symbol</label><br>
 
<input type='checkbox' name='adduppercase' id='adduppercase' > 
<label for='adduppercase'>Upper case the first letter</label><br><br>
 
 
<input type='submit' value='Generate!'>
 
</form>



<pre>
    <?php print_r($_POST); ?>
</pre>




<?php 
      foreach($displaywords as $key => $value) { ?>
		<?php echo $value; ?> + <br>
		<?php }?>


<pre>
    <?php print_r($displaywords); ?>
</pre>


<?php  
	foreach($keywords as $keyword => $result) { ?>
		<?php echo $keyword; ?> is a <?php echo $result;?> <br> 
<?php } ?>

 
 

</body>
</html>