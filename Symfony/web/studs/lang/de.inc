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

$tt_bandeau_titre='Ihre Umfrage erstellen';
$tt_bandeau_titre_infos='Erstellen einer Umfrage (1 / 2)';
$tt_bandeau_titre_date='Terminforschl&auml;ge (2 / 2)';
$tt_bandeau_titre_autre='Themaforschl&auml;ge (2 / 2)';
$tt_bandeau_titre_admin='Datenbankadministrator';
$tt_bandeau_titre_contact='Kontakt';
$tt_bandeau_titre_erreur='Fehler!';
$tt_bandeau_titre_apropos='Allgemeine Informationen';
$tt_bandeau_pied='Universit&auml;t Strassburg. Autor : Guilhem BORGHESI. 2008-2010';

//texte des boutons dans sous_bandeau
$tt_bouton_accueil='Startseite';
$tt_bouton_exemple='Beispiel';
$tt_bouton_contact='Kontakt';
$tt_bouton_sources='Quellen';
$tt_bouton_apropos='Inbezug';
$tt_bouton_intranet='Admin';
$tt_bouton_historique='Logs';
$tt_bouton_nettoyage='Reinigung';
$tt_bouton_retour='Zur&uuml;ck';
//Texte de index.php
$tt_index_titre='Warum dies ?';
$tt_index_presentation='Ein Datum zu finden das allen Betroffenen passt. 
<br>Sie k&ouml;nnen ebenfalls ben&ouml;tigen um gemeinsam eine Wahl zu treffen f&uuml;r ein Termin ein Treffpunkt, ein Besprechungsthema oder die Marke ihrer n&auml;chsten Kaffeemaschine ';
$tt_index_bouton='Umfrage erstellen';

//texte de infos_sondage.php
$tt_infos_presentation='Sie machten eine neue umfrage erstellen !<br> Fullen sie die folgenden Felder aus.';
$tt_infos_champ_titre='Titel der Umfrage *: ';
$tt_infos_champ_commentaires='Komentar (optional): ';
$tt_infos_champ_nom='Name *: ';
$tt_infos_champ_adressemail='E-mail Adresse *: ';
$tt_infos_asterisque='Die mit * markierten Felder sind obligatorisch!';
$tt_infos_option_modifier=' Sie erlauben eine &Auml;nderung der linien durch die Befragten';
$tt_infos_option_mailconfirme=' Sie m&ouml;chten eine e-mail bei jeder Beteiligung erhalten';
$tt_infos_choix_date='Terminumfrage';
$tt_infos_choix_autre='Andere Umfragen';
$tt_infos_erreur_titre='Geben sie einen Titel an!';
$tt_infos_erreur_nom='Geben sie einen Namen an!';
$tt_infos_erreur_adressemail='Geben sie eine e-mail Adresse an!';
$tt_infos_erreur_injection='Die Schriftzeichen < > und " sind nicht genehmigt!';
$tt_infos_erreur_mauvaise_adressemail='Die e-mail adresse ist nicht korrekt! (Sie m&uuml;ssen eine g&uuml;tlige e-mail Adresse eintragen)';

//texte de choix_autre.php
$tt_choixautre_presentation='Sie erstellen eine Umfrage mit mehreren Wahlmglichkeiten <br>Geben sie die verschiedenen Wahlmglichkeiten an :';
$tt_choixautre_champchoix='Wahl';
$tt_choixautre_continuer='Weiter';
$tt_choixautre_ajoutcases='Um 5 weitere Felder zu erstellen';
$tt_choixautre_erreurvide='Mindestens 1 Feld muss ausgef&uuml;llt sein !';
$tt_choixautre_erreur_injection='Die Schriftzeichen < > und " sind nicht genehmigt !';
$tt_choixautre_presentationfin='Ihre Umfrage wird automatisch nach 6 Monaten gelscht.<br> Sie k&ouml;nnen dennoch eine andere Frist w&auml;hlen.';
$tt_choixautre_presentationfindate='Enddatum (optional)';
$tt_choixautre_presentationfinformat='(TT/MM/JJJJ)';
$tt_choixautre_presentationenvoimail='Als Sie die Herschtelung der Umfrage best&auml;tigt haben werden, werden Sie zur Webseite Ihrer Umfrage automatisch wieder geleitet sein<br><br> Gleichzeitig werden Sie ein E-Mail bekommen in dem ein Link zu ihrer Umfrage ist, um in der erforschten Zukunft zu folgen.';

