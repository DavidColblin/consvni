<?php

    session_start();
    if (!isset($_SESSION['log']))
        {
          header("Location: http://www.consultantvin.com");
        }

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <title>Consultant Vin</title>
  <link rel="stylesheet" href="../css/main.css" type="text/css" />
 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js" type="text/javascript"></script>

    <script src="../script/jQuery.bubbletip-1.0.6.js" type="text/javascript"></script>
   <link href="../script/bubbletip/bubbletip.css" rel="stylesheet" type="text/css" />
   <script type="text/javascript" src="../iepngfix_tilebg.js"></script>
  <script type="text/javascript" src="../script/jquery.bxSlider.js"></script>
  <META HTTP-EQUIV="Content-Language" CONTENT="FR-FR">
</script>
</head>

<body>
<style type="text/css">
img, div { behavior: url(iepngfix.htc); }
</style>

<?php
include "../script/dbString.php";     /* user &Password: colsvin1DONT Forget to change to real server passwords*/
mysql_select_db("colsvin");

$events= mysql_query("Select * from events");
$boutique= mysql_query("Select * from boutique");
$rdepresse= mysql_query("Select * from rdepresse");
$eve= mysql_query("SELECT * FROM evennement");
$vindumois= mysql_query("Select * from vindumois");
$video= mysql_query("Select * from video");

mysql_close();

?>

<style>

    li {
      list-style-type:none;
      font-family: Verdana, Arial, Helvetica, sans-serif;
      font-size: 12px;
    }
    a {
      text-decoration: none;
    }

    .hide {
      display:none;
    }
    .show {
      display:block;
    }



</style>
<script>
    $(document).ready(function(){
        $("form").addClass("hide");

        $('#ajvideo').click(function(){
            $("form").removeClass("show");
            $("#vidbox").toggleClass("show");
        });
        $('#ajboutique').click(function(){
              $("form").removeClass("show");
            $("#boutiquebox").toggleClass("show");
        });
         $('#ajevennement').click(function(){
              $("form").removeClass("show");
            $("#evennementbox").toggleClass("show");
        });
         $('#ajvindumois').click(function(){
              $("form").removeClass("show");
            $("#vindumoisbox").toggleClass("show");
        });
         $('#ajrevuedepresse').click(function(){
              $("form").removeClass("show");
            $("#revuedepressebox").toggleClass("show");
        });
        //EFFACER
         $('#efvideo').click(function(){
                 $("form").removeClass("show");
            $("#dvidbox").toggleClass("show");
        });
        $('#efboutique').click(function(){
              $("form").removeClass("show");
            $("#dboutiquebox").toggleClass("show");
        });
         $('#efevennement').click(function(){
              $("form").removeClass("show");
            $("#devennementbox").toggleClass("show");
        });
         $('#efvindumois').click(function(){
              $("form").removeClass("show");
            $("#dvindumoisbox").toggleClass("show");
        });
         $('#efrevuedepresse').click(function(){
              $("form").removeClass("show");
            $("#drevuedepressebox").toggleClass("show");
        });
    });

</script>

