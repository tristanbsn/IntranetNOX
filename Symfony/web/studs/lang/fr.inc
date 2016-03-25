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

//Texte des bandeaux
$tt_bandeau_titre='Se Trouver &agrave; l\'Universit&eacute; de Strasbourg';
$tt_bandeau_titre_infos='Cr&eacute;ation de sondage (1 sur 2)';
$tt_bandeau_titre_date='Choix des dates (2 sur 2)';
$tt_bandeau_titre_autre='Choix des sujets (2 sur 2)';
$tt_bandeau_titre_admin='Administrateur de la base';
$tt_bandeau_titre_contact='Nous contacter';
$tt_bandeau_titre_erreur='Erreur !';
$tt_bandeau_titre_apropos='Informations g&eacute;n&eacute;rales';
$tt_bandeau_pied='Universit&eacute; de Strasbourg. Cr&eacute;ation : Guilhem BORGHESI. 2008-2010';

//texte des boutons dans sous_bandeau
$tt_bouton_accueil='Accueil';
$tt_bouton_exemple='Exemple';
$tt_bouton_contact='Contact';
$tt_bouton_sources='Sources';
$tt_bouton_apropos='A propos';
$tt_bouton_intranet='Admin';
$tt_bouton_historique='Historique';
$tt_bouton_nettoyage='Nettoyage';
$tt_bouton_retour='Retour';

//Texte de index.php
$tt_index_titre='A quoi ça sert ?';
$tt_index_presentation='A faire des sondages pour que vous puissiez trouver une date de r&eacute;union qui convienne &agrave; toutes les personnes concern&eacute;es. <br>Vous pouvez &eacute;galement utiliser cette application pour d&eacute;terminer &agrave; plusieurs un choix quelconque comme un lieu de RV, un th&egrave;me de r&eacute;union ou la marque de votre prochaine machine &agrave; caf&eacute;.';
$tt_index_bouton='Cr&eacute;er un sondage';

//texte de infos_sondage.php
$tt_infos_presentation='Vous avez choisi de cr&eacute;er un nouveau sondage !<br> Merci de remplir les champs obligatoires.';
$tt_infos_champ_titre='Titre du sondage * : ';
$tt_infos_champ_commentaires='Commentaires : ';
$tt_infos_champ_nom='Votre nom * : ';
$tt_infos_champ_adressemail='Votre adresse e-mail * : ';
$tt_infos_asterisque='Les champs marqu&eacute;s d\'une &eacute;toile * sont obligatoires !';
$tt_infos_option_modifier=' Vous souhaitez que les sond&eacute;s puissent modifier leur ligne eux-m&ecirc;mes.';
$tt_infos_option_mailconfirme=' Vous souhaitez recevoir un mail &agrave; chaque participation d\'un sond&eacute;.';
$tt_infos_choix_date='Sondage pour choisir une date';
$tt_infos_choix_autre='Autre sondage';
$tt_infos_erreur_titre='Il faut remplir un titre !';
$tt_infos_erreur_nom='Il faut remplir un nom !';
$tt_infos_erreur_adressemail='Il faut remplir une adresse !';
$tt_infos_erreur_injection='Les caract&egrave;res < > et " ne sont pas autoris&eacute;s !';
$tt_infos_erreur_mauvaise_adressemail='L\'adresse saisie n\'est pas correcte ! (Il faut une adresse valide pour recevoir le lien vers le sondage)';

//texte de choix_autre.php
$tt_choixautre_presentation='Vous avez cr&eacute;&eacute; un sondage pour d&eacute;terminer un choix entre plusieurs choses<br>Entrez les diff&eacute;rents choix &agrave; proposer au vote :';
$tt_choixautre_champchoix='Choix';
$tt_choixautre_continuer='Continuer';
$tt_choixautre_ajoutcases='Pour ajouter 5 cases suppl&eacute;mentaires';
$tt_choixautre_erreurvide='Il faut remplir au moins un champ !';
$tt_choixautre_erreur_injection='Les caract&egrave;res " < et > ne sont pas autoris&eacute;s !';
$tt_choixautre_presentationfin='Votre sondage sera automatiquement effac&eacute; dans 6 mois.<br> N&eacute;anmoins vous pouvez d&eacute;cider ci-dessous d\'une date plus rapproch&eacute;e pour la destruction de votre sondage.';
$tt_choixautre_presentationfindate='Date de fin (optionnelle)';
$tt_choixautre_presentationfinformat='(JJ/MM/AAAA)';
$tt_choixautre_presentationenvoimail='Une fois que vous aurez confirm&eacute; la cr&eacute;ation du sondage, vous serez redirig&eacute; automatiquement vers la page de votre sondage. <br><br>En m&ecirc;me temps, vous recevrez un courrier &eacute;lectronique contenant le lien vers votre sondage pour le faire suivre aux futurs sond&eacute;s.';

