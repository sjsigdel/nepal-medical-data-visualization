<?php include('connect.php');?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title> Henl Nepal Network | E-Library PROJECT | One E-LIBRARY PER DISTRICT </title>
		<link type="text/css" rel="stylesheet" href="style/style.css"></link>
		<link rel="shortcut icon" style="border-color:red;" href="images/logo.png"  type="image/x-icon">
	</head>
<?php
if(!isset($_SESSION['id'])) 
{
	if(isset($_POST['username'])&&isset($_POST['password']))
	{echo 'green';
		 //including config.php in our file
		$username = $_POST['username']; //Storing username in $username variable.
		$password = $_POST['password']; //Storing password in $password variable.
		echo 'test';
			$query_run=mysql_query("SELECT * FROM user WHERE username='$username' && password='$password'");
				$count=mysql_num_rows($query_run);
				echo $count;
			if ($count == 0) { 
				
				
				header("location:index.php");
					
				}
				else
				{
						$row = mysql_fetch_assoc($query_run);
						if(!empty($row)) 
						{			
							$_SESSION['user'] = $row['username'];
							$_SESSION['id'] = $row['id'];
					
						header("location:admin_panel.php");
					}
					
					?> 
					<?php
				 
				}
			
	}
	else
	{
		?>
		<body>
		<div class="wrapper">
		
			<?php include 'menubar.php';?>
			

				<div id="marquee">
					<marquee direction='left' style="background-color:transparent; text-decoration:underline;"><?php include'marquee.php' ?></marquee>
				</div>
				<div class='left'>
				</div>
				<div class='right'>
								<?php include'login1.php';?>
							</div>

		</div>
			<?php

	}
}
else
{
	echo'oh what a bullshit is this';
	include"index.php";
}
?>

</body>
</html>