<p id="bgglass"></p>
<div id="grandeboite">

     <h1><img src="../images/logo.png" height="90px" />Panel D'Administrateur</h1>
                      <a href="http://www.consultantvin.com"> Retour Home    </a>
    <table border="0" id="tblgrandeboite">
        <tr><td><h2>Ajouter</h2>
            <ul>
                <li><a href="#" id="ajvideo">Video</a></li>
                 <li><a href="#" id="ajboutique">Boutique</a></li>
                  <li><a href="#" id="ajevennement">Evennement</a></li>
                   <li><a href="#" id="ajvindumois">Vin Du Mois</a></li>
                    <li><a href="#" id="ajrevuedepresse">Revue De Presse</a></li>
            </ul>


            <h2>Effacer</h2>
            <ul>
                <li><a href="#" id="efvideo">Video</a></li>
                 <li><a href="#" id="efboutique">Boutique</a></li>
                  <li><a href="#" id="efevennement">Evennement</a></li>
                   <li><a href="#" id="efvindumois">Vin Du Mois</a></li>
                    <li><a href="#" id="efrevuedepresse">Revue De Presse</a></li>
            </ul>
        </td>
        <!----- AJOUTER -->
                                    <td rowspan="2" style="padding-left:50px">

             <form method="get" action="vidinsert.php" id="vidbox">
                <table><h3>Ajouter Video De Youtube</h3>
               <tr><td>Titre</td><td><textarea rows="4" cols="20" name="vidtitle"></TEXTAREA></td> </tr>
                <tr><td>Code De Youtube</td><td><textarea rows="4" cols="20" name="vidurl"></TEXTAREA></td> </tr>
                <td><input type="submit" /></td>
                </table>
             </form>
             <form method="post" id="boutiquebox" enctype="multipart/form-data" action="boutiqueinsert.php">
                <h3>Ajouter Item De Boutique</h3>
                Image: <br /><input type="file" name="imgboutique"/><br/>     <br/>
			<textarea rows="4" cols="20" name="titreBoutique">Titre</TEXTAREA><br/>
                 <textarea rows="4" cols="20" name="descBoutique">Description</TEXTAREA><br/>
                <input type="submit" /><br/>
            </form>

             <form id= "evennementbox" method="post" enctype="multipart/form-data" action="event.php">
                <h3>Ajouter Evennement</h3>
                Image: <input type="file" name="imgEvent"/><br/>
                <textarea rows="4" cols="20" name="txtEvent">Titre</TEXTAREA><br/>
                <input type="submit" />
             </form>

            <form id="revuedepressebox" method="get" enctype="multipart/form-data" action="revueinsert.php">
              <h3>Ajouter Revue De Presse</h3>
                Titre:<input type="text" name="evTitre"/><br/>
                </br>Paragraphes:<br/>
                <textarea rows="4" cols="20" name="para1"></TEXTAREA><br/>
                <textarea rows="4" cols="20" name="para2"></TEXTAREA><br/>
                <textarea rows="4" cols="20" name="para3"></TEXTAREA><br/>
                <textarea rows="4" cols="20" name="para4"></TEXTAREA><br/>
               <textarea rows="4" cols="20" name="para5"></TEXTAREA><br/>
                <textarea rows="4" cols="20" name="para6"></TEXTAREA><br/>
                <textarea rows="4" cols="20" name="para7"></TEXTAREA><br/>
                <input type="submit" /><br/>
            </form>

            <form id="vindumoisbox" method="post" enctype="multipart/form-data" action="vindumoisinsert.php">
                <h3>Ajouter Vin Du Mois</h3>
               <br/>Image: <input type="file" name="imgvdmois"/><br/>
               Titre:<input type="text" name="descvdmois"/><br/> <br/>
                Paragraphes:<br/>
              <textarea rows="4" cols="20" name="para1">A paraitre a la page d'Acceuil</TEXTAREA>  <br/>
              <textarea rows="4" cols="20" name="para2">A paraitre a la page d'Acceuil</TEXTAREA><br/>
              <textarea rows="4" cols="20" name="para3"></TEXTAREA><br/>
              <textarea rows="4" cols="20" name="para4"></TEXTAREA><br/>
             <textarea rows="4" cols="20" name="para5"></TEXTAREA><br/>
              <input type="submit" /><br/>
            </form>

             <!----- EFFACER -->
                   <form id="dboutiquebox" method="get" action="delboutique.php" >
                      Item:
                      <select name='boutiquetit'>
                            <?php while( $bou = mysql_fetch_array($boutique) )
                         {  echo "<option value='". $bou['boutique_title']."'>".$bou['boutique_title'] . "</option>";  }//ends while ?>
                       </select>
                      <input type="submit"/>
                   </form>

                    <form id="devennementbox" method="get" action="devennementbox.php">
                      Item: <select name='dev'>
                          <?php while( $e = mysql_fetch_array($eve) )
                         {  echo "<option value='". $e['ev_txt']."'>". $e['ev_txt'] . "</option>";  }//ends while ?>
                                            </select>
                      <input type="submit"/>
                   </form>

                   <form id="dvindumoisbox" method="get" action="dvindumoisbox.php">
                      Item: <select name='vindumois'>
                         <?php while( $rdepress = mysql_fetch_array($rdepresse) )
                         {  echo "<option value='". $rdepress['rDePresse_title']."'>". $rdepress['rDePresse_title'] . "</option>";  }//ends while ?>
                      </select>
                      <input type="submit"/>
                   </form>

                   <form id="drevuedepressebox" method="get" action="drevuedepressebox.php">
                      Item: <select name='events'>
                             <?php while( $ev = mysql_fetch_array($events) )
                         {  echo "<option value='". $ev['events_text']."'>".$ev['events_text'] . "</option>";  }//ends while ?>
                      </select>
                      <input type="submit"/>
                   </form>

                   <form id="dvidbox" method="get" action="dvidbox.php">
                      Item: <select name='vid'>
                       <?php while( $vid = mysql_fetch_array($video) )
                         {  echo "<option value='". $vid['video_title']."'>". $vid['video_title'] . "</option>";  }//ends while ?>
                      </select>
                      <input type="submit"/>
                   </form>
     </td></tr>



    </table>



</div><!--GrandeBoite -->


</body>
                  <!--[if IE]>
<style>
#menu li {font-size: 15px;}
#menu {left: 1px}
#menu {background: #3C000A;}
#vinDuMois {height: 500px;}
#tblgrandeboite #vinDuMois .box{width: 300px;}
</style>
<![endif]-->

</html>