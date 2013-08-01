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

 });    /*Ends document.ready*/

	</script>



<?php include "script/dbString.php";     /* user &Password: colsvin1DONT Forget to change to real server passwords*/
mysql_select_db("colsvin");

$events= mysql_query("Select * from events");
$boutique= mysql_query("Select * from boutique");
$rdepresse= mysql_query("Select * from rdepresse");
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
   <h1> Références</h1>
      <td id="Content" rowspan="2" colspan="2">
            <div class="box"  style="width:600px; min-height: 350px ;margin-bottom:40px ">


            <h3>8 ans d’études dans la Gastronomie et le “Monde du Vin”. <br/>Agréer formateur en Sommellerie en 2007. </h3>
              <br/><br/>
 <b>Mes certificats :</b>
    <ul>
<li> Participation au concours du meilleur jeune sommelier du Val de Loire 2000</li>  <br/>

<li> Mention Complémentaire Sommellerie                              </li> <br/>

<li> Certificat d'Aptitude Professionnelle Restauration et Hôtellerie </li><br/>

<li> Certificat d'Aptitude Professionnelle Agricole Viticulture et Oenologie   </li>   <br/>

<li> Mauritius Qualifications Authority Training Wine     </li>
     </ul>
            </div>


             <div class="box" id="revueDePresse" style="width: 60%; ">
               <h2>Autres Revues De Presse</h2>
             <div>
                <?php   include "script/rdepresse.php";    ?>
             </div>

                </div >

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
</style>
<![endif]-->

</html>