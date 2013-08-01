<?php
$URL="admin.php";
header ("Location: $URL");

    include "../script/dbString.php";
    mysql_select_db("colsvin");

    $a = "'".$_GET['vid']."'";

   mysql_query("DELETE FROM video WHERE video_title = $a");
//echo $a;

mysql_close();
?>