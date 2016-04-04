<!doctype html>
<html lang="en">
<head>
<script src="jquery/jquery.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="jquery/jquery.modal.min.js" type="text/javascript" charset="utf-8"></script>
	<link rel="stylesheet" href="style/jquery.modal.css" type="text/css" media="screen" />
  <meta charset="utf-8">
  <title>jQuery UI Dialog - Modal confirmation</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
 
  <script>
  $(function() {
    $( "#dialog-confirm" ).dialog({
      resizable: false,
      height:600,
      width:400,
      modal: true,
      buttons: {
        'Agree': function() {
          $( this ).dialog( window.location.assign('../mdv/main.php') );
        },
        'Disagree': function() {
          $( this ).dialog(window.close('','_SELF'));
        }
      }
    });
  });
  </script>
<style type="text/css" media="screen">
		    html { background: #ddd; }
		    body { font: normal 18px/1.6 'Open Sans', "Helvetica Neue", Arial, sans-serif; font-weight: 300; color: #777; padding: 2em 5%; width: 80%; max-width: 900px; margin: 0 auto; background: #fff; }
		    small { color: #aaa; }
		    h1,h2,h3,h4 { color: #444; font-weight: 700; font-size: 1.6em; letter-spacing: -1px; }
		    a { color: #0086B3; font-weight: 700; }
		    a:hover { color: #000; }
		    p code, li code {background:#ffffcc; color: #444; }
		    pre { font-size: 12px; line-height: 18px; }
		    pre code { overflow: scroll; padding: 1em; border-radius: 10px; }
		    hr { height: 10px; background: #eee; border: none; }
		    table {width:100%;border-collapse:collapse;}
		    td { border: 1px solid #eee; padding: 15px; }
		    td pre { margin: 0; }

		    /* Example 2 (login form) */
		    .login_form.modal {
		      border-radius: 0;
		      line-height: 18px;
		      padding: 0;
		      font-family: "Lucida Grande", Verdana, sans-serif;
		    }

		    .login_form h3 {
		      margin: 0;
		      padding: 10px;
		      color: #fff;
		      font-size: 14px;
		      background: -moz-linear-gradient(top, #2e5764, #1e3d47);
		      background: -webkit-gradient(linear,left bottom,left top,color-stop(0, #1e3d47),color-stop(1, #2e5764));
		    }

		    .login_form.modal p { padding: 20px 30px; border-bottom: 1px solid #ddd; margin: 0;
		      background: -webkit-gradient(linear,left bottom,left top,color-stop(0, #eee),color-stop(1, #fff));
		      overflow: hidden;
		    }
		    .login_form.modal p:last-child { border: none; }
		    .login_form.modal p label { float: left; font-weight: bold; color: #333; font-size: 13px; width: 110px; line-height: 22px; }
		    .login_form.modal p input[type="text"],
		    .login_form.modal p input[type="password"] {
		      font: normal 12px/18px "Lucida Grande", Verdana;
		      padding: 3px;
		      border: 1px solid #ddd;
		      width: 200px;
		    }


		    .part {
		      display: none;
		    }
		</style>
</head>

<body> 
	<div  id="dialog-confirm" title="TERMS AND CONDITIONS">
		  <p style="font-family:veranda; text-align:justify;  font-size:12px;inherit;color:black;">
			WELCOME TO MEDICAL DATA VISUALIZATION <br> 
			<h style="font-size:12px;"> Your Online medical data projecttion applicatoin. Since you are visiting this app for the first time we would like you to go through our <i>TERMS AND CONDITIONS.</i>
			<ul style= "text-align:justify; font-size:12px; color:black;">
			 <li> This application consists of medical related data.</li>
			 <li> Medical data available in this application are provided by different medical institutions and hospitals of Nepal, Wchic are their legal assests.Such data will not be published or provided to anybody.</li>
			 <li> RESOURCE PROVIDER'S DETAILS WILL NOT BE DISCLOSED.</li>
			 <li> User or organisation is free to use these visualization for the purpose of demonstration,<br> only after receiving the administrator's permission.</li>
			 <li> In case, any user or organisation found using our visulized data for their personal purpose<br> to manipulate it against the law, such user or organisation will be punished according to the law.</li>
			 <li> User or organisation should do a paper agreement in order to receive the visualized information from the administrator.</li>
			 <li> Incase of any misuse of the data provided from this application against the law, individual or organisation will be accused and will be punished according to the law.</li>
 			 </ul>
 			 <hr><hr><hr> After you read all the terms and agreement, Please press Agree if you want to proceed to another page or press cancel
 	</p>
</div> 
<!--	<div id="ex1" style="display:none;">
    <p>Thanks for clicking.  That felt good.  <a href="#" rel="modal:close">Close</a> or press ESC</p>
  </div>
  <p><a href="#ex1" rel="modal:open">Open Modal</a></p>
	<form id="login-form" class="modal"></form>
<p>This <a href="#ex2" rel="modal:open">example</a> demonstrates how visually customizable the modal is.</p>
<form action="" class="login_form modal" id="ex2" style="display:none;">
  <h3>Please login to continue</h3>
  <p><label>Username:</label><input type="text" /></p>
  <p><label>Password:</label><input type="password" /></p>
  <p><input type="submit" value="Login" /></p>
</form>
-->
</body>
</html>