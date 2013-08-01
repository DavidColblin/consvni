<?php
$URL="admin.php";
header ("Location: $URL");

    include "../script/dbString.php";
    mysql_select_db("colsvin");

    $a = "'".$_GET['vindumois']."'";

   mysql_query("DELETE FROM rdepresse WHERE rDePresse_title = $a");
//echo $a;

mysql_close();
?>