<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace NoxIntranet\AdministrationBundle\Controller\AdministrationAssistantAffaire;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use NoxIntranet\RessourcesBundle\Entity\Profils;
use NoxIntranet\AdministrationBundle\Entity\Fichier_Suivi;
use NoxIntranet\AdministrationBundle\Entity\Formulaires;
use NoxIntranet\AdministrationBundle\Entity\LiaisonSuiviChamp;
use NoxIntranet\AdministrationBundle\Entity\DonneesFormulaire;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\HttpFoundation\Response;

class AdministrationAffairesController extends Controller {

    // Récupére le contenu d'un dossier et de ses sous-dossiers.
    function getDirContents($dir, &$results = array()) {
        $results = glob($dir);

        return $results;
    }

    // Supprime le contenu d'un dossier.
    function delete_directory($dir) {
        if ($handle = opendir($dir)) {
            while (false !== ($file = readdir($handle))) {
                if ($file != "." && $file != "..") {

                    if (is_dir($dir . $file)) {
                        if (!@rmdir($dir . $file)) { // Empty directory? Remove it
                            delete_directory($dir . $file . '/'); // Not empty? Delete the files inside it
                        }
                    } else {
                        @unlink($dir . $file);
                    }
                }
            }
            closedir($handle);

            rmdir($dir);
        }
    }

