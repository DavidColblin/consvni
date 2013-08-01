<?php
$URL="admin.php";
header ("Location: $URL");

    include "../script/dbString.php";
          mysql_select_db("colsvin");

$new_image=$_FILES['imgboutique']['name'];
$destination="images/boutique/".$new_image;
$action = copy($_FILES['imgboutique']['tmp_name'], "../images/boutique/".$new_image);

$descboutique = mysql_real_escape_string($_POST[descBoutique]);
$titboutique = mysql_real_escape_string($_POST[titreBoutique]);

 mysql_query("INSERT INTO boutique (boutique_text,boutique_img,boutique_title)
            VALUES ('$descboutique','$new_image','$titboutique')  ");

    mysql_close();

?>