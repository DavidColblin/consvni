<?php
             $URL="admin.php";
header ("Location: $URL");

    include "../script/dbString.php";
            mysql_select_db("colsvin");

            $para1 = mysql_real_escape_string($_GET[para1]);
            $para2 = mysql_real_escape_string($_GET[para2]);
            $para3 = mysql_real_escape_string($_GET[para3]);
            $para4 = mysql_real_escape_string($_GET[para4]);
            $para5 = mysql_real_escape_string($_GET[para5]);
            $para6 = mysql_real_escape_string($_GET[para6]);
            $para7 = mysql_real_escape_string($_GET[para7]);

           mysql_query("INSERT INTO events (events_text,events_link,events_para1,events_para2,events_para3,events_para4,events_para5,events_para6,events_para7)
            VALUES ('$_GET[evTitre]','revue.php' ,'$para1','$para2','$para3','$para4','$para5','$para6','$para7')  ");

    mysql_close();
 
          ?>