    public function administrationAffairesAccueilAction(Request $request, $section) {

        $profil = '';

        $root = realpath($this->get('kernel')->getRootDir() . '\..'); // On récupére la racine du serveur.

        $em = $this->getDoctrine()->getManager();

        // Génération formulaire ajout de fichier
        if (!empty($em->getRepository('NoxIntranetRessourcesBundle:Profils')->findAll())) {
            $formAjoutFichier = $this->get('form.factory')->createNamedBuilder('formAjoutFichier', 'form')
                    ->add('file', FileType::class)
                    ->add('Profil', EntityType::class, array(
                        'class' => 'NoxIntranetRessourcesBundle:Profils',
                        'placeholder' => 'Sélectionnez un profil',
                        'query_builder' => function (EntityRepository $er) {
                            return $er->createQueryBuilder('u')
                                    ->orderBy('u.nom', 'ASC');
                        },
                        'choice_label' => 'Nom',
                    ))
                    ->add('Ajouter', 'submit')
                    ->getForm();
        } else {
            $formAjoutFichier = $this->get('form.factory')->createNamedBuilder('formAjoutFichier', 'form')
                    ->add('file', FileType::class, array(
                        'disabled' => true
                    ))
                    ->add('Profil', EntityType::class, array(
                        'class' => 'NoxIntranetRessourcesBundle:Profils',
                        'placeholder' => 'Sélectionnez un profil',
                        'query_builder' => function (EntityRepository $er) {
                            return $er->createQueryBuilder('u')
                                    ->orderBy('u.nom', 'ASC');
                        },
                        'choice_label' => 'Nom',
                        'disabled' => true,
                        'placeholder' => 'Il n\'y a aucun profil à séléctionner.'
                    ))
                    ->add('Ajouter', SubmitType::class, array(
                        'disabled' => true,
                        'attr' => array('title' => 'Veuillez créez un profil pour pouvoir uploader un modèle.')
                    ))
                    ->getForm();
        }
        //////////////////////////////////////////////////////////////////////////////////////////////// 
        // Génération formulaire de séléction du suivi
        if (!empty($em->getRepository('NoxIntranetRessourcesBundle:Profils')->findAll())) {
            $profilActuel = $em->getRepository('NoxIntranetRessourcesBundle:Profils')->findOneByNom($profil);

            $formSelectionDossier = $this->get('form.factory')->createNamedBuilder('formSelectionDossier', 'form')
                    ->add('profil', EntityType::class, array(
                        'placeholder' => 'Sélectionnez un profil',
                        'class' => 'NoxIntranetRessourcesBundle:Profils',
                        'choice_label' => 'Nom',
                        'data' => $profilActuel,
                        'choice_value' => function($value) {
                            return $value->getNom();
                        }
                    ))
                    ->getForm();
        } else {
            $profilActuel = $em->getRepository('NoxIntranetRessourcesBundle:Profils')->findOneByNom($profil);

            $formSelectionDossier = $this->get('form.factory')->createNamedBuilder('formSelectionDossier', 'form')
                    ->add('profil', EntityType::class, array(
                        'placeholder' => 'Sélectionnez un profil',
                        'class' => 'NoxIntranetRessourcesBundle:Profils',
                        'choice_label' => 'Nom',
                        'data' => $profilActuel,
                        'disabled' => true,
                        'placeholder' => 'Il n\'y a aucun profil à séléctionner.'
                    ))
                    ->getForm();
        }
        ////////////////////////////////////////////////////////////////////////////////////////////////
        // Génération formulaire de séléction de la version du suivi
        if (!empty($em->getRepository('NoxIntranetAdministrationBundle:Fichier_Suivi')->findAll())) {
            $formSelectionVersion = $this->get('form.factory')->createNamedBuilder('formSelectionVersion', 'form')
                    ->add('Suivi', EntityType::class, array(
                        'class' => 'NoxIntranetAdministrationBundle:Fichier_Suivi',
                        'query_builder' => function (EntityRepository $er) {
                            return $er->createQueryBuilder('u')
                                    ->orderBy('u.profil', 'ASC');
                        },
                        'choice_label' => function($value) {
                            return pathinfo($value->getChemin(), PATHINFO_FILENAME);
                        }
                    ))
                    ->add('Editer', SubmitType::class)
                    ->add('Supprimer', SubmitType::class)
                    ->getForm();
        } else {
            $formSelectionVersion = $this->get('form.factory')->createNamedBuilder('formSelectionVersion', 'form')
                    ->add('Suivi', ChoiceType::class, array(
                        'disabled' => true
                    ))
                    ->add('Editer', SubmitType::class, array(
                        'disabled' => true
                    ))
                    ->add('Supprimer', SubmitType::class, array(
                        'disabled' => true
                    ))
                    ->getForm();
        }
        //////////////////////////////////////////////////////////////////////////////////////////////// 
        // Traitement du formulaire d'ajout de fichier
        if ($request->request->has('formAjoutFichier')) {

            $formAjoutFichier->handleRequest($request);

            if ($formAjoutFichier->isValid()) {

                $dir = $root . "\web\uploads\AssistantAffaires\FeuillesSuivis\\";

                $file = $formAjoutFichier['file']->getData();

                $extension = $file->guessExtension();

                var_dump($extension);

                if ($extension === 'xlsx' OR $extension === 'xls') {
                    if (!is_dir($dir . pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME))) {
                        $em = $this->getDoctrine()->getManager();

                        $folderName = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);

                        $file->move($dir . $folderName, $file->getClientOriginalName());

                        $fichier_suivi = new Fichier_Suivi();

                        $fichier_suivi->setChemin($dir . $folderName);
                        $fichier_suivi->setProfil($formAjoutFichier['Profil']->getData()->getNom());

                        $em->persist($fichier_suivi);
                        $em->flush();

                        $request->getSession()->getFlashBag()->add('notice', 'Le modèle ' . $file->getClientOriginalName() . ' a été ajouté.');

                        return $this->redirectToRoute('nox_intranet_administration_affaires');
                    } else {
                        $request->getSession()->getFlashBag()->add('noticeErreur', 'Un modèle associé à un fichier de même nom existe déjà !');
                    }
                } else {
                    $request->getSession()->getFlashBag()->add('noticeErreur', 'Le fichier doit être un fichier Excel (.xlsx) !');
                }

                return $this->redirectToRoute('nox_intranet_administration_affaires');
            }
        }
        ////////////////////////////////////////////////////////////////////////////////////////////////
        // Traitement du formulaire d'ajout de champ
        if ($request->request->has('formNewChamp')) {
            return $this->assistantAffaireProcessNewChampFormAction($this->assistantAffaireGetNewChampForm(), $request);
        }
        ////////////////////////////////////////////////////////////////////////////////////////////////
        // Traitement du formulaire de suppression de champ
        if ($request->request->has('formSuppressionChamp')) {

            $formSuppressionChamp->handleRequest($request);

            if ($formSuppressionChamp->isValid()) {

                $liaisonsAssocies = $em->getRepository('NoxIntranetAdministrationBundle:LiaisonSuiviChamp')->findByIdChamp($formSuppressionChamp['Nom']->getData()->getId());

                if (!empty($liaisonsAssocies)) {
                    foreach ($liaisonsAssocies as $liaison) {

                        $fichierSuiviAssocies = $em->getRepository('NoxIntranetAdministrationBundle:Fichier_Suivi')->findById($liaison->getIdSuivi());

                        if (!empty($fichierSuiviAssocies)) {
                            foreach ($fichierSuiviAssocies as $fichierSuivi) {

                                $suiviAssocies = $em->getRepository('NoxIntranetRessourcesBundle:Suivis')->findByIdModele($fichierSuivi->getId());

                                if (!empty($suiviAssocies)) {
                                    foreach ($suiviAssocies as $suivi) {

                                        $donneesSuivi = $em->getRepository('NoxIntranetRessourcesBundle:DonneesSuivi')->findOneByIdSuivi($suivi->getId());

                                        if (!empty($donneesSuivi)) {
                                            $em->remove($donneesSuivi);
                                        }
                                        $em->remove($suivi);
                                    }
                                }
                                foreach (glob($fichierSuivi->getChemin() . "/*.*") as $filename) {
                                    if (is_file($filename)) {
                                        unlink($filename);
                                    }
                                }
                                rmdir($fichierSuivi->getChemin());
                                $em->remove($fichierSuivi);
                            }
                        }
                        $em->remove($liaison);
                    }
                }
            }

            $em->remove($formSuppressionChamp['Nom']->getData());
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', 'Le champ ' . $formSuppressionChamp['Nom']->getData()->getNom() . ' à été supprimé.');

            return $this->redirectToRoute('nox_intranet_administration_affaires');
        }
        ////////////////////////////////////////////////////////////////////////////////////////////////
        // Traitement du formulaire de séléction de la version du suivi
        if ($request->request->has('formSelectionVersion')) {
            $formSelectionVersion->handleRequest($request);

            if ($formSelectionVersion->isValid()) {

                if ($formSelectionVersion->get('Editer')->isClicked()) {

                    if (empty($profil)) {

                        $profil = $formSelectionVersion['Suivi']->getData()->getProfil();
                    }

                    $fichier = '/' . pathinfo($formSelectionVersion['Suivi']->getData()->getChemin(), PATHINFO_FILENAME) . '.xlsx';

                    return $this->redirectToRoute('nox_intranet_administration_affaires_edition', array('file' => str_replace('\\', '/', $formSelectionVersion['Suivi']->getData()->getChemin()) . $fichier, 'profil' => $profil));
                }

                if ($formSelectionVersion->get('Supprimer')->isClicked()) {

                    $liaisonsAssocies = $em->getRepository('NoxIntranetAdministrationBundle:LiaisonSuiviChamp')->findByIdSuivi($formSelectionVersion['Suivi']->getData()->getId());

                    foreach ($liaisonsAssocies as $liaison) {

                        if (!empty($liaison)) {
                            $em->remove($liaison);
                        }
                    }

                    $suiviAssocies = $em->getRepository('NoxIntranetRessourcesBundle:Suivis')->findByIdModele($formSelectionVersion['Suivi']->getData()->getId());

                    foreach ($suiviAssocies as $suivi) {

                        if (!empty($suivi)) {
                            $donneesSuivi = $em->getRepository('NoxIntranetRessourcesBundle:DonneesSuivi')->findOneByIdSuivi($suivi->getId());

                            if (!empty($donneesSuivi)) {
                                $em->remove($donneesSuivi);
                            }

                            $em->remove($suivi);
                        }
                    }

                    $chemin = $formSelectionVersion['Suivi']->getData()->getChemin() . '/';

                    $files = array_diff(scandir($chemin), array('.', '..'));

                    foreach ($files as $file) {
                        unlink($chemin . $file);
                    }
                    rmdir($chemin);
                    $em->remove($formSelectionVersion['Suivi']->getData());
                    $em->flush();
                    $request->getSession()->getFlashBag()->add('notice', 'Le suivi ' . pathinfo($formSelectionVersion['Suivi']->getData()->getChemin(), PATHINFO_FILENAME) . ' a été supprimé.');
                    return $this->redirectToRoute('nox_intranet_administration_affaires', array('profil' => $profil));
                }

                return $this->redirectToRoute('nox_intranet_administration_affaires');
            }
        }
        ////////////////////////////////////////////////////////////////////////////////////////////////
        // Traitement du formulaire de séléction du champ
        if ($request->request->has('formSelectionChamp')) {
            $formSelectionChamp->handleRequest($request);

            if ($formSelectionChamp->isValid()) {
                return $this->redirectToRoute('nox_intranet_administration_affaires_edition_champ', array('IdChamp' => $formSelectionChamp['Champs']->getData()->getId()));
            }
        }

        ////////////////////////////////////////////////////////////////////////////////////////////////
        // Génération de l'affichage
        return $this->render('NoxIntranetAdministrationBundle:AdministrationAffaires:administrationaffaires.html.twig', array(
                    'formProfils' => $this->assistantAffairesGetProfilsForm()->createView(),
                    'formAjoutFichier' => $formAjoutFichier->createView(), 'formSelectionDossier' => $formSelectionDossier->createView(),
                    'formSelectionVersion' => $formSelectionVersion->createView(), 'champs' => $this->assistantAffairesGetChamps(),
                    'formNewChamp' => $this->assistantAffaireGetNewChampForm()['formulaire']->createView(), 'section' => $section
        ));
        ////////////////////////////////////////////////////////////////////////////////////////////////
    }

    // Retourne un formulaire contenant les profils en base de données.
    public function assistantAffairesGetProfilsForm() {
        $formAjoutProfil = $this->get('form.factory')->createNamedBuilder('formAjoutProfil', 'form')
                ->add('Profils', EntityType::class, array(
                    'class' => 'NoxIntranetRessourcesBundle:Profils',
                    'choice_label' => 'Nom'
                ))
                ->getForm();

        return $formAjoutProfil;
    }

    // Retourne les champs en base de données.
    public function assistantAffairesGetChamps() {
        // On récupére tous les champs en base de données.
        $em = $this->getDoctrine()->getManager();
        $champs = $em->getRepository('NoxIntranetAdministrationBundle:Formulaires')->findAll();

        // On retourne les champs.
        return $champs;
    }

    // Retourne un formulaire de création de nouveau champ.
    public function assistantAffaireGetNewChampForm() {
        // On crée un nouveau champ.
        $newChamp = new Formulaires;

        // On crée un formulaire d'ajout de champ.
        $formNewChamp = $this->get('form.factory')->createNamedBuilder('formNewChamp', 'form', $newChamp)
                ->add('Nom', TextType::class, array(
                    'attr' => array(
                        'placeholder' => 'Nom du champ',
                        'style' => 'text-align: center; box-sizing: border-box; width: 90%;'
                    )
                ))
                ->add('Profil', EntityType::class, array(
                    'class' => 'NoxIntranetRessourcesBundle:Profils',
                    'choice_label' => 'Nom',
                    'placeholder' => 'Choisir un profil',
                    'attr' => array(
                        'style' => 'text-align: center; width: 90%;'
                    )
                ))
                ->add('Type', ChoiceType::class, array(
                    'choices' => array('Texte' => 'Texte', 'Nombre' => 'Nombre', 'Données' => 'Données'),
                    'placeholder' => 'Choisir un type',
                    'attr' => array(
                        'style' => 'text-align: center; width: 90%;'
                    )
                ))
                ->add('AjoutDonnees', CheckboxType::class, array(
                    'label' => 'Permettre l\'ajout de données supplémentaires.',
                    'required' => false,
                    'label_attr' => array(
                        'style' => 'font-size: 0.8vw; display: inline-block; width: 90%;'
                    )
                ))
                ->add('Ajouter', SubmitType::class)
                ->getForm();

        // Retourne le formulaire de création de champ.
        return array('formulaire' => $formNewChamp, 'champ' => $newChamp);
    }

    // Traitre le formulaire d'ajout de champ quand il a été validé.
    public function assistantAffaireProcessNewChampFormAction($formNewChamp, $request) {

        $em = $this->getDoctrine()->getManager();

        // Si le formulaire est valide.
        $formNewChamp['formulaire']->handleRequest($request);
        if ($formNewChamp['formulaire']->isValid()) {
            // Si un champ portant le même nom que celui passé en paramêtre n'existe pas déjà.
            if (empty($em->getRepository('NoxIntranetAdministrationBundle:Formulaires')->findByNom($formNewChamp['formulaire']['Nom']->getData()))) {

                // On attribut le nom du profil plutôt que son ID.
                $formNewChamp['champ']->setProfil($formNewChamp['formulaire']['Profil']->getData()->getNom());

                // On sauvegarde le nouveau champ en base de données.
                $em->persist($formNewChamp['champ']);
                $em->flush();

                // On affiche un message de confirmation de création.
                $request->getSession()->getFlashBag()->add('notice', 'Le champ ' . $formNewChamp['formulaire']['Nom']->getData() . ' à été ajouté.');
            }
            // Si un champ portant le même nom que celui passé en paramêtre existe déjà.
            else {
                // On affiche un message d'erreur.
                $request->getSession()->getFlashBag()->add('noticeErreur', 'Un champ portant le même nom existe déjà !');
            }

            // On redirige vers la page d'administration d'affaire avec 'Champ' comme section.
            return $this->redirectToRoute('nox_intranet_administration_affaires', array('section' => 'champs'));
        }
    }

    public function ajaxGetModeleByProfilAction(Request $request) {

        $em = $this->getDoctrine()->getManager();

        $listeModeles = array();

        if ($request->isXmlHttpRequest()) {
            $profil = $request->get('profil');

            if ($profil === '') {
                $modeles = $em->getRepository("NoxIntranetAdministrationBundle:Fichier_Suivi")->createQueryBuilder('u')
                        ->getQuery()
                        ->getResult();
            } else {
                $modeles = $em->getRepository("NoxIntranetAdministrationBundle:Fichier_Suivi")->createQueryBuilder('u')
                        ->where("u.profil = :profil")
                        ->setParameter('profil', $profil)
                        ->getQuery()
                        ->getResult();
            }

            foreach ($modeles as $modele) {
                $listeModeles[$modele->getId()] = pathinfo($modele->getChemin(), PATHINFO_FILENAME);
            }
        }

        $response = new Response(json_encode($listeModeles));
        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }

    public function ajaxGetModeleByProfilAndNameAction(Request $request) {
        $em = $this->getDoctrine()->getManager();

        $listeModeles = array();

        if ($request->isXmlHttpRequest()) {
            $profil = $request->get('profil');
            $nom = $request->get('nom');

            if ($profil === '') {
                $modeles = $em->getRepository("NoxIntranetAdministrationBundle:Fichier_Suivi")->createQueryBuilder('u')
                        ->getQuery()
                        ->getResult();
            } else {
                $modeles = $em->getRepository("NoxIntranetAdministrationBundle:Fichier_Suivi")->createQueryBuilder('u')
                        ->where("u.profil = :profil")
                        ->setParameter('profil', $profil)
                        ->getQuery()
                        ->getResult();
            }


            if (!empty($nom)) {
                foreach ($modeles as $modele) {
                    if (stristr(pathinfo($modele->getChemin(), PATHINFO_FILENAME), $nom) !== false) {
                        $listeModeles[$modele->getId()] = pathinfo($modele->getChemin(), PATHINFO_FILENAME);
                    }
                }
            } else {
                foreach ($modeles as $modele) {
                    $listeModeles[$modele->getId()] = pathinfo($modele->getChemin(), PATHINFO_FILENAME);
                }
            }
        }

        $response = new Response(json_encode($listeModeles));
        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }

    public function administrationAffairesEditionAction(Request $request, $file, $profil) {

        $root = str_replace('\\', '/', $this->get('kernel')->getRootDir()) . '/..';

        $em = $this->getDoctrine()->getManager();

        include_once $this->get('kernel')->getRootDir() . '/../vendor/phpexcel/phpexcel/PHPExcel.php';

        $filename = pathinfo($file, PATHINFO_FILENAME);

        // Chargement du fichier Excel
        $objReader = new \PHPExcel_Reader_Excel2007();
        $objPHPExcel = $objReader->load($file);

        $sheet = $objPHPExcel->getSheet(0);

        $writer = new \PHPExcel_Writer_Excel2007($objPHPExcel);

        exec("soffice --headless --convert-to pdf --outdir \"" . $root . "/web/ExcelToPDF\" \"" . $file . "\"");

        $pdf = $root . "/web/ExcelToPDF/" . $filename . ".pdf";

        $imagePDFChemin = $root . "/web/ImagePDF/" . $filename . ".png";

        exec("convert \"" . $pdf . "[0]\" -strip \"" . $imagePDFChemin . "\"");

        $imagePDFLien = "http://" . $_SERVER['HTTP_HOST'] . "/Symfony/web/ImagePDF/" . $filename . ".png";

        $suivi = $em->getRepository('NoxIntranetAdministrationBundle:Fichier_Suivi')->findOneByChemin(str_replace('/', '\\', pathinfo($file, PATHINFO_DIRNAME)));

        $liaisonsSuivi = $em->getRepository('NoxIntranetAdministrationBundle:LiaisonSuiviChamp')->findByIdSuivi($suivi->getId());

        $requette = null;

        foreach ($liaisonsSuivi as $liaison) {
            $requette = $requette . " AND u.id != '" . $liaison->getIdChamp() . "'";
        }

        $newLiaisonSuiviChamp = new LiaisonSuiviChamp();

        // Génération du formulaire de positionnement des champ
        if (!empty($em->getRepository('NoxIntranetAdministrationBundle:Formulaires')->findByProfil($profil))) {
            $formPlacementChamp = $this->get('form.factory')->createNamedBuilder('formPlacementChamp', 'form', $newLiaisonSuiviChamp)
                    ->add('IdChamp', EntityType::class, array(
                        'class' => 'NoxIntranetAdministrationBundle:Formulaires',
                        'choice_label' => 'Nom',
                        'query_builder' => function (EntityRepository $er) use ($profil, $requette) {

                            return $er->createQueryBuilder('u')
                                    ->where("u.profil = '" . $profil . "'" . $requette)
                                    ->orderBy('u.nom', 'ASC');
                        },
                    ))
                    ->add('CoordonneesDonnees', TextType::class)
                    ->add('Placer', SubmitType::class)
                    ->getForm();
        } else {
            $formPlacementChamp = $this->get('form.factory')->createNamedBuilder('formPlacementChamp', 'form', $newLiaisonSuiviChamp)
                    ->add('IdChamp', EntityType::class, array(
                        'class' => 'NoxIntranetAdministrationBundle:Formulaires',
                        'choice_label' => 'Nom',
                        'query_builder' => function (EntityRepository $er) use ($profil) {
                            return $er->createQueryBuilder('u')
                                    ->where("u.profil = '" . $profil . "'")
                                    ->orderBy('u.nom', 'ASC');
                        },
                        'disabled' => true,
                        'placeholder' => 'Il n\'y a aucun champ à ajouter.'
                    ))
                    ->add('CoordonneesDonnees', TextType::class, array(
                        'disabled' => true,
                    ))
                    ->add('Placer', SubmitType::class, array(
                        'disabled' => true
                    ))
                    ->getForm();
        }
        ////////////////////////////////////////////////////////////////////////
        // Génération du formulaire de suppression des champs
        $suivi = $em->getRepository('NoxIntranetAdministrationBundle:Fichier_Suivi')->findOneByChemin(str_replace('/', '\\', pathinfo($file, PATHINFO_DIRNAME)));

        if (!empty($em->getRepository('NoxIntranetAdministrationBundle:LiaisonSuiviChamp')->findByIdSuivi($suivi->getId()))) {
            $formSuppresionPositionChamp = $this->get('form.factory')->createNamedBuilder('formSuppresionPositionChamp', 'form')
                    ->add('IdChamp', EntityType::class, array(
                        'class' => 'NoxIntranetAdministrationBundle:LiaisonSuiviChamp',
                        'choice_label' => function($value) use ($em) {
                            return $em->getRepository('NoxIntranetAdministrationBundle:Formulaires')->find($value->getIdChamp())->getNom() . ' - ' . $value->getCoordonneesDonnees();
                        },
                    ))
                    ->add('Supprimer', SubmitType::class)
                    ->getForm();
        } else {
            $formSuppresionPositionChamp = $this->get('form.factory')->createNamedBuilder('formSuppresionPositionChamp', 'form')
                    ->add('IdChamp', EntityType::class, array(
                        'class' => 'NoxIntranetAdministrationBundle:LiaisonSuiviChamp',
                        'choice_label' => null,
                        'disabled' => true,
                        'placeholder' => 'Il n\'y a aucun champ à supprimer.',
                    ))
                    ->add('Supprimer', SubmitType::class, array(
                        'disabled' => true
                    ))
                    ->getForm();
        }
        ////////////////////////////////////////////////////////////////////////
        // Traitement du formulaire de positionnement des champ
        if ($request->request->has('formPlacementChamp')) {
            $formPlacementChamp->handleRequest($request);

            if ($formPlacementChamp->isValid()) {

                $suivi = $em->getRepository('NoxIntranetAdministrationBundle:Fichier_Suivi')->findOneByChemin(str_replace('/', '\\', pathinfo($file, PATHINFO_DIRNAME)));
                $liaisonsSuivi = $em->getRepository('NoxIntranetAdministrationBundle:LiaisonSuiviChamp')->findByIdSuivi($suivi->getId());

                if ($liaisonsSuivi != null) {
                    foreach ($liaisonsSuivi as $liaisonSuivi) {
                        if ($liaisonSuivi->getIdChamp() === $formPlacementChamp['IdChamp']->getData()->getId()) {
                            $anciennePositionDonnees = $liaisonSuivi->getCoordonneesDonnees();
                            $em->remove($liaisonSuivi);
                        }
                    }
                    $em->flush();
                }

                $liaisonPositionIdentique = $em->getRepository('NoxIntranetAdministrationBundle:LiaisonSuiviChamp')->findOneBy(array('idSuivi' => $suivi->getId(), 'coordonneesDonnees' => $formPlacementChamp['CoordonneesDonnees']->getData()));

                if (!empty($liaisonPositionIdentique)) {
                    $sheet->setCellValue($liaisonPositionIdentique->getCoordonneesDonnees(), null);
                    $em->remove($liaisonPositionIdentique);
                    $em->flush();

                    $request->getSession()->getFlashBag()->add('notice', 'Le champ précédemment situé à la position (' . $liaisonPositionIdentique->getCoordonneesDonnees() . ') a été supprimé.');
                }

                $newLiaisonSuiviChamp->setIdSuivi($suivi->getId());
                $newLiaisonSuiviChamp->setIdChamp($formPlacementChamp['IdChamp']->getData()->getId());
                $newLiaisonSuiviChamp->setCoordonneesDonnees($formPlacementChamp['CoordonneesDonnees']->getData());
                $em->persist($newLiaisonSuiviChamp);
                $em->flush();

                if (isset($anciennePositionDonnees)) {
                    $sheet->getCell($anciennePositionDonnees)->setValue(null);
                    $request->getSession()->getFlashBag()->add('notice', 'Le champ ' . $formPlacementChamp['IdChamp']->getData()->getNom() .
                            ' a été ajouté à la position (' . $formPlacementChamp['CoordonneesDonnees']->getData() . "), il remplace le champ " . $formPlacementChamp['IdChamp']->getData()->getNom() . " précédent.");
                } else {
                    $request->getSession()->getFlashBag()->add('notice', 'Le champ ' . $formPlacementChamp['IdChamp']->getData()->getNom() .
                            ' a été ajouté à la position (' . $formPlacementChamp['CoordonneesDonnees']->getData() . ").");
                }

                $sheet->setCellValue($formPlacementChamp['CoordonneesDonnees']->getData(), 'Données: ' . $formPlacementChamp['IdChamp']->getData()->getNom());
                $writer->save($file);

                return $this->redirectToRoute('nox_intranet_administration_affaires_edition', array('profil' => $profil, 'file' => $file));
            }
        }
        ////////////////////////////////////////////////////////////////////////
        // Traitement du formulaire des suppression de la position des champs
        if ($request->request->has('formSuppresionPositionChamp')) {
            $formSuppresionPositionChamp->handleRequest($request);

            if ($formSuppresionPositionChamp->isValid()) {

                $champ = $em->getRepository('NoxIntranetAdministrationBundle:Formulaires')->find($formSuppresionPositionChamp['IdChamp']->getData()->getIdChamp());

                $modele = $em->getRepository('NoxIntranetAdministrationBundle:Fichier_Suivi')->find($formSuppresionPositionChamp['IdChamp']->getData()->getIdSuivi());

                $suivis = $em->getRepository('NoxIntranetRessourcesBundle:Suivis')->findByIdModele($modele->getId());

                foreach ($suivis as $suivi) {

                    $donneesSuivi = $em->getRepository('NoxIntranetRessourcesBundle:DonneesSuivi')->findByIdSuivi($suivi->getId());

                    foreach ($donneesSuivi as $donne) {
                        $em->remove($donne);
                    }
                }

                $sheet->setCellValue($formSuppresionPositionChamp['IdChamp']->getData()->getCoordonneesDonnees(), null);
                $writer->save($file);

                $request->getSession()->getFlashBag()->add('notice', 'Le champ ' . $champ->getNom() . ' a été supprimé de la position ' . $formSuppresionPositionChamp['IdChamp']->getData()->getCoordonneesDonnees());

                $em->remove($formSuppresionPositionChamp['IdChamp']->getData());
                $em->flush();

                return $this->redirectToRoute('nox_intranet_administration_affaires_edition', array('profil' => $profil, 'file' => $file));
            }
        }

        return $this->render('NoxIntranetAdministrationBundle:AdministrationAffaires:administrationaffairesedition.html.twig', array(
                    'filename' => $filename, 'file' => $file, 'formPlacementChamp' => $formPlacementChamp->createView(),
                    'formSuppresionPositionChamp' => $formSuppresionPositionChamp->createView(), 'imagePDF' => $imagePDFLien));
    }

    public function administrationAffaireSauvegardeModificationAction(Request $request, $filename) {

        include_once $this->get('kernel')->getRootDir() . '/../vendor/phpexcel/phpexcel/PHPExcel.php';

        $cookies = $request->cookies;

        if ($cookies->get('editionCellules') == true) {

            $cellules = json_decode($cookies->get('cellules'));

            $workbook = new \PHPExcel;

            $sheet = $workbook->getActiveSheet();
//
//            $response = new Response();
//            $response->setStatusCode(Response::HTTP_OK);
//            $response->headers->set('Content-Type', 'text/html');

            foreach ($cellules as $cellule) {
                if (array_key_exists(0, $cellule) && array_key_exists(1, $cellule) && array_key_exists(2, $cellule)) {
                    $sheet->setCellValue($cellule[1] . $cellule[0], $cellule[2]);
//                    $response->setContent($response->getContent() . " Coordonnes: " . $cellule[1] . $cellule[0] . " Valeur: " . $cellule[2]);
                }
            }

            $writer = new \PHPExcel_Writer_Excel2007($workbook);

            $version = null;

            if (preg_match('/([_][v][0-9]+)/', pathinfo($filename, PATHINFO_BASENAME), $version)) {

                $versionNombre = null;
                preg_match('/([0-9]+)/', $version[0], $versionNombre);
                $versionSauvegarde = '_v' . ($versionNombre[0] + 1);

                $path = pathinfo($filename);
                $fichier = preg_replace('/([_][v][0-9]+)/', $versionSauvegarde . ".xlsx", $path['filename']);
            } else {
                $path = pathinfo($filename);
                $fichier = $path['filename'] . "_v1.xlsx";
            }

            $writer->save(pathinfo($filename, PATHINFO_DIRNAME) . "/" . $fichier);

            $cookies->remove('editionCellules');
            $cookies->remove('cellules');

            $request->getSession()->getFlashBag()->add('notice', 'Le fichier à été sauvegardé sous le nom ' . $fichier);

            return $this->redirectToRoute('nox_intranet_administration_affaires');

//            return new Response(var_dump($version) . ',' . var_dump($versionNombre) . ',' . var_dump($versionSauvegarde));
//            return $response->send();
        } else {
            $request->getSession()->getFlashBag()->add('noticeErreur', 'Erreur lors de la sauvegarde !');

            return $this->redirectToRoute('nox_intranet_administration_affaires_edition', array('filename' => $filename));
        }
    }

    public function administrationAffairesEditionChampAction(Request $request, $IdChamp) {

        $em = $this->getDoctrine()->getManager();

        $champ = $em->getRepository('NoxIntranetAdministrationBundle:Formulaires')->find($IdChamp);

        $formAjoutDonnee = $this->get('form.factory')->createNamedBuilder('formAjoutDonnee', 'form')
                ->add('Donnee', TextType::class)
                ->add('Ajouter', SubmitType::class)
                ->getForm();

        $donneesFormulaire = $em->getRepository('NoxIntranetAdministrationBundle:DonneesFormulaire')->findByIdFormulaire($IdChamp);

        if (!empty($donneesFormulaire)) {
            $formSuppressionDonnee = $this->get('form.factory')->createNamedBuilder('formSuppressionDonnee', 'form')
                    ->add('Donnees', EntityType::class, array(
                        'class' => 'NoxIntranetAdministrationBundle:DonneesFormulaire',
                        'choice_label' => 'Donnee',
                        'query_builder' => function (EntityRepository $er) use ($IdChamp) {
                            return $er->createQueryBuilder('u')
                                    ->where("u.idFormulaire = '" . $IdChamp . "'")
                                    ->orderBy('u.donnee', 'ASC');
                        },
                    ))
                    ->add('Supprimer', SubmitType::class)
                    ->getForm();
        } else {
            $formSuppressionDonnee = $this->get('form.factory')->createNamedBuilder('formSuppressionDonnee', 'form')
                    ->add('Donnees', EntityType::class, array(
                        'class' => 'NoxIntranetAdministrationBundle:DonneesFormulaire',
                        'choice_label' => 'Donnee',
                        'query_builder' => function (EntityRepository $er) use ($IdChamp) {
                            return $er->createQueryBuilder('u')
                                    ->where("u.idFormulaire = '" . $IdChamp . "'")
                                    ->orderBy('u.donnee', 'ASC');
                        },
                        'placeholder' => 'Il n\'y a aucune donnée à supprimer.',
                        'disabled' => true
                    ))
                    ->add('Supprimer', SubmitType::class, array(
                        'disabled' => true
                    ))
                    ->getForm();
        }

        if ($request->request->has('formAjoutDonnee')) {
            $formAjoutDonnee->handleRequest($request);

            if ($formAjoutDonnee->isValid()) {
                $newDonnee = new DonneesFormulaire();

                $donnéesExistantes = $em->getRepository('NoxIntranetAdministrationBundle:DonneesFormulaire')->findByIdFormulaire($IdChamp);

                if ($donnéesExistantes !== null) {
                    foreach ($donnéesExistantes as $donnéeExistante) {
                        if ($donnéeExistante->getDonnee() === $formAjoutDonnee['Donnee']->getData()) {
                            $request->getSession()->getFlashBag()->add('noticeErreur', 'La donnée ' . $formAjoutDonnee['Donnee']->getData() . ' existe déjà pour ce champ.');

                            return $this->redirectToRoute('nox_intranet_administration_affaires_edition_champ', array('IdChamp' => $IdChamp));
                        }
                    }
                }

                $newDonnee->setIdFormulaire($IdChamp);
                $newDonnee->setDonnee($formAjoutDonnee['Donnee']->getData());

                $em->persist($newDonnee);
                $em->flush();

                $request->getSession()->getFlashBag()->add('notice', 'La donnée ' . $formAjoutDonnee['Donnee']->getData() . ' a été ajouter au champ.');

                return $this->redirectToRoute('nox_intranet_administration_affaires_edition_champ', array('IdChamp' => $IdChamp));
            }
        }

        if ($request->request->has('formSuppressionDonnee')) {
            $formSuppressionDonnee->handleRequest($request);

            if ($formSuppressionDonnee->isValid()) {
                $em->remove($formSuppressionDonnee['Donnees']->getData());
                $em->flush();

                $request->getSession()->getFlashBag()->add('notice', 'La donnée ' . $formSuppressionDonnee['Donnees']->getData()->getDonnee() . ' a été supprimé');
            }
        }

        return $this->render('NoxIntranetAdministrationBundle:AdministrationAffaires:administrationaffaireseditionchamp.html.twig', array('formAjoutDonnee' => $formAjoutDonnee->createView(), 'formSuppressionDonnee' => $formSuppressionDonnee->createView(), 'champ' => $champ->getNom()));
    }

}