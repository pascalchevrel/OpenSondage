<?php
//==========================================================================
//
//Université de Strasbourg - Direction Informatique
//Auteur : Guilhem BORGHESI
//Création : Février 2008
//
//borghesi@unistra.fr
//
//Ce logiciel est régi par la licence CeCILL-B soumise au droit français et
//respectant les principes de diffusion des logiciels libres. Vous pouvez
//utiliser, modifier et/ou redistribuer ce programme sous les conditions
//de la licence CeCILL-B telle que diffusée par le CEA, le CNRS et l'INRIA 
//sur le site "http://www.cecill.info".
//
//Le fait que vous puissiez accéder à cet en-tête signifie que vous avez 
//pris connaissance de la licence CeCILL-B, et que vous en avez accepté les
//termes. Vous pouvez trouver une copie de la licence dans le fichier LICENCE.
//
//==========================================================================
//
//Université de Strasbourg - Direction Informatique
//Author : Guilhem BORGHESI
//Creation : Feb 2008
//
//borghesi@unistra.fr
//
//This software is governed by the CeCILL-B license under French law and
//abiding by the rules of distribution of free software. You can  use, 
//modify and/ or redistribute the software under the terms of the CeCILL-B
//license as circulated by CEA, CNRS and INRIA at the following URL
//"http://www.cecill.info". 
//
//The fact that you are presently reading this means that you have had
//knowledge of the CeCILL-B license and that you accept its terms. You can
//find a copy of this license in the file LICENSE.
//
//==========================================================================

session_start();

include_once('variables.php');
include_once( 'i18n.php' );
if (file_exists('bandeaux_local.php')) {
  include_once('bandeaux_local.php');
} else {
  include_once('bandeaux.php');
}

//affichage de la page
echo '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">'."\n";
echo '<html>'."\n";
echo '<head>'."\n";
echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8">'."\n";
echo '<title>'.NOMAPPLICATION.'</title>'."\n";
echo '<link rel="stylesheet" type="text/css" href="style.css">'."\n";
echo '</head>'."\n";
echo '<body>'."\n";

framanav();

//debut du formulaire
echo '<form name=formulaire action="apropos.php" method="POST">'."\n";

//bandeaux de tete
logo();
bandeau_tete();
bandeau_titre(_("About"));
sous_bandeau();

echo '<div class=corps>'."\n";

echo <<<mentions
<ul>
  <li><a href="#faq">Questions fréquentes</a></li>
  <ul>
    <li><a href="#framadate">Qu'est-ce que Framadate
?</a></li>
    <li><a href="#studs">Quelles différences entre
Framadate et STUdS ?</a></li>
    <li><a href="#doodle">Quelles différences entre
Framadate et Doodle ?</a></li>
    <li><a href="#longevite">Mon sondage
restera-t-il longtemps en ligne ?</a></li>
  </ul>
  <li><a href="#mentions">Mentions légales</a></li>
  <li><a href="#credits">Crédits</a></li>
  <li><a href="#licence">Licence</a></li>
</ul>
<hr style="width: 100%; height: 2px;">
<h1><a name="faq"></a>Questions fréquentes</h1>
<h3><a name="framadate"></a>Qu'est-ce que
Framadate ?</h3>
Framadate est un service en ligne permettant de planifier un
rendez-vous rapidement et simplement. Aucune inscription préalable
n'est nécessaire.<br>
Framadate est un service du<a href="http://framasoft.org">
réseau Framasoft</a>, mis en place par<a
 href="http://fr.wikipedia.org/wiki/Framasoft"> l'association
Framasoft</a>.<br>
<h3><a name="studs"></a>Quelles différences
entre Framadate et STUdS ! ?</h3>
Framadate est un service basé sur le logiciel libre <a
 href="https://github.com/leblanc-simon/OpenSondage">OpenSondage</a>.
OpenSondage est lui-même basé sur le logiciel <a
 href="http://studs.u-strasbg.fr">STUdS !</a> développé
par l'Université de Strasbourg. <br>
Après avoir testé STUdS, nous avons décidé d'apporter de nombreuses
modifications, notamment ergonomiques, au code source existant.
L'ensemble de ces modifications ne pouvaient entrer dans le cadre
d'utilisation d'un logiciel déjà en production dans une université et
aurait été (fort logiquement) rejetté de la branche principale de
développement. C'est pourquoi nous avons préferer "<a
 href="http://fr.wikipedia.org/wiki/Fork_%28d%C3%A9veloppement_logiciel%29">forker</a>"