$tt_choix_creation='Cr&eacute;er le sondage';
$tt_choix_page_erreur_titre='Vous n\'avez pas renseign&eacute; la premi&egrave;re page du sondage';
$tt_choix_page_erreur_retour='Retournez &agrave; la page d\'accueil de';

//texte de choix_autre.php
$tt_choixdate_presentation='Selectionnez vos dates parmi les jours disponibles qui sont en vert. Une fois selectionn&eacute;s, les jours apparaissent en bleu.<br> Vous pouvez &eacute;galement enlever des jours d&eacute;j&agrave; choisis en recliquant sur la case.';
$tt_choixdate_titreheure='Jour retenus';
$tt_choixdate_presentationheure='Pour chacun des jours que vous avez s&eacute;lectionn&eacute;, vous avez la possibilit&eacute; de choisir ou non, des heures de r&eacute;union avec ce format :<br>- vide, si vous ne d&eacute;sirez pas mettre d\'horaires particuliers,<br>- "8h", "8H" ou "8:00" pour proposer une heure de d&eacute;but de r&eacute;union,<br>- "8-11", "8h-11h", "8H-11H" ou "8:00-11:00" pour un cr&eacute;neau,<br>- "8h15-11h15", "8H15-11H15" ou "8:15-11:15" pour un cr&eacute;neau avec minutes.';
$tt_choixdate_titrecolonne='Horaire';
$tt_choixdate_erreur_format='Format incorrect !';
$tt_choixdate_erreur_choix='Cela ne laisse pas assez de choix aux participants !';
$tt_choixdate_bouton_effacer_jours='Effacer tous les jours';
$tt_choixdate_bouton_reporter='Reporter les horaires du premier jour';
$tt_choixdate_bouton_effacer_horaires='Effacer tous les horaires';
$tt_choixdate_continuer='Continuer';
$tt_choixdate_presentationfin='Votre sondage sera automatiquement effac&eacute; apr&egrave;s la date la plus tardive.';
$tt_choixdate_presentationdatefin='Date de destruction';
$tt_choixdate_retour_horaires='Retourner aux horaires';

//traduction du fichier creation_sondage.php
$tt_creationsondage_titre_mail_sondes='Pour diffusion aux sondés';
$tt_creationsondage_corps_sondage='Sondage';
$tt_creationsondage_corps_debut="Ceci est le message qui doit être envoyé aux sondés. \nVous pouvez maintenant transmettre ce message à toutes les personnes susceptibles de participer au vote.";
$tt_creationsondage_corps_milieu=' vient de créer un sondage intitulé ';
$tt_creationsondage_corps_fin='Merci de bien vouloir remplir le sondage à l\'adresse suivante';
$tt_creationsondage_corps_merci='Merci de votre confiance';
$tt_creationsondage_titre_mail_admin='Réservé à l\'auteur';
$tt_creationsondage_corps_admin_debut="Ce message ne doit PAS être diffusé aux sondés. Il est réservé à l'auteur du sondage.\n\nVous pouvez modifier ce sondage à l'adresse suivante ";

//traduction en francais ecrit des valeurs de mois
$tt_motmois_un="janvier";
$tt_motmois_deux="f&eacute;vrier";
$tt_motmois_trois="mars";
$tt_motmois_quatre="avril";
$tt_motmois_cinq="mai";
$tt_motmois_six="juin";
$tt_motmois_sept="juillet";
$tt_motmois_huit="ao&ucirc;t";
$tt_motmois_neuf="septembre";
$tt_motmois_dix="octobre";
$tt_motmois_onze="novembre";
$tt_motmois_douze="d&eacute;cembre";

//les jours
$tt_motjour_un="lundi";
$tt_motjour_deux="mardi";
$tt_motjour_trois="mercredi";
$tt_motjour_quatre="jeudi";
$tt_motjour_cinq="vendredi";
$tt_motjour_six="samedi";
$tt_motjour_sept="dimanche";

