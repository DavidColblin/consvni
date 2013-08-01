<?php
$URL="admin.php";
header ("Location: $URL");

    include "../script/dbString.php";
    mysql_select_db("colsvin");

    $a = "'".$_GET['boutiquetit']."'";

   mysql_query("DELETE FROM boutique WHERE boutique_title = $a");

mysql_close();
?>