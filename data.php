<!DOCTYPE html>
<html>
<head>
	<title>DATA OF CART</title>
</head>
<body>
	<h2>Your data is safe</h2>

	<?php

	$quantity=$_POST['quant'];
	$name=$_POST['name'];

	$conn=new mysqli('localhost', 'root', '', 'shoppingcart');
	if ($conn->connect_error) {
		die('fail');
	}else{


		 	$sql="INSERT INTO cart10 (quantity,name)
                           VALUES ('$_POST[quant]','$_POST[name]')";


		if ($conn->query($sql) ==TRUE) {
          echo "New record created successfully";
          echo "<br>";
          echo "details:" .$name;
         } else {
            echo "eroor:" . $sql . "<br>" . $conn->error;
         }

		$conn->close();
	}



	?>

</body>
</html>