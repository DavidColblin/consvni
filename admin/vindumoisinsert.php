<?php
$URL="admin.php";
header ("Location: $URL");

    include "../script/dbString.php";
          mysql_select_db("colsvin");

$new_image=$_FILES['imgvdmois']['name'];
$destination="images/vindumois/".$new_image;
$action = copy($_FILES['imgvdmois']['tmp_name'], "../images/vindumois/".$new_image);

            $descmois = mysql_real_escape_string($_POST[descvdmois]);
            $para1 = mysql_real_escape_string($_POST[para1]);
            $para2 = mysql_real_escape_string($_POST[para2]);
            $para3 = mysql_real_escape_string($_POST[para3]);
            $para4 = mysql_real_escape_string($_POST[para4]);
            $para5 = mysql_real_escape_string($_POST[para5]);

mysql_query("INSERT INTO rdepresse (rDePresse_title,rDePresse_img,para1, para2, para3, para4,para5)
            VALUES ('$descmois','$new_image', '$para1','$para2','$para3','$para4','$para5')  ");

mysql_close();

?>