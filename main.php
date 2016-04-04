<?php include'connect.php';
if (!$_SESSION['login'] && $_SESSION['login'] == "") {
include_once($_SERVER['DOCUMENT_ROOT'] . "/login/");
} elseif ($_SESSION['login'] == 1) {
include_once($_SERVER['DOCUMENT_ROOT'] . "/main/");
}
?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title> Medical Data Visualization | ONLINE MEDICAL DATA PROJECTION </title>
		<link type="text/css" rel="stylesheet" href="style/style.css"></link>
		<link rel="shortcut icon" style="border-color:red;" href="images/mdv1.jpg"  type="image/x-icon">
	
	</head>
	<body>
		
		<div class='wrapper'>
				<?php include'menubar.php';?>

			<div id="marquee">
				<marquee direction="left" style="background-color:transparent; text-decoration:underline;"><?php include'marquee.php' ?></marquee>
			</div>

			<div class="left">

						TEST LEFT DIVISION
			</div>
		
			<div class="right">
<?php include('visualization.php'); ?>
			<?php echo"<input type='button' value='Load New Document' onclick='newDoc()'>";?>
			</div>

		</div>
	</body>
</html>