<?php 
	function get_the_title(){
    return 'babababa';}
	$T = str_replace("b","a", get_the_title());?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1 id="title">
	<?php
	echo $T;
	?>
		
</h1>
<button onclick="myFunction()">Click me</button>
<script>
	
	function myFunction(){
		var title = document.getElementById("title").innerHTML;
		var replace =title.replace(/a/g,"b");
		document.getElementById("title").innerHTML = replace;
	}
</script>
</body>
</html>