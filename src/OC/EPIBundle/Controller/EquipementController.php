<?php
/**
 * Created by PhpStorm.
 * User: leo
 * Date: 26/05/15
 * Time: 16:36
 */

namespace OC\EPIBundle\Controller;


use OC\EPIBundle\Entity\Equipement;
use OC\EPIBundle\Form\EquipementType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;


class EquipementController extends Controller {

    /**
     * @param $id
     * @return \Symfony\Component\HttpFoundation\Response
     * @route("/gestionEquipement/{id}", name="oc_epi_gestion_equipement")
     */
    public function gestionEquipementAction($id) {
        /**
         * @var Equipement $equipement
         */
        $equipement = $this->getDoctrine()->getRepository("OCEPIBundle:Equipement")->getEquipement($id);

        return $this->render("OCEPIBundle:Gestion:gestionEquipement.html.twig", array(
            'equipement' => $equipement,
        ));
    }

    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     * @route("/insertEquipement", name="oc_epi_insert_equipement")
     */
    public function insertEquipementAction(Request $request) {

        $user = $this->getUser();

        if(isset($user))
        {
            $equipement = new Equipement();

            $form = $this->createForm(new EquipementType(), $equipement);

            $form->add('Enregistrer', 'submit', array(
                'attr' => array(
                    'class' => 'btn btn-primary'
                )
            ));

            $form->handleRequest($request);

            if ($form->isValid()) {
                /**
                 * @var Equipement $equipement
                 */
                $equipement = $form->getData();

                $manager = $this->getDoctrine()->getManager();
                $manager->persist($equipement);
                $manager->flush();

                $this->get("session")->getFlashBag()->add("notice", "L'équipement a été ajouté avec succée !");

                return $this->redirectToRoute("oc_epi_index");
            }
            return $this->render('OCEPIBundle:Form:insertEquipement.html.twig', array('form' => $form->createView()));
        }
        return $this->redirectToRoute("fos_user_security_login");
    }

    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     * @route("/updateEquipement/{id}", name="oc_epi_update_equipement")
     */
    public function updateEquipementAction(Request $request, $id) {

        $user = $this->getUser();

        if(isset($user))
        {
            $equipement = $this->getDoctrine()->getRepository("OCEPIBundle:Equipement")->find($id);

            $form = $this->createForm(new EquipementType(), $equipement);

            $form->add('Enregistrer', 'submit', array(
                'attr' => array(
                    'class' => 'btn btn-primary'
                )
            ));

            $form->handleRequest($request);

            if ($form->isValid()) {
                /**
                 * @var Equipement $equipement
                 */
                $equipement = $form->getData();

                $manager = $this->getDoctrine()->getManager();
                $manager->persist($equipement);
                $manager->flush();

                $this->get("session")->getFlashBag()->add("notice", "L'équipement a été modifié avec succée !");

                return $this->redirectToRoute("oc_epi_index");
            }
            return $this->render('OCEPIBundle:Form:insertEquipement.html.twig', array('form' => $form->createView()));
        }
        return $this->redirectToRoute("fos_user_security_login");
    }

    /**
     * @param $id
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     *
     * @route("/removeEquipement/{id}", name="oc_epi_remove_equipement")
     */
    public function deleteEquipementAction($id) {

        $user = $this->getUser();

        if(isset($user))
        {
            $doctrine = $this->getDoctrine();
            $equipement = $doctrine->getRepository("OCEPIBundle:Equipement")->myFind($id);

            $manager = $this->getDoctrine()->getManager();
            $manager->remove($equipement);
            $manager->flush();

            $this->get("session")->getFlashBag()->add("notice", "L'équipement a été supprimé avec succée !");

            return $this->redirectToRoute("oc_epi_index");
        }
        return $this->redirectToRoute("fos_user_security_login");
    }
}