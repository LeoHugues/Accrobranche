<?php
/**
 * Created by PhpStorm.
 * User: leo
 * Date: 23/05/15
 * Time: 16:16
 */

namespace OC\EPIBundle\DataFixtures\ORM;


use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use OC\EPIBundle\Entity\Equipement;


class LoadEquipementData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        for($i = 0; $i < 61; $i++) {

            $equipement = new Equipement();

            $equipement->setNumInterne($i);
            $equipement->setNumSerie(rand(100000, 999999));

            if($i > 0 && $i < 16) {
                $equipement->setFicheDeVie($this->getReference("fiche1"));
            } elseif ($i > 15 && $i < 31) {
                $equipement->setFicheDeVie($this->getReference("fiche2"));
            } elseif ($i > 30 && $i < 46) {
                $equipement->setFicheDeVie($this->getReference("fiche3"));
            } elseif ($i > 45 && $i < 61) {
                $equipement->setFicheDeVie($this->getReference("fiche4"));
            }

            $manager->persist($equipement);
            $this->addReference('equipement'.$i, $equipement);
        }

        $manager->flush();
    }

    /**
     * {@inheritDoc}
     */
    public function getOrder()
    {
        return 4;
    }
}