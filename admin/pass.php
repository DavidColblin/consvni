<?php

$URLhome = "http://www.consultantvin.com";
$URLadmin = "admin.php";

session_set_cookie_params('10');
session_start();

	if (isset($_GET["usr"])){
		if (($_GET["usr"]=="Fab") && ($_GET['pwd']=="jkp")){
			$_SESSION['log'] = 1;
			header("Location: $URLadmin");

		}//ends get if
		else{
             header("Location: $URLhome");
               unset($_SESSION['log']);
		}//ends get else
	}//ends isset if
	else{
	
  		echo '<form action="index.php" method="get">
				Username: <input type="text" name="usr"/> <br/>
				Password: <input type="text" name="pwd"/>
				<input type="submit"/>
			</form>';
	
	}


?>