$tt_choix_creation='Umfrage erstellen';
$tt_choix_page_erreur_titre='Die erste Seite wurde nicht ausgefullt';
$tt_choix_page_erreur_retour='Kehren sie zur Startseite zur&uuml;ck ';

//texte de choix_autre.php
$tt_choixdate_presentation='W&auml;hlen sie ihr Termin unter den in gr&uuml;n angegebenen Tagen an. Die Felder erscheinen in blau wen sie ausgew heltsind.<br> Sie k&ouml;nnen ihre Wahl wiederufen in dem sie das Feld wiederausw&auml;hlen.';
$tt_choixdate_titreheure='Gew&auml;lhter Tag';
$tt_choixdate_presentationheure='F&uuml;r jeden ausgew&auml;hlten Tag, haben Sie die M&ouml;glichkeit  die Uhrzeit der Versammlung zu bestimmen in einem der folgenden Formaten :<br>- lehr, wenn Sie keine bestimmte Uhrzeit m&ouml;chten,<br>- "8h", "8H" oder "8:00" um den Beginn der Versammlung vorzuschlagen,<br>- "8-11", "8h-11h", "8H-11H" oder "8:00-11:00" f&uuml;r eine Zeitspanne,<br>- "8h15-11h15", "8H15-11H15" oder "8:15-11:15" f&uuml;r ein  Zeitspanne mit minuten.';
$tt_choixdate_titrecolonne='Uhrzeit';
$tt_choixdate_erreur_format='Inkorrektes Format!';
$tt_choixdate_erreur_choix='Sie lassen den Beteiligten nicht gen&uuml;gend M&ouml;glichkeiten!';
$tt_choixdate_bouton_effacer_jours='Alle Tage l&ouml;schen';
$tt_choixdate_bouton_reporter='Uhrzeiten des ersten Tages auch f&uuml;r die folgende Tage &uuml;bernehmen';
$tt_choixdate_bouton_effacer_horaires='Alle Uhrzeiten l&ouml;schen';
$tt_choixdate_continuer='Weiter';
$tt_choixdate_presentationfin='Ihre Umfrage wird automatisch nach dem letzten eingetragenen Datum gel&ouml;scht.';
$tt_choixdate_presentationdatefin='Datum an dem die Umfrage gel&ouml;scht werden soll';
$tt_choixdate_retour_horaires='Zur&uuml;ck zu den Uhrzeiten';

//traduction du fichier creation_sondage.php
$tt_creationsondage_titre_mail_sondes='Für Verbreiterung an den Befragten';
$tt_creationsondage_corps_sondage='Umfrage';
$tt_creationsondage_corps_debut="Das ist die Botschaft die den Befragten gesendet werden soll. \nSie können jetzt diese Botschaft allen Personnen die an der Abstimmung teilnehmen könnten weitergeben.";
$tt_creationsondage_corps_milieu='hat eine betitelte Umfrage erstellt';
$tt_creationsondage_corps_fin='Bitte erkundigen Sie die Umfrage an dem folgende Weblink';
$tt_creationsondage_corps_merci='Danke fur ihr vertrauen';
$tt_creationsondage_titre_mail_admin='Fur den Autor reserviert';
$tt_creationsondage_corps_admin_debut="Diese Botschaft soll nicht weitergegeben werden, sie ist fur den Autor reserviert.\n\nSie können diese Umfrage an dem folgenden Weblink ändern";

//traduction en allemand ecrit des valeurs de mois
$tt_motmois_un="Januar";
$tt_motmois_deux="Februar";
$tt_motmois_trois="M&auml;rz";
$tt_motmois_quatre="April";
$tt_motmois_cinq="May";
$tt_motmois_six="Juni";
$tt_motmois_sept="Juli";
$tt_motmois_huit="August";
$tt_motmois_neuf="September";
$tt_motmois_dix="Oktober";
$tt_motmois_onze="November";
$tt_motmois_douze="December";

//les jours
$tt_motjour_un="Montag";
$tt_motjour_deux="Dienstag";
$tt_motjour_trois="Mittwoch";
$tt_motjour_quatre="Donnerstag";
$tt_motjour_cinq="Freitag";
$tt_motjour_six="Samstag";
$tt_motjour_sept="Sonntag";