//studs.php
$tt_studs_erreur_titre='Ce sondage n\'existe pas !';
$tt_studs_auteur='Auteur du sondage';
$tt_studs_commentaires='Commentaires';
$tt_studs_presentation='Pour participer &agrave; ce sondage, veuillez entrer votre nom, choisir toutes les valeurs qui vous conviennent <br>(sans tenir compte des disponibilit&eacute;s des autres sond&eacute;s) et valider votre choix avec le bouton en bout de ligne.';
$tt_studs_somme='Somme';
$tt_studs_erreur_nomdeja='Le nom que vous avez choisi existe d&eacute;j&agrave; !';
$tt_studs_erreur_injection='Les caract&egrave;res "  \'  < et > ne sont pas autoris&eacute;s !';
$tt_studs_a='&agrave';
$tt_studs_erreur_nomvide='Vous n\'avez pas saisi de nom !';
$tt_studs_meilleurchoix='Le meilleur choix pour l\'instant est';
$tt_studs_meilleurchoix_pluriel='Les meilleurs choix pour l\'instant sont';
$tt_studs_meilleurchoix_avec='avec';
$tt_studs_meilleurchoix_vote='vote';
$tt_studs_export='Export : Tableur';
$tt_studs_agenda='Agenda';
$tt_studs_mail_sujet='Participation au sondage';
$tt_studs_mail_corps=" vient de remplir une ligne.\nVous pouvez retrouver votre sondage au lien suivant";
$tt_studs_mail_merci='Merci de votre confiance.';
$tt_studs_ajoutcommentaires='Ajoutez un commentaire dans ce sondage';
$tt_studs_ajoutcommentaires_nom='Nom';
$tt_studs_ajoutcommentaires_titre='Commentaires des sond&eacute;s';
$tt_studs_commentaires_erreurvide='Merci de remplir les deux champs !';

//adminstuds.php
$tt_adminstuds_mail_sujet_ajoutcolonne='[ADMINISTRATEUR] Ajout d\'une nouvelle colonne au sondage ';
$tt_adminstuds_mail_corps_ajoutcolonne="Vous avez fait l'ajout d'une colonne dans votre sondage. \nVous pouvez informer vos utilisateurs de ce changement en leur envoyant l'adresse suivante";
$tt_adminstuds_mail_sujet_changetitre='[ADMINISTRATEUR] Changement du titre du sondage avec ';
$tt_adminstuds_mail_corps_changetitre="Vous avez fait la modification du titre de votre sondage. \nVous pouvez modifier ce sondage au lien suivant";
$tt_adminstuds_mail_sujet_changecomm='[ADMINISTRATEUR] Changement des commentaires du sondage avec ';
$tt_adminstuds_mail_corps_changecomm="Vous avez fait la modification des commentaires de votre sondage. \nVous pouvez modifier ce sondage au lien suivant";
$tt_adminstuds_mail_sujet_changemail='[ADMINISTRATEUR] Changement d\'adresse électronique de l\'administrateur avec ';
$tt_adminstuds_mail_corps_changemail="Vous avez fait la modification de votre adresse mail. \nVous pouvez modifier ce sondage au lien suivant";
$tt_adminstuds_presentation='En tant qu\'administrateur, vous pouvez modifier toutes les lignes de ce sondage avec <img src="images/info.png" alt="Icone infos">.<br> Vous avez aussi la possibilit&eacute; d\'effacer une colonne ou une ligne avec <img src="images/cancel.png" alt="Annuler">. <br>Si vous avez oubli&eacute; de mettre un choix vous pouvez rajouter une colonne en cliquant sur <img src="images/add-16.png" alt="Annuler"> <br> en bout de ligne des noms de colonne. Vous pouvez enfin &eacute;galement modifier les informations <br>relatives &agrave; ce sondage comme le titre, les commentaires ou encore votre adresse &eacute;lectronique.';
$tt_adminstuds_erreur_date='La date choisie n\'est pas correcte !';
$tt_adminstuds_gestion_titre='Gestion de votre sondage';
$tt_adminstuds_gestion_chgttitre='Si vous souhaitez changer le titre du sondage';
$tt_adminstuds_gestion_pdf='Si vous souhaitez produire la lettre de convocation (en PDF), choississez un lieu de r&eacute;union et validez';
$tt_adminstuds_gestion_erreurpdf='Veuillez entrer un lieu de r&eacute;union !';
$tt_adminstuds_gestion_erreurtitre='Veuillez entrer un nouveau titre !';
$tt_adminstuds_gestion_commentaires='Si vous souhaitez changer les commentaires du sondage';
$tt_adminstuds_gestion_adressemail='Si vous souhaitez changer votre adresse de courrier &eacute;lectronique';
$tt_adminstuds_gestion_erreurmail='Veuillez entrer une nouvelle adresse !';
$tt_adminstuds_gestion_suppressionsondage='Si vous souhaitez supprimer votre sondage';
$tt_adminstuds_gestion_bouton_suppressionsondage='Suppression du sondage';
$tt_adminstuds_gestion_confirmesuppression='Confirmer la suppression de votre sondage';
$tt_adminstuds_gestion_bouton_confirmesuppression='Je supprime ce sondage !';
$tt_adminstuds_gestion_bouton_annulesuppression='Je garde ce sondage !';
$tt_adminstuds_mail_sujet_supprimesondage='[ADMINISTRATEUR] Suppression de sondage avec ';
$tt_adminstuds_mail_corps_supprimesondage="Vous avez fait la suppression d'un sondage. \nVous pouvez faire de nouveaux sondages au lien suivant";
$tt_adminstuds_suppression_titre='Votre sondage a &eacute;t&eacute; supprim&eacute; !';
$tt_adminstuds_ajoutcolonne_titre='Ajout de colonne';
$tt_adminstuds_ajoutcolonne_autre='Si vous souhaitez ajouter une colonne';
$tt_adminstuds_ajoutcolonne_date_presentation='Vous pouvez ajouter une date &agrave; votre sondage. Si la date existe d&eacute;j&agrave; et que vous ne voulez que rajouter un horaire,<br> mettez le jour en entier avec l\'horaire ou le cr&eacute;neau suppl&eacute;mentaire il sera int&eacute;gr&eacute; normalement au sondage existant.';
$tt_adminstuds_ajoutcolonne_date_invit='Pour ajouter une date';
$tt_adminstuds_ajoutcolonne_date_heuredebut='Pour ajouter un horaire de d&eacute;but (optionnel)';
$tt_adminstuds_ajoutcolonne_date_heurefin='Pour ajouter un horaire de fin (optionnel)';

