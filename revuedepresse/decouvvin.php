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
   <h1>À la découverte de nouveaux vins</h1>
      <td id="Content" rowspan="2" colspan="2">
            <div class="box"  style="width:600px; min-height: 350px ;margin-bottom:40px ">

              <p><b>Pour la première fois, des sommeliers de différents hôtels de l’île se sont rencontrés</b> et ce, à l’instigation du sommelier Fabien Loiseau de la compagnie Grays. Les hôtels Legends, Belle-Mare Plage, entre autres, étaient représentés autour d’un excellent dîner, servi à l’hôtel One & Only Touessrock, en présence de son directeur général, Jörg Roterberg. Ce dîner a été pour eux un moment de partage de connaissances et de découverte de nouveautés grâce aux vins proposés ce soir-là.</p>
                <p>Ces sommeliers ont la connaissance et la passion quasi palpables dans le regard. Dans leurs veines coule l’amour pour le vin. Ils s’animent dès qu’ils en sentent le parfum si riche ou en goûtant les saveurs qui se libèrent sur leur palais. À les voir, le vin ne se boit pas, mais doit être savouré, contemplé, senti. Il est ainsi investi de noblesse. Cette rencontre conviviale leur a surtout donné la chance de découvrir six vins blancs de la maison Paul Jaboulet Aîné. Une véritable découverte exquise, que ce soit avec le Saint-Peray, le Saint-Joseph ou l’Hermitage. Ces vins ne pouvaient qu’être rehaussés et appréciés en se mariant à la perfection au foie gras, à la langouste ou au veau servis lors du dîner. Cette première rencontre, on s’en doute bien, est le prélude d’une longue série…</p>


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