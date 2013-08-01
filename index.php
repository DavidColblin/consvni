<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <title>Consultant Vin</title>
<?php include "script/header.php"; ?>
  <META HTTP-EQUIV="Content-Language" CONTENT="FR-FR">
</head>

<body>
<style type="text/css">
img, div { behavior: url(iepngfix.htc); }
</style>

 <script type="text/javascript">
          $(document).ready(function() {
        $('#menu li').mouseover(function()
      {
               $(this).animate({'bottom': '5px' },200);
               $(this).dequeue();
       });//ends hover
      $('#menu li').mouseout(function()
      {
                $(this).animate({'bottom': '0px' },200);
                $(this).dequeue();
      });//ends hover

 $('#boutiquescroll').bxSlider({
    mode: 'fade',
    speed: 1000,
    pause: 5000,
    auto: true,
    controls: true,
    auto_direction: 'right',
    next_text: 'suivant',
    prev_text: 'précédent',
    wrapper_class: 'boutique'
});

var right = {deltaDirection: 'up', delayShow: '500'};
 $('#a1').bubbletip($('#img1'),right);
 $('#a2').bubbletip($('#img2'),right);
 $('#a3').bubbletip($('#img3'),right);
 $('#a4').bubbletip($('#img4'),right);
 $('#a5').bubbletip($('#img5'),right);
 $('#a6').bubbletip($('#img6'),right);
 $('#a11').bubbletip($('#img11'),right);
 $('#a12').bubbletip($('#img12'),right);
 $('#a13').bubbletip($('#img13'),right);
 $('#boiteresto').bubbletip($('#lienresto'),{deltaDirection: 'up', delayShow: '100'});
 $('#event1').bubbletip($('#event1p'),{deltaDirection: 'up', delayShow: '100'});
 $('#boitevmois').bubbletip($('#lienvmois'),{deltaDirection: 'up', delayShow: '100'}); 
 });    /*Ends document.ready*/

	</script>



<?php include "script/dbString.php";
mysql_select_db("colsvin");

$events= mysql_query("Select * from events");
$boutique= mysql_query("Select * from boutique");
$rdepresse= mysql_query("Select * from rdepresse ORDER BY rDePresse_id DESC LIMIT 1");
$eve= mysql_query("SELECT * FROM evennement ORDER BY id DESC LIMIT 1");
$vindumois= mysql_query("Select * from vindumois");
$video= mysql_query("Select * from video ORDER BY video_id DESC LIMIT 1");

mysql_close();
?>

<?php include "script/headerdiv.php" ?>

  <center>
<?php include "script/menu.php"; ?>
 </center>

<p id="bgglass"></p>
<div id="grandeboite">

