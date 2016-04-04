<?php include'connect.php';
if (!$_SESSION['login'] && $_SESSION['login'] == "") {
include_once($_SERVER['DOCUMENT_ROOT'] . "/login/");
} elseif ($_SESSION['login'] == 1) {
include_once($_SERVER['DOCUMENT_ROOT'] . "/main/");
}
?>

<div id='menu_wrapper'>
	
	<div id='logo'>
		<img src="images/mdv.jpg" tab="MEDICAL DATA VISUALIZATION" height="96" width="67"> 
	</div>
	
	<div id='title'>
	<h style="font-size:30px;background-color:transparent;">MEDICAL DATA VISUALIZATION</h>
	<br>
	<h style="font-size:25px;background-color:transparent; color:#333;"> ONLINE MEDICAL DATA PROJECTION </h><br>
	</div>
	
	<?php 
		if(!isset($_SESSION['id']))
		{
			echo "<div id='menu'>
					<ul>
						<li><a href='main.php'>HOME</a></li>
							<!--
								##In case to use the drop down menu but not the final touch. Still rough##
								<select style='background-color:transparent; border-radius:0px;''>
									<option value='HeNN'><a href='http://www.helpnepal.net'>HeNN</a></option>
									<option value='saab'>Saab</option>
									<option value='opel'>Opel</option>
									<option value='audi'>Audi</option>
								</select> 
							-->
						<li><a href='visualization.php'>DATA</a></li>
						<li><a href='feedback.php'>FEEDBACK</a></li>
						<li><a href='volunteers.php'>ABOUT US</a></li>
						<li><a href='login1.php'> ADMIN</a></li>
					</ul>
				</div>";
		}
		else {
		?>			
			<div id='menu'>
					<ul>
						<li><a href='main.php'>HDDDOME</a></li>
							<!--
								##In case to use the drop down menu but not the final touch. Still rough##
								<select style='background-color:transparent; border-radius:0px;'>
									<option value='HeNN'><a href='http://www.helpnepal.net'>HeNN</a></option>
									<option value='saab'>Saab</option>
									<option value='opel'>Opel</option>
									<option value='audi'>Audi</option>
								</select>
							-->
						<li><a href='visualization.php'>DATA</a></li>
						<li><a href='feedback.php'>FEEDBACK</a></li>
						<li><a href='volunteers.php'>AsssBOUT US</a></li>
						<li><a href='admin_panel.php'><?php echo $_SESSION['user'];?>Admin</li>
					</ul>
				</div>


	<?php } ?>
</div>