<?php include_once("index.php") ?>
<?php include('server.php'); 
session_start();
?>
<!DOCTYPE>
<html>
<head>
	<title>Registration From</title>
	<link rel="stylesheet" type="text/css" href="style.css"> 
</head>
<body>
	<div class="header">
		<h2>Welcome User</h2>
	</div>

	<div class="content">
		<?php if (isset($_SESSION['success'])): ?>
			<div class="error success">
				<h3>
					<?php
						echo $_SESSION['success']; 
					?>
				</h3>
			</div><br><br>
		<?php endif ?>

		<?php if (isset($_SESSION["username"])): ?>
			<p>Welcome <strong><?php echo $_SESSION['username'] ?></strong></p><br><br>
			<p>
				<button>
					<a href="add.php" style="color: blue;">ADD YOUR EXPENSES</a>
				</button>
				<button>
					<a href="chart.php" style="color: blue;">VIEW YOUR EXPENSES</a>
				</button>
					
			</p><br><br>
			<p>
				<button>
					<a href="login.php" style="color: red;">Logout</a>
				</button>
					
			</p>
		<?php endif ?>
	</div>
</body>
</html>
