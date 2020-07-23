

<!DOCTYPE html>
<html>
<head>
	<title>STUDENT PORTAL</title>
	<meta charset="utf-8">
	 
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
 	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <link href="website.css" rel="stylesheet">
</head>
<style type="text/css">
	body{
		background-image: url(../phpprogram.php/seam9.jpg);
		width: 100%;
		height: 650px;
		background-size: 100% 100%;
        background-attachment: fixed;
        font-weight: bold;
	         
	}
</style>
<body>
	<section class="simple" style="background-color: #42455a; height: 45px;">
		<h2 class="text-center text-warning" style="font-family: cursive; font-weight: bolder;">Your Apple Shopping Cart</h2>
	</section>
	 <div class="container">
	 	<form action="data.php" method="post">
	 		<div class="row">
	 		 <div class="col-md-4">
	 		   <div class="card" style="width: 300px; height: 450px;">
	 			
	 			   <div class="card-body bg-dark text-white">

	 				<div class="card-title"> IPHONES</div>
	 				<img src="iphone.jpg" class=" card-img-top" style="width: 150px; height: 150px;"><br><br>
	 				
	 				<input type="text" name="quant" id="quant">
	 				<label for="quant">ENTER QUANTITY</label><br><br>

	 				<input type="text" name="name" id="name">
	 				<label for="name">ENTER YOUR NAME</label><br><br>

	 				<input type="submit" class="btn btn-warning"  value="add to cart" style="font-weight: bold;">
 
	              </div>
	           </div>
	       </div>
	        <div class="col-md-4">
	 		   <div class="card" style="width: 300px; height: 450px;">
	 			
	 			   <div class="card-body bg-dark text-white">

	 				<div class="card-title">MACBOOK</div>
	 				<img src="mac.jpeg" class=" card-img-top" style="width: 150px; height: 150px;"><br><br>
	 				
	 				<input type="text" name="quant1" id="quant">
	 				<label for="quant">ENTER QUANTITY</label><br><br>

	 				<input type="text" name="name1" id="name">
	 				<label for="name">ENTER YOUR NAME</label><br><br>

	 				<input type="submit" class="btn btn-warning"  value="add to cart" style="font-weight: bold;">
 
	              </div>
	           </div>
	       </div>
	        <div class="col-md-4">
	 		   <div class="card" style="width: 300px; height: 450px;">
	 			
	 			   <div class="card-body bg-dark text-white">

	 				<div class="card-title"> IPAD</div>
	 				<img src="ipad.jpg" class=" card-img-top" style="width: 150px; height: 150px;"><br><br>
	 				
	 				<input type="text" name="quant2" id="quant">
	 				<label for="quant">ENTER QUANTITY</label><br><br>

	 				<input type="text" name="name2" id="name">
	 				<label for="name">ENTER YOUR NAME</label><br><br>

	 				<input type="submit" class="btn btn-warning" value="add to cart" style="font-weight: bold;">
 
	              </div>
	           </div>
	       </div>
	   </div>

	 	</form>
	 </div>
</body>
</html>