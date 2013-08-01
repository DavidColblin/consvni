<?php
$URL="admin.php";
header ("Location: $URL");

    include "../script/dbString.php";
    mysql_select_db("colsvin");

           mysql_query("INSERT INTO video (video_url,video_title)
            VALUES ('$_GET[vidurl]','$_GET[vidtitle]')  ");

mysql_close();
?>