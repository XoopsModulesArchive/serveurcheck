<?php

// ------------------------------------------------------------------------- //

// ------------------------------------------------------------------------- //
# ORIGINAL FILE INFO                                                         //
# Module              : ServeurCheck                                               //
# Filename            : index.php                                              //
# Purpose             : Ce script teste des connections sur IP ou DNS suivant le port  //
# Version Xoops RC3   : Levelzero       //
# support             : levelzero@levelzero-spx.org - www.levelzero.fr.st   //
###############################################################################

include '../../mainfile.php';
include '../../header.php';
//ptite variable standard...
$ModName = 'ServeurCheck';

global $xoopsDB, $xoopsConfig;
if ('ServeurCheck' == $xoopsConfig['startpage']) {
    $xoopsOption['show_rblock'] = 1;

    require XOOPS_ROOT_PATH . '/header.php';

//make_cblock();
        //echo "<br>";
} else {
    $xoopsOption['show_rblock'] = 0;

    require XOOPS_ROOT_PATH . '/header.php';
}
OpenTable();
?>

<div align='center'> 
  <p><img src="images/logoserveurcheck.jpg" width="300" height="150"></p>
  <table border="0" cellpadding="1" cellspacing="2" width="80%">
		<tr>
			<td width="40%" bgcolor="#01000d"><b>Serveur</b></td>      <!-- L'entete du tablo -->
			<td bgcolor="#01000d" width="35%"><b>Desc.</b></td>        
			<td bgcolor="#01000d"><b>Port</b></td>
			<td bgcolor="#01000d"><b>Status</b></td>
		</tr>
		
		
		
		<tr>
			<td width="40%">levelzero.darktech.org</td>     <!-- A Changer !! -->
			<td width="35%">Serveur Web ZeRO</td>           <!-- A Changer !! -->
			<td>80</td>                                      <!-- A Changer !! -->
			<td>
			
			
			<?php
// Le debut du ptit code a la con pour tester si ca repond au bout du fil :).
// Remplacer les valeurs des deux variables ($host, $port) ci dessous par les votres
// Ca peut etre une adresse IP (xxx.xxx.xxx.xxx) ou DNS (levelzero.darktech.org)
// Il faut specifier aussi le port (en general 80 pour un site web), pratik pour tester des serveurs Emule ou Counterstrike
//

// Les variables (a remplacer par les votres...)
$host = 'levelzero.darktech.org';          // !!! a changer!!!
$port = '80';                              // !!! a changer!!!

// On ouvre la connection a l'adresse et au port specifié
$fp = fsockopen((string)$host, $port);

// Si Erreur, cest mort, on affiche un carre rouge :), sinon un vert.
if (!$fp) {
    echo("<img src='http://levelzero.darktech.org/html/modules/ServeurCheck/images/notOk.gif'> Serveur Offline.");
} else {
    echo("<img src='http://levelzero.darktech.org/html/modules/ServeurCheck/images/Ok.gif'> Connection Ok.");
}

?>
			
			
			
			</td>
		</tr>
		
<!-- Fin de la ligne du tableau, on refait la meme chose pour la deuxieme ligne...
Vous pouvez remplacer les valeurs par les votres (comme plus haut)

et bien sur mettre autant de lignes que vous voulez. :)

 -->
		
		<tr>
			<td width="40%">levelzero.darktech.org</td> <!-- A Changer !! -->
			<td width="35%">Emule</td>                  <!-- A Changer !! -->
			<td>81</td>                                 <!-- A Changer !! -->
			<td>
			
			<?php
// Comme pour la premiere ligne on re-remplace
$host = 'levelzero.darktech.org';             // !!! a changer!!!
$port = '81';                                 // !!! a changer!!!
$fp = fsockopen((string)$host, $port);
if (!$fp) {
    echo("<img src='http://levelzero.darktech.org/html/modules/ServeurCheck/images/notOk.gif'> Serveur Offline.");
} else {
    echo("<img src='http://levelzero.darktech.org/html/modules/ServeurCheck/images/Ok.gif'> Connection Ok.");
}?>
			</td>
		</tr>
		
		<!-- 3eme ligne du tablo -->
		
		
		<tr>
			<td width="40%">levelzero.darktech.org</td>     <!-- A Changer !! -->
			<td width="35%">Serveur FTP ZeRO</td>            <!-- A Changer !! -->
			<td>21</td>                                      <!-- A Changer !! -->
			<td>
			
			<!-- le ptit code encore ... -->
			<?php
$host = 'levelzero.darktech.org';       // !!! a changer!!!
$port = '21';                           // !!! a changer!!!
$fp = fsockopen((string)$host, $port);
if (!$fp) {
    echo("<img src='http://levelzero.darktech.org/html/modules/ServeurCheck/images/notOk.gif'> Serveur Offline.");
} else {
    echo("<img src='http://levelzero.darktech.org/html/modules/ServeurCheck/images/Ok.gif'> Connection Ok.");
}
?>
			
			</td>
		</tr>
		
		<!-- encore une ligne -->
		
		<tr>
			<td width="40%">levelzero.darktech.org</td>        <!-- A Changer !! -->
			<td width="35%">Serveur ShoutCast ZeRO</td>        <!-- A Changer !! -->
			<td>8000</td>                                      <!-- A Changer !! -->
			<td>
			<!-- le code -->
			<?php
$host = 'levelzero.darktech.org';        // !!! a changer!!!
$port = '8000';                         // !!! a changer!!!
$fp = fsockopen((string)$host, $port);
if (!$fp) {
    echo("<img src='http://levelzero.darktech.org/html/modules/ServeurCheck/images/notOk.gif'> Serveur Offline.");
} else {
    echo("<img src='http://levelzero.darktech.org/html/modules/ServeurCheck/images/Ok.gif'> Connection Ok.");
}
?>
			
			</td>
		</tr>
		
		<!-- Allez... la derniere -->

		<tr>
			<td width="40%">kokoedgiv.darktech.org</td>   <!-- A Changer !! -->
			<td width="35%">Serveur FTP TouTaToK</td>     <!-- A Changer !! -->
			<td>22</td>                                    <!-- A Changer !! -->
			<td>
			
			<?php
$host = 'kokoedgiv.darktech.org';   // !!! a changer!!!
$port = '22';                       // !!! a changer!!!
$fp = fsockopen((string)$host, $port);
if (!$fp) {
    echo("<img src='http://levelzero.darktech.org/html/modules/ServeurCheck/images/notOk.gif'> Serveur Offline.");
} else {
    echo("<img src='http://levelzero.darktech.org/html/modules/ServeurCheck/images/Ok.gif'> Connection Ok.");
}
?>
			<!-- Voila on referme tout et salut... -->
			</td>
		</tr>
	</table>
  <p><font size="-2">(-<a href="mailto:levelzero@levelzero-spx.org">levelzero</a>-)</font></p>
</div>

<?php
CloseTable();
require XOOPS_ROOT_PATH . '/footer.php';
?>
