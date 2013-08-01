<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <title>Consultant Vin</title>
  <link rel="stylesheet" href="css/main.css" type="text/css" />
 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js" type="text/javascript"></script>

    <script src="script/jQuery.bubbletip-1.0.6.js" type="text/javascript"></script>
   <link href="script/bubbletip/bubbletip.css" rel="stylesheet" type="text/css" />
   <script type="text/javascript" src="iepngfix_tilebg.js"></script>
  <script type="text/javascript" src="script/jquery.bxSlider.js"></script>
  <META HTTP-EQUIV="Content-Language" CONTENT="FR-FR">
</head>

<body style=" margin-top: -20px">
<style type="text/css">
img, div { behavior: url(iepngfix.htc); }
</style>




   <script type="text/javascript">
	$(document).ready(function() {

      $('#menu li').mouseover(function(){
               $(this).animate({'bottom': '5px' },200);


                $(this).dequeue();
            });//ends hover
            $('#menu li').mouseout(function(){
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

   $('#boiteresto').bubbletip($('#lienresto'),right);



    });    /*Ends document.ready*/

	</script>



<?php

include "script/dbString.php";     /* user &Password: colsvin1DONT Forget to change to real server passwords*/
mysql_select_db("colsvin");



$events= mysql_query("Select * from events");
$boutique= mysql_query("Select * from boutique");
$rdepresse= mysql_query("Select * from rdepresse");
$vindumois= mysql_query("Select * from vindumois");




mysql_close();

?>
       <div id="header">
                   <img src="images/logo.png" height="100%"/>
                   <b style="font-Size: 130px; bottom: 250px; font-family: chopin; color:darkred"> Consultant Vin </b>
       </div>
<?php include "script/menu.php"; ?>

        <p id="bgglass"></p>
<div id="grandeboite">



<table id="tblgrandeboite" border="0">
  <tr>
   <h1>Les femmes et le vin</h1>
      <td id="Content" rowspan="2" colspan="2">
            <div class="box"  style="width:600px; min-height: 350px ;margin-bottom:40px ">

              <p><b>Le club Femmes et vins </b>tiendra sa première soirée le 23 mars à l’hôtel Héritage. Le concept de ce club lancé par le magazine féminin Essentielle est de faire découvrir le vin aux femmes. Fabrice Loiseau, sommelier chez Grays, nous explique que souvent lors des dégustations, on trouve davantage d’homme que de femme. Le but est aussi de développer des soirées à thème. La soirée durera environ deux heures. «Il y aura entre cinq et six vins qui seront proposés de différents pays. Ce sera un cocktail dînatoire », explique Fabrice Loiseau.</p>
                <p>Il souligne que les femmes préfèrent les vins qui sont faciles à boire. Les vins du nouveau monde sont particulièrement appréciés car ils sont plus ronds. Un vin jeune est souvent plus dur et plus astringent. L’inscription au club pour six mois est de Rs 1500. Chaque soirée coûte Rs 1000. Le membre aura ainsi six vins ainsi que des hors-d’œuvre de l’hôtel. Pour s’inscrire, il faut contacter Fabien Loiseau sur le 423 5090 ou par mail à essentielle@lexpress.mu. Les hommes n’y sont pas admis.</p>
            </div>


           <div class="box" id="revueDePresse" style="width: 60%; ">
               <h2>Autres Revues De Presse</h2>
             <div>
                <?php  include rdepresse.php;     ?>
             </div>

                </div >

      <td id="boutique">Boutique<div class="box">

                <div id='boutiquescroll'>
                    <p>
                    <img src="1.jpeg" width="50px"/>
                 Lorem Ipsum is simply dummy text of the
                printin ing industry. Lorem Ipsum has been the industry's etsdus PageMaker including
                versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the
                printing and typesetting industry. Lorem Ipsum has b
                versions of Lorem Ipsum.</p>
                  <p>
                    <img src="images/11.jpeg" width="50px"/>
                 Lorem Ipsum is simply dummy text of the
                printing and typesetting industry. Lorem Ipsum has been the industry's etsdus PageMaker including
                versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the
                printing and typesetting industry. Lorem Ipsum has been the industry's etsdus PageMaker including
                versions of Lorem Ipsum.</p>
                  <p>
                    <img src="images/21.jpeg" width="50px"/>
                 Lorem Ipsum is simply dummy text of the
                printing and types. Lorem Ipsum has been the industry's etsdus PageMaker including
                versions of Lorem Ipsum.</p>
                </div>

                </div > </td>
  </tr>
  <tr>

      <td id="consulRestaurant">Consultant Restaurant
      <p style="display:none" id='lienresto'> Aller sur ConsultantRestaurant.com</p>
      <a id="boiteresto" href="#"><div class="box">
                <img src="1.jpeg" width="50px"/>  Lorem Ipsum is simply dummy text of the
                printing and typesetting industry. Lorem Ipsum has been the industry's etsdus PageMaker including
                versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the
                printing and typesetting industry. Lorem Ipsum has been the industry's etsdus PageMaker including
                versions of Lorem Ipsum.
              </div >     </a>
      </td>
  </tr>
</table>




</div><!--GrandeBoite -->

<div id="footer">
<h2>Nos Partenaires</h2>

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