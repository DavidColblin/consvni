<?php
$URL="admin.php";
header ("Location: $URL");

    include "../script/dbString.php";
          mysql_select_db("colsvin");

$new_image=$_FILES['imgEvent']['name'];
$action = copy($_FILES['imgEvent']['tmp_name'], "../images/evennement/".$new_image);

                        $txtEvent = mysql_real_escape_string($_POST[txtEvent]);

 mysql_query("INSERT INTO  evennement (ev_img, ev_txt)
            VALUES ('$new_image', '$txtEvent')  ");                   /*'$_POST[txtEvent]',*/  /*ev_txt,*/

    mysql_close();

?>