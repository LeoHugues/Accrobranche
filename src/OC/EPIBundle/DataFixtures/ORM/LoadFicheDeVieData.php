<?php
/**
 * Created by PhpStorm.
 * User: leo
 * Date: 23/05/15
 * Time: 15:50
 */

namespace OC\EPIBundle\DataFixtures\ORM;

use Carbon\Carbon;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use OC\EPIBundle\Entity\FicheDeVie;


class LoadFicheDeVieData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        for($i = 1; $i < 5; $i++) {

            $ficheDeVie = new FicheDeVie();

            $date = Carbon::create(rand(2007, 2014), rand(1,12), rand(1,27));

            $ficheDeVie->setDateAchat($date);
            $date->month = $date->month + 1;
            $ficheDeVie->setDateMiseEnService($date);
            $date->year = $date->year - 1;
            $ficheDeVie->setDateFabrication($date);

            switch ($i) {
                case 1 :
                    $ficheDeVie->setFabriquant("Petzl");
                    $ficheDeVie->setDureeDeVie(10);
                    $ficheDeVie->setIdentifiantFab("petzl300015489");
                    $ficheDeVie->setFrequenceControle(15);
                    $ficheDeVie->setModele("harnais");
                    break;
                case 2 :
                    $ficheDeVie->setFabriquant("Beal");
                    $ficheDeVie->setDureeDeVie(9);
                    $ficheDeVie->setIdentifiantFab("4154beal876");
                    $ficheDeVie->setFrequenceControle(7);
                    $ficheDeVie->setModele("baudrier");
                    break;
                case 3 :
                    $ficheDeVie->setFabriquant("Camp");
                    $ficheDeVie->setDureeDeVie(8);
                    $ficheDeVie->setIdentifiantFab("45camp5466z64");
                    $ficheDeVie->setFrequenceControle(8);
                    $ficheDeVie->setModele("baudrier");
                    break;
                case 4 :
                    $ficheDeVie->setFabriquant("Edelweiss");
                    $ficheDeVie->setDureeDeVie(11);
                    $ficheDeVie->setIdentifiantFab("edel875s6d");
                    $ficheDeVie->setFrequenceControle(10);
                    $ficheDeVie->setModele("baudrier");
                    break;
            }

            $manager->persist($ficheDeVie);
            $this->addReference('fiche'.$i, $ficheDeVie);
        }

        $manager->flush();


    }

    /**
     * {@inheritDoc}
     */
    public function getOrder()
    {
        return 3;
    }
}