//contacts.php
$tt_contacts_envoimail_titre='Votre message a bien &eacute;t&eacute; envoy&eacute; !';
$tt_contacts_presentation='Pour toutes questions ou suggestions vous pouvez laisser un message via ce formulaire.';
$tt_contacts_nom='Votre nom';
$tt_contacts_adressemail='Votre adresse &eacute;lectronique ';
$tt_contacts_question='Question';
$tt_contacts_bouton_question='Envoyer votre question';
$tt_contacts_mail_sujet_admin='[CONTACT] Envoi de question ';
$tt_contacts_mail_corps_admin='Vous avez une question d\'utilisateur de ';
$tt_contacts_mail_utilisateur_admin='Utilisateur';
$tt_contacts_mail_adresse_admin='Adresse utilisateur';
$tt_contacts_mail_message_admin='Message';
$tt_contacts_mail_sujet_user='[COPIE] Envoi de question ';
$tt_contacts_mail_corps_user='Voici une copie de votre question';
$tt_contacts_mail_reponse_user='Nous allons prendre en compte votre message rapidement.';

//sources.php
$tt_sources_lien='Voila les <a href="http://sourcesup.cru.fr/frs/?group_id=621">sources</a> de ';

//admin/index.php
$tt_admin_nbresondage='sondages dans la base actuellement';
$tt_admin_confirmesuppression='Confirmer la suppression du sondage ';
$tt_admin_bouton_confirmesuppression='Je supprime ce sondage !';
$tt_admin_bouton_annulesuppression='Je garde ce sondage !';
$tt_admin_colonne_id='ID sondage';
$tt_admin_colonne_format='Format';
$tt_admin_colonne_titre='Titre';
$tt_admin_colonne_auteur='Auteur';
$tt_admin_colonne_datefin='Date d\'expiration';
$tt_admin_colonne_nbreuser='Nombre d\'utilisateurs';
$tt_admin_colonne_actions='Actions';
$tt_admin_lien_voir='Voir le sondage';
$tt_admin_lien_modifier='Modifier le sondage';
$tt_admin_bouton_supprimer='Supprimer le sondage';

?>