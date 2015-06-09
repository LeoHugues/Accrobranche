<?php
/**
 * Created by PhpStorm.
 * User: leo
 * Date: 23/05/15
 * Time: 16:32
 */

namespace OC\EPIBundle\DataFixtures\ORM;


use Carbon\Carbon;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use OC\EPIBundle\Entity\Controle;
use OC\EPIBundle\Entity\Equipement;
use OC\EPIBundle\Entity\FicheDeVie;


class LoadControleData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        /**
         * @var FicheDeVie $fiche1
         */
        $fiche1 = $this->getReference("fiche1");
        /**
         * @var FicheDeVie $fiche2
         */
        $fiche2 = $this->getReference("fiche2");
        /**
         * @var FicheDeVie $fiche3
         */
        $fiche3 = $this->getReference("fiche3");
        /**
         * @var FicheDeVie $fiche4
         */
        $fiche4 = $this->getReference("fiche4");

        for($i = 0; $i < 610; $i++) {

            $controle = new Controle();

            $controle->setUser($this->getReference("Mag"));
            $refEquipement = floor($i/10);
            $controle->setEquipement($this->getReference("equipement".$refEquipement));

            $controle->setCouture("B");
            $controle->setLonges("B");
            $controle->setMarquage("B");
            $controle->setMousqueton("B");
            $controle->setSangle("B");

            $controle->setRemarque("Rien à signaler");

            // Conditions pertmettant de trier par fiche de vie
            if($i >= 0 && $i < 150) {
                $controle->setDateControle(Carbon::createFromDate(2014, 06, 25)->addDay($fiche1->getFrequenceControle() * ($i % 10)));
            } elseif ($i >= 150 && $i < 300) {
                $controle->setDateControle(Carbon::createFromDate(2014, 06, 25)->addDay($fiche2->getFrequenceControle() * ($i % 10)));
            } elseif ($i >= 300 && $i < 450) {
                $controle->setDateControle(Carbon::createFromDate(2014, 06, 25)->addDay($fiche3->getFrequenceControle() * ($i % 10)));
            } elseif ($i >= 450 && $i < 610) {
                $controle->setDateControle(Carbon::createFromDate(2014, 06, 25)->addDay($fiche4->getFrequenceControle() * ($i % 10)));
            }
            $manager->persist($controle);
        }

        $manager->flush();
    }

    /**
     * {@inheritDoc}
     */
    public function getOrder()
    {
        return 5;
    }
}