//studs.php
$tt_studs_erreur_titre='Diese Umfrage gibt es nicht!';
$tt_studs_auteur='Autor der Umfrage';
$tt_studs_commentaires='Kommentare';
$tt_studs_presentation='Um an dieser Umfrage Teilzunehmen tragen sie bitte ihren Namen, w&auml;hlen sie die ihnen passenden Wehrte (ohne die dispo der anderen Teilnehmer zu beachten)<br> und best&auml;tigen sie ihre Wahl mit dem Knopf am ende der Ligne.';
$tt_studs_somme='Summe';
$tt_studs_erreur_nomdeja='Den gew&auml;hlten Namen gibt es schon!';
$tt_studs_erreur_injection='Die Schriftzeichen < und > sind nicht genehmigt!';
$tt_studs_a='bis';
$tt_studs_erreur_nomvide='Sie haben keinen Namen eingetragen!';
$tt_studs_meilleurchoix='Vorlaufig ist die beste Wahl:';
$tt_studs_meilleurchoix_pluriel='Vorl&auml;ufig sind die besten Wahlen: ';
$tt_studs_meilleurchoix_avec='mit';
$tt_studs_meilleurchoix_vote='w&auml;hle';
$tt_studs_export='Export : Tabellenkalkulationprogram';
$tt_studs_agenda='Agenda';
$tt_studs_mail_sujet='Umfragebeteiligung';
$tt_studs_mail_corps=' hat einen Eintrag gemacht. Sie finden ihre Umfrage unter folgender Adresse';
$tt_studs_mail_merci='Wir dancken ihnen für Ihr Vertrauen.';
$tt_studs_ajoutcommentaires='Geben sie ein Kommentar ein bitte';
$tt_studs_ajoutcommentaires_nom='Name';
$tt_studs_ajoutcommentaires_titre='Kommentar';
$tt_studs_commentaires_erreurvide='Geben sie irhen Name und ein Kommentar ein bitte!';


//adminstuds.php
$tt_adminstuds_mail_sujet_ajoutcolonne='[ADMINISTRATOR] Einf&uuml;gen einer neuen Spalte in die Umfrage ';
$tt_adminstuds_mail_corps_ajoutcolonne="Sie haben eine neue Spalte in die Umfrage eingef&uuml;gt. \nSie k&ouml;nnen die Beteiligten &uuml;ber diese &auml;nderung informieren in dem sie ihen folgende Adresse schicken. ";
$tt_adminstuds_mail_sujet_changetitre='[ADMINISTRATOR] &auml;nderung des Titels der ';
$tt_adminstuds_mail_corps_changetitre="Sie haben den Titel ihrer Umfrage ge&auml;ndert. \Sie k&ouml;nnen diese Umfrage mit dem fogenden Link &auml;ndern ";
$tt_adminstuds_mail_sujet_changecomm='[ADMINISTRATOR] &auml;nderung der Kommentare der Umfrage mit ';
$tt_adminstuds_mail_corps_changecomm=" Sie haben die Kommentare ihrer Umfrage ge&auml;ndert. \ Sie k&ouml;nnen diese Umfrage mit dem fogenden Link &auml;ndern ";
$tt_adminstuds_mail_sujet_changemail='[ADMINISTRATOR] &auml;nderung der email Adresse des administrator ';
$tt_adminstuds_presentation='Als administrator k&ouml;nnen sie alle linien ihrer Umfrage mit  <img src="images/info.png" alt="Icone infos"> &auml;ndern.<br> Sie haben auch die m&ouml;glichkeit eine Spalte oder eine Linie mit <img src="images/cancel.png" alt="Annuler"> zu l&ouml;schen. <br>Falls sie vergessen haben eine Wahlm&ouml;glichkeit einzutragen k&ouml;nnen sie eine Spalte zuf&uuml;gen in dem sie  <img src="images/add-16.png" alt="r&uuml;ckg&auml;ngig"> <br> ausw&auml;hlen. en bout de ligne des noms de colonne. Sie k&ouml;nnen ebenfalls informationen wie den Titel die Kommentare oder ihre email adresse &auml;ndern. ';
$tt_adminstuds_erreur_date='Das gew&auml;hlte Datum ist nicht korrekt!';
$tt_adminstuds_gestion_titre='Verwaltung ihrer Umfrage';
$tt_adminstuds_gestion_chgttitre='Wenn sie den Titel der Umfrage &auml;ndern m&ouml;chten';
$tt_adminstuds_gestion_pdf='Wenn sie die Einladung (in PDF) erstellen m&ouml;chten, w&auml;hlen sie bitte einen Versammlungsort und best&auml;tigen';
$tt_adminstuds_gestion_erreurpdf='Geben sie den Versammlungsort an!';
$tt_adminstuds_gestion_erreurtitre='Geben sie einen neuen Titel an!';
$tt_adminstuds_gestion_commentaires='Wenn sie die Kommentare der Umfrage &auml;ndern m&ouml;chten';
$tt_adminstuds_gestion_adressemail='Wenn sie ihre email adresse &auml;ndern m&ouml;chten';
$tt_adminstuds_gestion_erreurmail='Geben sie eine neue Adresse an!';
$tt_adminstuds_gestion_suppressionsondage='Wenn sie ihre Umfrage l&ouml;schen m&ouml;chten';
$tt_adminstuds_gestion_bouton_suppressionsondage='L&ouml;schen der Umfrage';
$tt_adminstuds_gestion_confirmesuppression='Best&auml;tigen sie bitte das l&ouml;schen der Umfrage';
$tt_adminstuds_gestion_bouton_confirmesuppression='Ich l&ouml;sche die Umfrage!';
$tt_adminstuds_gestion_bouton_annulesuppression='Ich behalte die Umfrage!';
$tt_adminstuds_mail_sujet_supprimesondage='[ADMINISTRATOR] L&ouml;schen der Umfrage mit ';
$tt_adminstuds_mail_corps_supprimesondage="Sie haben eine Umfrage. \nMit folgendem k&ouml;nnen sie ein neue Umfrage erstellen.";
$tt_adminstuds_suppression_titre='Ihre Umfrage wurde gel&ouml;scht!';
$tt_adminstuds_ajoutcolonne_titre='Einf&uuml;gen einer Spalte';
$tt_adminstuds_ajoutcolonne_autre='Wenn sie eine Spalte einf&uuml;gen m&ouml;chten';
$tt_adminstuds_ajoutcolonne_date_presentation='Sie k&ouml;nnen in ihrer Umfrage ein Datum einf&uuml;gen. Falls das Datum bereits schon besteht und sie eine Uhrzeit eingeben m&ouml;chten tragen sie bitte das ganze Datum ein mit der gew&uuml;nschten Uhrzeit so das dieser in der Umfrage erscheinen kann.';
$tt_adminstuds_ajoutcolonne_date_invit='Einf&uuml;gen eines datums';
$tt_adminstuds_ajoutcolonne_date_heuredebut='Einf&uuml;gen einer Startuhrtzeit (optional)';
$tt_adminstuds_ajoutcolonne_date_heurefin='Einf&uuml;gen einer Enduhrzeit (optional)';