<table id="tblgrandeboite" border="0">
  <tr>
      <td id="eventsCal" rowspan="2">

              <div id="videos"  class="feed">
              <h2> <!--[if IE]> <h2 style="font-size:15px"><![endif]-->Souscription Rapide<!--[if IE]> </h2><![endif]--> </h2>

              <form method="post" action="http://www.formstack.com/forms/index.php" >
                   <input type="hidden" name="form" value="951745" />
                   <input type="hidden" name="viewkey" value="OTAk98Sv5J" />
                   <table ><tr ><td>Nom:</td><td style="padding:0px" ><input  type="text"  name="name"/></td></tr>
                    <tr><td>   Surnom:</td><td style="padding:0px" type="text"><input style="padding:0px" type="text"  name="sds"/></td ></tr>
                      <tr><td>  eMail:</td><td style="padding:0px" type="text"><input style="padding:0px" type="text" name="email"/></td ></tr>
                     <tr><td>Téléphone:</td><td style="padding:0px" type="text"><input style="padding:0px" type="text" name="tl"/></td ></tr>
                    <tr><td><button name="sous"> Inscrire! </button>  </td></tr>
                     </table>
                     </form>
               </div>         <!-- video width:250, height: 200 find and replace php-->
               <br/><br/>Evénnements
               <div class="box">


                   <p id="event1p" style="display:none">Evénnements</p>
                   <a href="events.php" id="event1">
                   <?php $ev = mysql_fetch_array($eve);
                    echo $ev['ev_txt']. '<img width="100%" src="images/evennement/'.$ev['ev_img'].'"/>' ;
                    ?>
                    </a>
             </div>
             <div id="video" class="feed" >
                    <?php $vid = mysql_fetch_array($video);
                    $clip =  $vid['video_url'];
                    $a = str_replace("425", "250", $clip );
                    $b = str_replace("344", "200", $a );
                    $clip = $b;

                    echo "<p>". $clip ."</p>";
                         ?>

               <a href="videos.php">Voir les autres videos</a>
             </div>
            </td>
      <td id="vinDuMois" width="600">Vin du mois
    <p style="display:none" id='lienvmois'>Suivez le Vin Du Mois</p>
      <a id="boitevmois" href="vindumois.php">
      <div class="box" id="vindumoisscroll">
                <?php while( $rdepressea = mysql_fetch_array($rdepresse) )  {
                    echo '<b>'. $rdepressea['rDePresse_title'].'</b><p><img width="150px" src="images/vindumois/'.$rdepressea['rDePresse_img']. '" />'.
                    $rdepressea['para1'].'</p><p>'.
                    $rdepressea['para2'].'</p>'    ;
                    }//ends while ?>

             </div > </a> </td>
     <td id="boutique">Boutique<div class="box">
                     <div id='boutiquescroll'>

         <?php while( $bou = mysql_fetch_array($boutique) )
                    {  echo "<p><img width='50px' src='images/boutique/". $bou['boutique_img'] . "' />" . $bou['boutique_text']."</p>";
                        }//ends while ?>

                </div>
                       <a href="boutique.php">Visitez Notre Boutique</a>
                </div >
     </td>
  </tr>
  <tr>
      <td id="revueDePresse">Revue De Presse <div class="box">
             <div>
                <?php
                    include "script/rdepresse.php";
                ?>
             </div>

                </div > </td>
      <td id="consulRestaurant">Consultant Restaurant
      <p style="display:none" id='lienresto'> Aller sur ConsultantRestaurant.com</p>
      <a id="boiteresto" href="#"><div class="box">
                <img src="css/resto.jpg" width="50px"/> Consultant restauration opère dans le monde entier, auprès des écoles Hôtelières, des hôtels de luxe, des restaurant, des universités.      
        <ul>
        <li>Fidéliser votre clientèle.</li>
         <li>Mieux travailler avec vos partenaires.</li>
         <li>Augmenter votre chiffres d'affaires tout en garant vos qualité de service.</li>
         <li>Mieux valoriser vos produits.</li>
         <li>L'aide a l'étude de nouveau concept de restauration.</li>
         <li>Former votre personnel de restauration diriger vers l'accueil, la gestion, et la vente.</li>
         <li>Développer votre marketing de promotion.</li>
         <li>Animation de votre site.</li>
         <li>Appuis marketing.</li>
        </ul>
                <p>Consultant restauration s'appuis sur des acquis de restauration a l'européenne, ainsi qu'un parcours dans les plus grand site de restauration du monde, “Tour d'argent”, “Relais et château”, Lodge, “Macaron michelin”, Ecole Hôtelières, Chaine Hôtelières etc...
</p>                  <p>
-Etude de dossier sur demande a l'adresse suivante: floiseau@consultantrestauration.com  </p>
      </div >     </a>
      </td>
  </tr>
</table>

</div><!--GrandeBoite -->

<div id='footer'>
<h2>Nos Partenaires</h2>
         <?php include "script/sponsors.php";  ?>
</div>
</body>
<!--[if IE]>
    <style>
    #menu li {font-size: 15px;}
    #menu {left: 1px}
    #menu {background: #3C000A;}
    #vinDuMois {height: 500px;}
    #tblgrandeboite #vinDuMois .box{width: 300px;}
    #logo{ width: 100px}
    </style>
<![endif]-->

</html>