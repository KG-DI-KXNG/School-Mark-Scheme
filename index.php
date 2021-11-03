
<html>
<head>

<form action="#" method="get">
<label for="item">Items:</label>
<input type="text" name="item"></input>
<button>Add</button>
<input type="submit" name="clear" value="Clear"></input>
<?php
if (isset($_GET['clear'])){
	$myfile = fopen("ex3.txt", "w+");
		fclose($myfile);
}
?>
</form>
</head>
<body>
<fieldset style="width:200px">
<?php
if (isset($_GET['item'])){
		$myfile = fopen("ex3.txt", "r");
		$names=file('ex3.txt');
		fclose($myfile);
if (count($names) < 5){
	if ($_GET['item'] != ""){
	$myfile = fopen("ex3.txt", "a");
	$txt = $_GET['item']."\n";
	//$count = count($names);
	fwrite($myfile, $txt);
	
		$names=file('ex3.txt');
				foreach($names as $name)
		{
			echo $name."<br>";
		
		}
		echo count($names).' Items added<br>';		
		fclose($myfile);
		
}else{
	foreach($names as $name){
		echo $name.'<br>';
		}
	echo count($names).' Items added<br>';
	} 
}
	else{
		echo "Maximum Capacity<br>";
				foreach($names as $name)
		{
			echo $name.'<br>';
		
		}
		echo count($names).' Items added<br>';

	}
}
?>
</fieldset>




</body>
</html>
