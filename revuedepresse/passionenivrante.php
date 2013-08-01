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
   <h1> Fabien Loiseau, apôtre du vin</h1>
      <td id="Content" rowspan="2" colspan="2">
            <div class="box"  style="width:600px; min-height: 350px ;margin-bottom:40px ">

              <p><b>Le vin</b> n’est pas juste un breuvage à base de raisin. Il y a tout un processus avant que cette boisson pétillante nous enivre de son goût fruité ou âcre. Rouge, blanc ou rosé, le vin a ses particularités ainsi que des vertus. </p>
                <p>Quel vin accompagne la viande rouge, le poulet, le poisson ou même le fromage ou les légumes ? Comment reconnaître les vins français, australien, espagnol, portugais ou chilien ? Fabien Loiseau, ancien sommelier de la compagnie Grays Ltd, offre des cours de formation et d’animations sur le vin. Ce dernier s‘est mis à son propre compte. “C’est une formation complète et globale sur les vins français et étrangers, permettant une appréhension méthodique et variée. Cette formation vise aussi à perfectionner des professionnels de la vente du vin en leur apportant une connaissance commerciale complète ainsi qu’une approche pratique des méca-nismes de l’hôtellerie et de la restauration”, dira le jeune sommelier, qui compte quinze ans d‘expérience dans le métier. Ainsi pendant six mois, et à raison de soixante heures environ, l’intéressé découvre l’univers du vin, les vignobles, les cépages, entre autres.</p>
                <p>Comme Obélix qui est tombé dans la potion magique tout petit, Fabien, lui, tombe tout simplement... dans le vin. Originaire de la Vallée de la Loire à côté d‘Angers (Nantes), il a grandi parmi les cliquetis des casseroles ou autres ustensiles de cuisine. A quatorze ans, il enfile son tablier de serveur et se lance dans la restauration. La gastronomie ne l’intéressant guère, il découvre sa passion pour le vin. “Je voulais un métier qui évolue. Connaître les différents terroirs. Le vin est intéressant. C’est vivant. On découvre. On apprend des choses et on voyage beaucoup. J’ai passé des tests. Une bonne culture sur les vins m‘a beaucoup aidé”, confie-t-il.</p>
                <p>Un bon odorat, un bon palais et une bonne connaissance sont nécessaires à une bonne dégustation. Ce n’est surtout pas Fabien qui dira le contraire. Sommelier de formation depuis dix ans, le métier de ce passionné consiste à créer la carte des vins, conseiller les gens et à assurer le service. “Le sommelier peut aussi être un consultant dans une compagnie spécialisée”, fait-il ressortir. Aujourd’hui, il fait partie de plusieurs clubs de dégustation et est responsable de formations sur les vins et spiritueux. Il forge ses prestations de sommelier sur une connaissance approfondie des vins et vignobles français et étrangers, de la gastronomie et des arts de la table, du marché des vins en Europe, et des attentes tant des professionnels que des amateurs de vin. Commence alors le grand parcours de sommelier. </p>
                <p>Première étape : il passe deux ans dans un vignoble du Domaine de L’Enchantoire, de la Vallée de la Loire afin de connaître les rudiments du vin, la viticulture et l’oenologie. Puis, il met le cap sur Paris et travaille avec Philippe Faure-Brac, meilleur sommelier du monde, qu’il qualifie d‘expérience enrichissante. Ensuite conseiller à la cave Fauchon. En 2001, il s’envole pour les Etats-Unis et intègre pendant trois mois “Seeger’s, Relais et Château” à Atlanta. “C‘était la période des attentats à New York, pourtant Atlanta est loin mais il y eu des répercussions. Je me suis enfui”, confie-t-il avec un petit sourire. </p>
                <p>Retour en France où il travaille dans un vignoble comme conseiller. Là, il devait expliquer aux gens comment fabriquer du vin. Après deux ans dans les vignes bordelaises, il a travaillé au restaurant “Les Sources de Caudalies” où il y avait des vignobles, restaurants et des spas de vinothérapie (lieu où les gens se bai-gnent dans le vin). Un “Wine Tour” pendant un mois en Australie le fait apprécier les vins australiens. Après Bordeaux, les îles Maldives, il pose finalement ses bagages sur les sables fins de Maurice. En 2006, il rejoint le Belle Mare Plage Hotel comme sommelier-formateur pendant six mois. Ensuite, il devient chef sommelier exécutif chez Grays Ltd pendant un an.</p>
                <p>Avec un bagage aussi garni et enrichissant, il connaît le vin... sur le bout des doigts. Quel conseil a-t-il à donner aux jeunes qui veulent se lancer dans la profession ? “Il faut être passionné. Faire un travail personnel, des recherches, s‘ouvrir au monde du vin et savoir écouter les clients. Bac+2 c’est le minimum requis pour des études approfondies”, dit-il. Savoir goûter,mémoriser et apprendre, on arrive à différencier un Bordeaux ou un Bourgogne. “Il existe une variété de cépages. Il faut apprendre à mémoriser la syrah car on la retrouve dans le vin. Chaque terroir donne un goût particulier”, dira le sommelier, qui vient de lancer aussi le club “Les femmes et le vin”.</p>

                <b>DEGUSTER UN BON VIN:</b>
                <p>Avoir un bon palais. A éviter le tabac et manger épicé.
Entre 10h et midi, idéal pour déguster un bon vin.</p>

<b>BIO EXPRESS</b>
                <p>Nom : Fabien Loiseau</p>
                <p>Nationalité : française. Depuis deux ans à Maurice</p>
                <p>Profession : sommelier</p>
                <p>Vins préférés : vin Bordeaux rouge et le Sancerre (blanc français)</p>
                <p>Dernier livre lu : La revue des vins de France</p>
                <p>Dernier film vu : Babel avec Brad Pitt</p>
                <p>Ce qu’il aime à Maurice : le soleil et la tranquilité du pays.</p>

            </div>


           <div class="box" id="revueDePresse" style="width: 60%; ">
               <h2>Autres Revues De Presse</h2>
             <div>
                <?php  include rdepresse.php;   ?>
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