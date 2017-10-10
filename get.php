<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>実験2</title>
</head>
<body>
	<?php

	$name = htmlspecialchars($_POST['date']);
	print "${name}";

	?>
</body>
</html>
