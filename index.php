 <?php error_reporting(0); ?>

<!DOCTYPE html>
<html>
<head>
  <title>xkcd style password generator.</title>

  
  <link rel='stylesheet' href='styles.css' type='text/css'>
 
 <?php require 'listofwords.php' ?>
 <?php require 'logic.php' ?>


  

</head>

<body>

<div class='container'>

	<h1 style = "color:#40B3DF; font-family:verdana;"> xkcd Style Password Generator</h1>
 
 <P class='description'> Use this generator to generate a random password that is much safer then regular made up password. See comic strip below for more info. Enjoy it </p>
 
<form method='POST' action='index.php'>

<P class='input'>

# of words: <input name="numberofwords" id ="numberofwords" min="1" max="5" type="number" required> (Max 5)<br>
<br>


<input type='checkbox' name='addanumber' id='addanumber' ><label for='addanumber'>Add a number</label> <br>


<input type='checkbox' name='addasymbol' id='addasymbol' > 
<label for='addasymbol'>Add a symbol</label><br>
 
<input type='checkbox' name='adduppercase' id='adduppercase' > 
<label for='adduppercase'>Upper case the first letter</label><br><br>

</p>
 
<input type='submit' value='Generate!'>
 
</form>



<p class='password'>
<?php 
      foreach($displaywords as $key => $value) { 
		if (in_array($adduppercase, $_POST)) {	
				  echo $values = ucwords($value);  
				  	
				}	
				else { echo $value;} 
		}

?>
<?php echo $randomnumber; ?>
<?php echo $symbols[$rand_symbol]; ?>

</p>

<p class='details'>
			<a href='http://xkcd.com/936/'>xkcd password strength</a><br>
		
			<a href='http://xkcd.com/936/'>
				<img src='http://imgs.xkcd.com/comics/password_strength.png' alt='xkcd style passwords'>
			</a>
			<br>
</p>


 </div>
 

</body>
</html>