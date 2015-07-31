<?php
/**
 * Created by PhpStorm.
 * User: leo
 * Date: 12/07/15
 * Time: 16:24
 */

namespace WebSiteBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;


class FrontController extends Controller {

    /**
     * @Route("/{_locale}/", name="website_index")
     * @Route("/", defaults={"_locale"="fr"}, requirements = {"_locale" = "fr|en|de"})
     */
    public function indexAction(Request $request) {

        return $this->render('WebSiteBundle::index.html.twig', array());
    }

    /**
     * @Route("/{_locale}/parcours", name="website_parcours")
     * @Route("/parcours", defaults={"_locale"="fr"}, requirements = {"_locale" = "fr|en|de"})
     */
    public function parcoursAction() {
        return $this->render('WebSiteBundle::about.html.twig', array());
    }

    /**
     * @Route("/{_locale}/horaires", name="website_horaires")
     * @Route("/horaires", defaults={"_locale"="fr"}, requirements = {"_locale" = "fr|en|de"})
     */
    public function horairesAction() {
        return $this->render('WebSiteBundle::blog.html.twig', array());
    }

    /**
     * @Route("/tarif", name="website_tarif")
     */
    public function tarifAction() {
        return $this->render('WebSiteBundle::index.html.twig', array());
    }

    /**
     * @Route("/plan", name="website_plan")
     */
    public function planAction() {
        return $this->render('WebSiteBundle::index.html.twig', array());
    }

    /**
     * @Route("/contact", name="website_contact")
     */
    public function contactAction() {
        return $this->render('WebSiteBundle::contact.html.twig', array());
    }

    /**
     * @Route("/lien", name="website_lien")
     */
    public function lienAction() {
        return $this->render('WebSiteBundle::index.html.twig', array());
    }
}