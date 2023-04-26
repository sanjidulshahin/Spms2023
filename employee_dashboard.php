<!DOCTYPE html>
<html>
<head>
	<title>SPMS 4.0</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<style>
		body {
			background-color:lightseagreen;
			font-family: 'Montserrat', sans-serif;
		}
		
		.logo {
			font-size: 4rem;
			color: #4a4a4a;
			text-align: center;
			margin-bottom: 50px;
			text-shadow: 2px 2px #f2f2f2;
		}
		
		.nav-links {
			display: flex;
			flex-wrap: wrap;
			justify-content: center;
			align-items: center;
			background-color: #4a4a4a;
			padding: 20px 0;
			border-radius: 10px;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
			margin-bottom: 50px;
		}
		
		.nav-links ul {
			list-style: none;
			margin: 0;
			padding: 0;
			display: flex;
			flex-wrap: wrap;
			justify-content: center;
			align-items: center;
		}
		
		.nav-links li {
			margin: 0 20px;
		}
		
		.nav-links a {
			text-decoration: none;
			color: #fff;
			font-size: 1.5rem;
			padding: 10px 20px;
			border-radius: 30px;
			transition: all 0.3s ease;
			background-color: #4a4a4a;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
		}
		
		.nav-links a:hover {
			background-color: #fff;
			color: #4a4a4a;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.2), 0 0 20px rgba(0, 0, 0, 0.2);
			transform: scale(1.05);
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="row">
			
			<div class="col-12">
				<div class="nav-links">
					<ul>
						<li class="nav-item"><a class="nav-link" href="#">Dashboard</a></li>
						<li class="nav-item"><a class="nav-link" href="ploAnalysis.php">PLO Analysis</a></li>
						<li class="nav-item"><a class="nav-link" href="ploAchieveStats.php">PLO Achievement Stats</a></li>
						<li class="nav-item"><a class="nav-link" href="spiderChart.php">Spider Chart Analysis</a></li>
						<li class="nav-item"><a class="nav-link" href="dataEntry.php">Data Entry</a></li>
						<li class="nav-item"><a class="nav-item" href="viewCourseOutline.php" target="_self">View course Outline</a></li>
						<li class="nav-item"><a class="nav-item" href="enrollmentStatistics.php" target="_self">Enrollment Stats</a></li>
						<li class="nav-item"><a class="nav-item" href="performanceStats.php" target="_self">GPA Analysis</a></li>
						<li class="nav-item"><a class="nav-item" href="studentcloinfo.php" target="_self">ADDING CLO IN SYSTEM</a></li>
						<li class="nav-item"><a class="nav-item" href="CSVFILE.php" target="_self">CSV FILE</a></li>
						<li class="nav-item"><a class="nav-item" href="logout.php" target="_self">Logout</a></li>
			   </ul>
		  </div>
      <div class="col-12">
				<div class="logo">
					SPMS 4.0
				</div>
			</div>
	</div>
</body>
</html>
