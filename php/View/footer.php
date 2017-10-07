<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="footer, links, icons" />

	<title>Distributed Footer</title>

	<link rel="stylesheet" href="css/demo.css">
	<link rel="stylesheet" href="css/footer-distributed.css">
	
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

</head>

	<body>

		<!-- The content of your page would go here. -->

		<footer class="footer-distributed">

			<div class="footer-right">

				<a href="#"><i class="fa fa-facebook"></i></a>
				<a href="#"><i class="fa fa-twitter"></i></a>
				<a href="#"><i class="fa fa-linkedin"></i></a>
				<a href="#"><i class="fa fa-github"></i></a>

			</div>

			<div class="footer-left">

				<p class="footer-links">
					<a href="index.php">Route Planner</a>
					·
					<a href="profile.php">Profile</a>
					·
					<a href="../Controller/session.php">Logout</a>
				</p>

				<p>Two Wheel Nav &copy; 2015</p>
			</div>

		</footer>

		<div id="sessionInfo">
            	SESSION INFO: <?php print_r($_SESSION); ?>
        </div>

	</body>

</html>
