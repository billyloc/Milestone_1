<?php
	$msg = "";	
	if(isset($_GET['p'])) {
		$product_id = $_GET['p'];
	} 

	if($product_id == 1) {
		$msg = "you picked Macbook" . '<img src="macbook.jpg">';
	} elseif($product_id == 2) {
		$msg = "you picked Ubuntu" . '<img src="ubuntu.png">';
	} elseif($product_id == 3) {
		$msg = " you picked Windows" . '<img src="windows.png">';
	} else {
		$msg = '<img src="error.jpg"/>';
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Products</title>
	<link rel="stylesheet" type="text/css" href="cssstyle.css">
</head>
<body>

	<?php
	require("header.php");
	

	echo $msg; 
	
	require("footer.php");
	?>

</body>
</html>

