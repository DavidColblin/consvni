<?php
$URL="admin.php";
header ("Location: $URL");

    include "../script/dbString.php";
    mysql_select_db("colsvin");

    $a = "'".$_GET['events']."'";

   mysql_query("DELETE FROM events WHERE events_text = $a");
//echo $a;

mysql_close();
?>