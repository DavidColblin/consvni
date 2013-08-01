<?php
$URL="admin.php";
header ("Location: $URL");

    include "../script/dbString.php";
    mysql_select_db("colsvin");

    $a = "'".$_GET['dev']."'";

   mysql_query("DELETE FROM evennement WHERE ev_txt = $a");


mysql_close();
?>