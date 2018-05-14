<!DOCTYPE html>
<html>
	<head>
		<title>REG</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="logo">
							<span class="icon fa-book"></span>
						</div>
						<div class="content">
							<div class="inner">

<?php
		if
			(
				!empty($_POST['REmail'])
				&& !empty($_POST['Type'])
				&& !empty($_POST['Amount'])
				&& !empty($_POST['TranID'])
			)

					{

						$REmail= $_POST["REmail"];
						$Type=$_POST["Type"];
						$Amount=$_POST["Amount"];
						$TranID=$_POST["TranID"];
include 'conn.php'; // DB Connection

 //Insert to Mysqli Query
 $query = "INSERT INTO Pay(REmail,Type,Amount,TranID) VALUES('$REmail','$Type','$Amount','$TranID')";
 $result = mysqli_query($dbc,$query) or die("Could not query database");

 //Result Message
  if($result)

    {
    echo "<h3>Your info is stored</h3>";
    }
 else
  {
    echo "Failure!";
  }
 }
 else
 {
 echo "<h3> Enter all fields </h3>";
 }
?>
</div>
	</div>
  <nav>
    <ul>
      <li><a href="index.html">Home</a></li>

    </ul>
  </nav>
</header>
<br>
<br>
</div>

<!-- BG -->
<div id="bg"></div>
<!-- Scripts -->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/skel.min.js"></script>
  <script src="assets/js/util.js"></script>
  <script src="assets/js/main.js"></script>

</body>
</html>