STUdS pour créer OpenSondage.<br>
<h3><a name="doodle"></a>Quelles différences
entre Framadate et <a href="http://doodle.com">Doodle</a>
?</h3>
Aujourd'hui, le danger pour le logiciel libre
ne provient plus de Microsoft ou d'Adobe et de leurs logiciels qu'on
installe sans avoir le code source, mais des applications web "dans les
nuages" proposés comme services par des entreprises.<br>
<br>
Cela pour au moins 4 raisons :<br>
1- <span style="font-weight: bold;">sécurité</span>
: aucune garantie ne peut vous être apportée quand au fait les données
soient correctement sauvegardées et protégées, ni que le<br>
code source "officiel" soit réellement celui que vous utilisez en ligne.<br>
2- <span style="font-weight: bold;">fiabilité/perennité</span>
: le service peut tomber en panne, et rien&nbsp;ne garanti que la
société Doodle sera toujours là demain et maintiendra le site<br>
3- <span style="font-weight: bold;">propriété des données</span>
: beaucoup d'entreprises s'autoproclament co-détentrices de vos
contenus "clouds" (ex: Facebook impose une clause de partage des droits
sur vos contenus, vos données, vos photos)<br>
4-<span style="font-weight: bold;"> vie privée</span>
: une entreprise - comme Doodle - doit gagner de l'argent (et il n'y a
aucun mal à cela). Mais si elle est en difficulté financière, elle peut
décider de changer ses conditions d'utilisation et vendre vos données à
des tiers (alors que Framasoft, asso loi 1901 d'intérêt général, n'aura
jamais d'intérêt à le faire).<br>
<br>
A cela s'ajoute le problème, plus éthique, de la publicité.<br>
<br>
Les problèmes 1 et 2 concernent aussi Framadate.org : rien ne garanti
la sécurité et la fiabilité du service (d'autant plus que les
administrateurs systèmes de Framasoft sont bénévoles).<br>
<br>
Par contre :<br>
- les problemes 3 et 4 ne sont pas d'actualité avec Framadate, exploité
par une association loi 1901<br>
- et surtout, Framadate fait partie d'un projet plus global
(Framatools) qui vise justement à sensibiliser le grand public à la
problématique du "cloud". Cela peut sembler paradoxal, mais bien que
proposant le service Framadate.org, nous allons surtout encourager les
organisations à installer leur propre instance du logiciel afin de
maitriser totalement leurs données.<br>
<br>
Bref, oui Framadate est inspiré de Doodle.com, et oui Doodle est un
excellent service. Mais Doodle reste une "boite noire" pour
l'utilisateur final qui va sur doodle.com. Framadate.org essaie de
répondre, modestement, à cette problématique en montrant que des
alternatives libres existent et qu'on peut les installer "chez soi".<br>
<h3><a name="longevite"></a>Mon sondage
restera-t-il longtemps en ligne ?</h3>
Le service Framadate est proposée gratuitement par l'association
Framasoft.<br>
Framasoft
s'engage à maintenir le service "aussi longtemps que possible", mais ne
peut fournir aucune garantie de date. Si cela ne vous convient pas,
nous vous
encourageons sincèrement à installer vous-même Framadate et à maintenir
vous-même votre propre service.
<hr style="width: 100%; height: 2px;">
<h1><a name="mentions"></a>Mentions légales<br>
</h1>
<h2>Éditeur et Responsable de la publication</h2>
<p>Vous pouvez rentrer en contact avec l'Editeur et le
Responsable de la publication en passant par la page "<a
 href="contacts.php">contact</a>".</p>
<p>Les propos tenus sur ce site ne représentent que et uniquement
l’opinion de leur auteur, et n’engagent pas l'association Framasoft,
les sociétés, entreprises ou collectifs auxquels il contribue ou dont
il peut être associé ou employé.</p>
<h2>Licences, droits de reproduction</h2>
<p>L'application Framadate, basé sur le logiciel OpenSondage,
lui-même basé sur STUdS, est publiée sous licence libre <a
 href="http://www.cecill.info/licences.fr.html">CeCILL-B</a>.
Les contenus (sondages) sont publiés sous licence Creative Commons
BY-SA. Cela signifie que si l'adresse de votre sondage est connue d'un
individu, vous autorisez cette personne à utiliser, partager, modifier
votre sondage. Si vous souhaitez des sondages 100% privés et avec votre
propre licence, installez votre propre logiciel de sondage et
n'utilisez pas Framadate.org.</p>
<hr style="width: 100%; height: 2px;">
<h2><a name="credits"></a>Crédits</h2>
<b>Application d'origine</b><br>
<br>
L'application Framadate est une instance du logiciel <b><a
 href="http://studs.u-strasbg.fr">STUdS !</a></b>
développé à l'Université de Strasbourg depuis 2008.<br>
<br>
Pour les besoins de Framadate, STUdS a fait l'objet d'un fork par
l'équipe Framasoft. Les sources sont disponibles sur le Github <a
 href="https://github.com/leblanc-simon/OpenSondage">OpenSondage</a>.<br>
<br>
<b>Technologies utilisées</b><br>
<br>
- <a href="http://www.php.net/">PHP</a><br>
- <a href="http://www.postgresql.org/">MySQL</a><br>
- <a href="http://www.apache.org/">Apache</a><br>
- <a href="http://subversion.tigris.org/">Subversion</a><br>
- <a href="http://www.kigkonsult.se/iCalcreator/">iCalcreator</a><br>
- <a href="http://www.fpdf.org/">FPDF</a><br>
- Icônes : <a href="http://deleket.deviantart.com/">Deleket</a>,
<a href="http://pixel-mixer.com">PixelMixer</a> et <a
 href="http://dryicons.com">DryIcons</a><br>
<br>
<b>Compatibilités des navigateurs</b><br>
<br>
- <a href="http://www.mozilla.com/firefox/">Firefox</a><br>
- <a href="http://www.opera.com/">Opéra</a><br>
- <a href="http://www.konqueror.org/">Konqueror</a><br>
- <a href="http://www.jikos.cz/%7Emikulas/links/">Links</a><br>
- <a href="http://www.apple.com/fr/safari/">Safari</a><br>
- <a href="http://www.mozilla.com/firefox/">IE</a><br>
<br>
<b>Validations des pages</b><br>
<br>
- Toutes les pages disposent de la validation HTML 4.01 Strict du W3C. <br>
- La CSS dispose de la validation CSS 2.1 du W3C.
<p><img src="http://www.w3.org/Icons/valid-html401-blue"
 alt="Valid HTML 4.01 Strict" height="31" width="88"><img
 style="border: 0pt none ; width: 88px; height: 31px;"
 src="http://jigsaw.w3.org/css-validator/images/vcss-blue"
 alt="CSS Valide !">
</p>
<b>Propositions améliorations de Framadate</b><br>
<br>
Si quelque chose venait à vous manquer, vous pouvez nous en faire part
via le <a href="contacts.php">formulaire en ligne</a>.
<br>
Les dernières améliorations de Framadate sont visibles dans le fichier <a
 href="CHANGELOG">CHANGELOG</a>.<br>
<br>
<b>Remerciements</b><br>
<br>
<b><a href="http://studs.u-strasbg.fr">STUdS !</a></b>&nbsp;:
Pour leurs contributions techniques ou ergonomiques : Guy, Christophe,
Julien, Pierre, Romaric, Matthieu, Catherine, Christine, Olivier,
Emmanuel et Florence <br>
<a style="font-weight: bold;"
 href="https://github.com/leblanc-simon/OpenSondage">Framadate</a>
: &nbsp;Simon Leblanc (développement principal), Pierre-Yves Gosset
(développement, graphisme), la communauté Framasoft.<br>
<br>
<h2><b><a name="licence"></a>Licence</b></h2>
Framadate est placé, comme <b><a
 href="http://studs.u-strasbg.fr">STUdS !</a>,</b>
sous la licence logicielle libre <a
 href="http://www.cecill.info/licences.fr.html">CeCILL-B</a>.<br>
<br>
mentions;

echo '</div>'."\n";

bandeau_pied_mobile();
echo '</form>'."\n";
echo '</body>'."\n";
echo '</html>'."\n";