//contacts.php
$tt_contacts_envoimail_titre='Ihre email wurde erfolgreich gesendet!';
$tt_contacts_presentation='Fragen oder Vorschl&auml;ge in bezug auf k&ouml;nnen sie uns mit diesem Formular zukommen lassen.';
$tt_contacts_nom='Ihr Name';
$tt_contacts_adressemail='Ihre Email Adresse ';
$tt_contacts_question='Frage (english speaking please)';
$tt_contacts_bouton_question='Senden sie ihre Frage';
$tt_contacts_mail_sujet_admin='[KONTAKT] Senden von Fragen ';
$tt_contacts_mail_corps_admin='Sie haben eine ben&uuml;tzer Frager ';
$tt_contacts_mail_utilisateur_admin='Ben&uuml;tzer';
$tt_contacts_mail_adresse_admin='Email adresse des Ben&uuml;tzers';
$tt_contacts_mail_message_admin='Email';
$tt_contacts_mail_sujet_user='[KOPIE] Senden einer frage ';
$tt_contacts_mail_corps_user='Kopie ihrer frage';
$tt_contacts_mail_reponse_user='Ihre email wird schnell bearbeitet.';

//sources.php
$tt_sources_lien='Die <a href="http://sourcesup.cru.fr/frs/?group_id=621">Quellen</a> von ';

//admin/index.php
$tt_admin_nbresondage=' In der Basis vorhandene Umfragen';
$tt_admin_confirmesuppression='L&ouml;schen dieser Umfrage best&auml;tigen';
$tt_admin_bouton_confirmesuppression='Ich l&ouml;sche diese Umfrage!';
$tt_admin_bouton_annulesuppression='Ich behalte diese Umfrage!';
$tt_admin_colonne_id='Umfrage ID';
$tt_admin_colonne_format='Format';
$tt_admin_colonne_titre='Titel';
$tt_admin_colonne_auteur='Autor';
$tt_admin_colonne_datefin='Enddatum';
$tt_admin_colonne_nbreuser='Anzahl der Benutzer';
$tt_admin_colonne_actions='Aktionen';
$tt_admin_lien_voir='Umfrage ansehen';
$tt_admin_lien_modifier='Umfrage &auml;ndern';
$tt_admin_bouton_supprimer='Umfrage l&ouml;schen';
?>