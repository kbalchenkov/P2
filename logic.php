<?php



$imputnumber = $_POST["numberofwords"];

$i = 0;

while($i < $imputnumber){
	
	$rand_value = array_rand($keywords);

	$rand_word = $keywords[$rand_value];
	
	$displaywords[] = $rand_word;
	
	
	$i++;

	
}

?>

<?php
$adduppercase = $_POST["adduppercase"];

$addasymbol = $_POST["addasymbol"];
$symbols = array("$", "@", "#", "&", "!");

$addanumber = $_POST["addanumber"];

foreach ($_POST as $key => $value) {

    if (in_array($addasymbol, $_POST)) {
		$rand_symbol = array_rand($symbols, 1);
		}
	if (in_array($addanumber, $_POST)) {	
		$randomnumber = rand(0,100);
		}
	
}

?>