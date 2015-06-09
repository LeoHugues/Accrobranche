<?php
/**
 * Created by PhpStorm.
 * User: leo
 * Date: 19/05/15
 * Time: 13:32
 */

namespace OC\EPIBundle\Controller;


use Carbon\Carbon;
use OC\EPIBundle\Entity\FicheDeVie;
use OC\EPIBundle\Form\FicheDeVieType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class FicheDeVieController extends Controller {

    /**
     * @Route("/", name="oc_epi_index")
     */
    public function indexAction() {

        $user = $this->getUser();

        if(isset($user)) {
            $repo = $this->getDoctrine()->getManager()->getRepository("OCEPIBundle:FicheDeVie");
            $fiches = $repo->myFindAll();

            /**
             * @var FicheDeVie $fiche
             */
            foreach($fiches as $fiche) {
                /**
                 * @var \DateTime $dateControleMax
                 */
                $dateTime = $fiche->getEquipements()[0]->getControles()[0]->getDateControle();
                $dateMinLastcontrole = Carbon::createFromFormat('Y-m-d',$dateTime->format('Y-m-d'));

                $dateMinLastcontrole->addDay($fiche->getFrequenceControle());
                $today = Carbon::today();

                if($today > $dateMinLastcontrole) {
                    $this->get("session")->getFlashBag()->add("warning", "Les contrôles de la fiche de vie des ".$fiche->getModele()." ".$fiche->getFabriquant()." ne sont pas à jour !");
                }

            }

            return $this->render("OCEPIBundle:Default:index.html.twig", array(
                'fiches' => $fiches
            ));
        } else {
            return $this->redirectToRoute("fos_user_security_login");        }
    }

    /**
     * @Route("/insertFiche", name="oc_epi_insert_ficheDeVie")
     */
    public function insertFicheDeVieAction(Request $request) {

        $user = $this->getUser();

        if(isset($user))
        {
            $ficheDeVie = new FicheDeVie();

            $form = $this->createForm(new FicheDeVieType(), $ficheDeVie);

            $form->add('Enregistrer', 'submit', array(
                'attr' => array(
                    'class' => 'btn btn-primary'
                )
            ));

            $form->handleRequest($request);

            if ($form->isValid()) {

                $ficheDeVie = $form->getData();

                $manager = $this->getDoctrine()->getManager();
                $manager->persist($ficheDeVie);
                $manager->flush();

                $this->get("session")->getFlashBag()->add("notice", "La fiche de vie a été ajouté avec succée !");

                return $this->redirectToRoute("oc_epi_index");
            }
            return $this->render('OCEPIBundle:Form:insertFicheDeVie.html.twig', array('form' => $form->createView()));
        }

        return $this->redirectToRoute("fos_user_security_login");
    }

    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     *
     * @Route("/updateFiche/{id}", name="oc_epi_update_fiche")
     */
    public function updateFicheDeVieAction(Request $request, $id) {

        $user = $this->getUser();

        if(isset($user))
        {
            $ficheDeVie = $this->getDoctrine()->getRepository("OCEPIBundle:FicheDeVie")->find($id);

            $form = $this->createForm(new FicheDeVieType(), $ficheDeVie);

            $form->add('Enregister', 'submit', array(
                'attr' => array(
                    'class' => 'btn btn-primary'
                )
            ));

            $form->handleRequest($request);

            if ($form->isValid()) {

                $ficheDeVie = $form->getData();

                $manager = $this->getDoctrine()->getManager();
                $manager->persist($ficheDeVie);
                $manager->flush();

                $this->get("session")->getFlashBag()->add("notice", "La fiche de vie a été modifié avec succée !");

                return $this->redirectToRoute("oc_epi_index");
            }
            return $this->render('OCEPIBundle:Form:insertFicheDeVie.html.twig', array('form' => $form->createView()));
        }

        return $this->redirectToRoute("fos_user_security_login");
    }

    /**
     * @param $id
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     *
     * @route("/removeFiche/{id}", name="oc_epi_remove_fiche")
     */
    public function deleteFicheAction($id) {

        $user = $this->getUser();

        if(isset($user))
        {
            $fiche = $this->getDoctrine()->getRepository("OCEPIBundle:FicheDeVie")->myFind($id);

            $manager = $this->getDoctrine()->getManager();
            $manager->remove($fiche);
            $manager->flush();

            $this->get("session")->getFlashBag()->add("notice", "La fiche de vie a été supprimé avec succée !");

            return $this->redirectToRoute("oc_epi_index");
        }
        return $this->redirectToRoute("fos_user_security_login");
    }

    /**
     * @param $id
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/gestionFiche/{id}/{page}", name="oc_epi_gestionFiche")
     *
     */
    function gestionFicheDeVie($id, $page = 1) {
        /**
         * @var FicheDeVie $fiche
         */
        $fiche = $this->getDoctrine()->getRepository("OCEPIBundle:FicheDeVie")->myFind($id);

        if(array_key_exists(0, $fiche->getEquipements())) {
            if(count($fiche->getEquipements()[0]->getControles()) > 0) {
                $nbPage = count($fiche->getEquipements()[0]->getControles());
            } else {
                $nbPage = 1;
            }
        } else {
            $nbPage = 1;
        }

        $pagination = array(
            'page' => $page,
            'route' => 'oc_epi_gestionFiche',
            'pages_count' => $nbPage,
            'route_params' => array()
        );

        return $this->render("OCEPIBundle:Gestion:gestionFicheDeVie.html.twig", array(
            'fiche' => $fiche,
            'pagination' => $pagination
        ));
    }
}