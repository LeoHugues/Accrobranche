<?php
/**
 * Created by PhpStorm.
 * User: leo
 * Date: 28/05/15
 * Time: 10:58
 */

namespace OC\EPIBundle\Controller;


use Carbon\Carbon;
use OC\EPIBundle\Entity\Controle;
use OC\EPIBundle\Form\ControleType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Session\Session;

class ControleController extends Controller {

    /**
     * @param $idFiche
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     * @route("/insertControle/{idFiche}", name="oc_epi_insert_controle")
     *
     */
    public function insertControleAction($idFiche) {

        $user = $this->getUser();

        if(isset($user))
        {
            $repoControle = $this->getDoctrine()->getRepository("OCEPIBundle:Controle");

            $success = $repoControle->newControleFiche($idFiche, $user);

            if($success) {
                $this->get("session")->getFlashBag()->add("notice", "Un nouveau controle pour tous les équipements de la fiche de vie a été créé. Vous pouvez apporter des modifications à chacuns d'eux en clickant sur les petits boutons de droite.");
            } else {
                $this->get("session")->getFlashBag()->add("alert", "Vous devez ajouter tous les équipements à la fiche de vie pour pouvoir réaliser le premier contrôle.");
            }

            return $this->redirectToRoute("oc_epi_gestionFiche", array(
                'id' => $idFiche
            ));
        }
        return $this->redirectToRoute("fos_user_security_login");
    }

    /**
     * @param Request $request
     * @param $idControle
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     *
     * @route("/updateControle/{idControle}", name="oc_epi_update_controle")
     */
    public function updateControleAction(Request $request, $idControle) {

        $this->initUrl($request);
        $user = $this->getUser();

        if(isset($user)) {
            $controle = $this->getDoctrine()->getRepository('OCEPIBundle:Controle')->find($idControle);

            $form = $this->createForm(new ControleType(), $controle);

            $form->add('Enregistrer', 'submit', array(
                'attr' => array(
                    'class' => 'btn btn-primary'
                )
            ));

            $form->handleRequest($request);

            if ($form->isValid()) {
                /**
                 * @var Controle $controle
                 */
                $controle = $form->getData();

                $manager = $this->getDoctrine()->getManager();
                $manager->persist($controle);
                $manager->flush();

                $this->get("session")->getFlashBag()->add("notice", "Le contrôle a été modifier avec succée !");
                $url = $this->get("session")->get('url');
                $this->get("session")->remove('url');

                return $this->redirect($url);
            }
            return $this->render('OCEPIBundle:Form:insertEquipement.html.twig', array('form' => $form->createView()));
        }
        return $this->redirectToRoute("fos_user_security_login");
    }

    /**
     * @param $id
     * @param $date
     * @return RedirectResponse
     * @route("/remove/{id}/{date}", name="oc_epi_remove_controle")
     */
    public function removeControles($id, $date) {

        $user = $this->getUser();

        if(isset($user)) {


            $em = $this->getDoctrine()->getEntityManager();
            $controles = $em->getRepository('OCEPIBundle:Controle')->getControleEquipementFromDate($id, $date);

            foreach ($controles as $controle) {
                $em->remove($controle);
            }

            $em->flush();
            $em->clear();

            $this->get("session")->getFlashBag()->add("notice", "Tous les contrôles ont été supprimé avec succée ! ");

            return $this->redirectToRoute("oc_epi_gestionFiche", array(
                'id' => $id
            ));
        }
        return $this->redirectToRoute("fos_user_security_login");
    }

    public function initUrl($request) {
        $url = $this->get('session')->get('url');

        if(empty($url) || $url === null) {
            $referer = $request->headers->get('referer');
            $this->get('session')->set('url', $referer);
        }
    }
}