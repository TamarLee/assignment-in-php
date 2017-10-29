<?php

if(!empty($_POST)){
	$content = 	"name: ".$_POST["name"].
				"\nemail: ".$_POST["email"].
				"\ntext: ".$_POST["text"]."\n";
	if(0 != filesize('data.txt')){
		file_put_contents("data.txt", "***\n"."$content", FILE_APPEND);
	}else{
		file_put_contents("data.txt", "$content", FILE_APPEND);
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>assignment 2</title>
</head>
<body>
	<form action="#" method="post">
		<p>
			<input type="text" name="name">
		</p>
		<p>
			<input type="text" name="email">
		</p>
		<p>	
			<input type="textarea" name="text">
		</p>
		<p>
			<input type="submit" value="გაგზავნა">
		</p>
	</form>
</body>
</html>