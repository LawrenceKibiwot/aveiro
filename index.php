
<!DOCTYPE html>
<html>
<head>
	<title>BODY MASS INDEX CALCULATOR</title>
	<link rel="stylesheet" type="text/css" href="Bootstrap/css/Bootstrap.css">
</head>
<body>
<div class="container-fluid">
<div class="jumbotron">
	<div class="row">
		<div class="col-lg-3 col-md-3">
			<img src="judge.png" class="img-responsive" height="200" width="200">
		</div>
		<div class="col-lg-9 col-md-9">
		<center>
			<h1>
				BODY MASS INDEX
			</h1>
		</center>
		</div>
	</div>
</div>
	<div class="row">
		<div class="col-lg-3 col-md-3">
			<!-- No data here currently -->
		</div>
		<div class="col-lg-6 col-md-6">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<center>
							Calculate BMI
						</center>
					</div>
					<div class="panel-body">
						<form method="POST" action="index.php" class="form-group">
							<center>
								Enter Weight:
								<input type="integer" name="weight" class="form-control" placeholder="Please enter weight." required>
								<br>
								Enter Height:
								<input type="integer" name="height" class="form-control" placeholder="Please enter height." required>
								<br>
								<input type="submit" name="Calculate" value="Calculate BMI" class=" btn btn-primary bt-lg" title="Fill the form and press the button.">
								<?php
// This is my first statement on excecuting the switch statement.
if (isset($_POST['Calculate'])) {
	$height=$_POST['height'];
	$weight=$_POST['weight'];
	$BMI=$weight/($height*$height);
	echo "<h4>Your Body Mass Index is <h4>".$BMI;
	echo "<br>";

// switch ($BMI) {
// 	case '<18.5':
// 		echo "You are underweight. Something needs to be done.";
// 		break;
	
// 	case '>18.5 and <24.9':
// 		echo "You are normal. Good job.";
// 		break;
// 	case '>24.9 and <29.9':
// 	 echo "You are overweight. I am sorry";
// 	 break;
// 	 case '>29.9':
// 	 echo "You are obese. You need serious help.";
// 	 break;
// 	 default:
// 	 echo "Oops. Something went terribly wrong. ";
// 	 break;
// }
// if (isset($_POST['reset'])) {
// 	header("Location:switch.php");
// }
if ($BMI <18.5 && $BMI>0) { 
echo "You are underweight. Something needs to be done.";
}elseif ($BMI>18.5 && $BMI<24.9) {
	echo "You are perfectly normal. good job.";
}elseif ($BMI>24.9 && $BMI<29.9) {
	echo "You are overweight. I am sorry";
}elseif ($BMI>29.9) {
	echo "You are obese. Stop causing famine.";
}else{
	die('Enter details to view BMI.');
}
}
?>
<!-- <br>
<input type="submit" name="reset" value="Reset" class=" btn btn-primary bt-lg" title="Click to refresh the calculator."> -->
							</center>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-3 col-md-3">
		
		</div>
		<hr>
		<footer>
			<div class="well well-lg">
				<center>
					Developed by Aveiro.
					<br>
					&copy; 2017
					<br>
					<br>
					<img src="facebook-64.png" title="Lawrence Aveiro">
					<img src="gmail-login-64.png" title="biwotlawrence@gmail.com">
					<img src="twitter-3-64.png" title="Lawrence_aveiro">
					<img src="instagram-64.png" title="lawrence_aveiro">
				</center>
			</div>
		</footer>
	</div>
</div>
</body>
</html>
