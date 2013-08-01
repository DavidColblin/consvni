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
   <h1>Dégustation: <font size="20px">Convivialité et découverte autour des Grands Vins de Graves</font></h1>
      <td id="Content" rowspan="2" colspan="2">
            <div class="box"  style="width:600px; min-height: 350px ;margin-bottom:40px ">

              <p><b>25 Mai 2007</b>Convivialité, échanges passionnés et découverte. La soirée de dégustation des Grands Vins de Graves, orchestrée par Fabien Loiseau, Sommelier de Grays, à Legends lundi dernier aura permis aux spécialistes et aux amateurs de découvrir quelque uns des grands vins français encore relativement méconnus à Maurice.</p>
                <p><i>« Les grands vins blancs, curieusement, sont relativement peu commercialisés à Maurice en dépit du fait que ce sont des vins qui se marient magnifiquement avec les produits de la mer. L’objectif de cette dégustation était de se retrouver en toute convivialité pour discuter des vins et en particulier des Graves qui, à mon avis, ont une belle carte à jouer à Maurice » </i>souligne Fabien Loiseau.</p>
                <p>À l’épreuve de quelques-uns des meilleurs sommeliers de Maurice, c’est le Domaine de la Solitude 2003, un des meilleurs grands crus de l'appellation Pessac-Léognan qui est ressorti du lot. Tous les sommeliers ont été unanimes : le Domaine de la Solitude, citronné au palais, chaleureux et à l’acidité maîtrise est un vin d’apéritif exceptionnel.</p>
                <p>L'originalité de ce millésime tient de sa précocité (vendanges du 25 août au 6 septembre) et dans les saveurs exotiques inhabituelles du sauvignon (papaye, mangue, goyave, litchi) mêlées aux agrumes classiques (citron, pamplemousse). Exceptionnellement riche, soyeux, suave et équilibré. Une réussite à ne pas manquer, souligne le producteur.</p>
                <p>L’occasion de réunir une telle brochette de Sommeliers a aussi amené Fabien Loiseau a présenté deux vins rouge de la même région : Château Cantelys et Château Smith Haut Lafitte, les deux de 2001. C’est le Château Smith Haut Lafitte qui aura d’un point de vue général retenu l’attention.
Ce vin qui arbore une robe rubis pourpre foncé soutenue se singularise par son caractère « souple et rond » et son « côté évolué et délicat ».</p>
                <p>En règle général tous les vins présentés auront, d'une manière ou d'une autre, démontré un caractère intéressant susceptible de les faire connaître une belle aventure sous le soleil de l’île Maurice.</p>
                <p>Des grands vins qui, il faut aussi le souligner, ont également été magnifiquement mis en valeur par la brigade du chef de Legends, Fabio de Poli.</p>
            </div>


           <div class="box" id="revueDePresse" style="width: 60%; ">
               <h2>Autres Revues De Presse</h2>
             <div>
                <?php   include rdepresse.php;   ?>
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