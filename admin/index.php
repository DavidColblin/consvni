<?php

$URLhome = "http://www.consultantvin.com";
$URLadmin = "admin.php";

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

  		echo '<table><form action="pass.php" method="get">
                	<tr><td colspan="2"><h1>Authentification </h1> </td> </tr> 
			   <tr><td>Utilisateur:</td><td> <input type="text" name="usr"/></td> </tr>
				<tr><td>Mot De Passe: </td><td><input type="text" name="pwd"/>  </td> </tr>
				<tr><td><input type="submit"/> </td> </tr>
			</form></table>';
	
	}


?>

<style>
    table {
      position: absolute;
      top:30%;
      left: 30%;
      font-family: Verdana;
      font-size: 10px
    }


</style>