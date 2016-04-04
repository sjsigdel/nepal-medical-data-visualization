<?php include('connect.php');?>

<html>
	<head>
	<script src="jquery/jquery.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="jquery/jquery.modal.min.js" type="text/javascript" charset="utf-8"></script>

	<link rel="stylesheet" href="style/jquery.modal.css" type="text/css" media="screen" />
		<style type="text/css" media="screen">
		    html { background: transparent; }body 	{ font: normal 18px/1.6 'Open Sans', "Helvetica Neue", Arial, sans-serif; font-weight: 300; color: #777; padding: 2em 5%; margin: 0 auto; background: #fff; } small { color: #aaa; }h1,h2,h3,h4 { color: #444; font-weight: 700; font-size: 1.6em; letter-spacing: -1px; }	a { color: #0086B3; font-weight: 700; }		a:hover { color: #000; }    p code, li code {background:#ffffcc; color: #444; } pre { font-size: 12px; line-height: 18px; }	pre code { overflow: scroll; padding: 1em; border-radius: 10px; }  hr { height: 10px; background: #eee; border: none; }	table {width:100%;border-collapse:collapse;} td { border: 1px solid #eee; padding: 15px; }  td pre { margin: 0; } /* Example 2 (login form) */ .login_form.modal {border-radius: 0; line-height: 18px; padding: 0; font-family: "Lucida Grande", Verdana, sans-serif;}
		    .login_form h3 {margin: 0;padding: 10px;color: #fff;font-size: 14px;background: -moz-linear-gradient(top, #2e5764, #1e3d47);background: -webkit-gradient(linear,left bottom,left top,color-stop(0, #1e3d47),color-stop(1, #2e5764));}
		    .login_form.modal p { padding: 20px 30px; border-bottom: 1px solid #ddd; margin: 0; background: -webkit-gradient(linear,left bottom,left top,color-stop(0, #eee),color-stop(1, #fff)); overflow: hidden;}
		    .login_form.modal p:last-child { border: none; }
		    .login_form.modal p label { float: left; font-weight: bold; color: #333; font-size: 13px; width: 110px; line-height: 22px; }
		    .login_form.modal p input[type="text"],
		    .login_form.modal p input[type="password"] {font: normal 12px/18px "Lucida Grande", Verdana;padding: 3px;border: 1px solid #ddd;width: 200px;}
		    .part {display: none;}
		</style>
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
					
					
					header("location:login1.php");
						
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
<!--			<div id='ex1' style='display:none;'>
			<p>Thanks for clicking.  That felt good.  <a href='#' rel='modal:close'>Close</a> or press ESC</p>
			</div>
			<p>
				<a href='#ex1' rel='modal:open'>Open Modal</a>
			</p>
-->
				<form action='submit' action='<?php $_SERVER['PHP_SELF'] ?>' id='login-form' class='modal'></form>
					<a href='#ex2' rel='modal:open'>LOGIN</a>

					<form   method='post'   class='login_form modal' id='ex2' style='display:none;'>
						<h3>Please login to continue</h3>
						<p><label>Username:</label><input type='text' name='username' /></p>
						<p><label>Password:</label><input type='password' name='password' /></p>
						<p><input type='submit' value='Login' class='btn btn-large btn-primary' /></p>
					</form>
<?php
}
}
else{echo'give your best buddy';
}
?>
		</body>
</html>
