<?php

namespace OC\EPIBundle\Entity;

use Doctrine\ORM\EntityRepository;

class FicheDeVieRepository extends EntityRepository
{
    public function myFindAll() {
        $repoEquipement = $this->getEntityManager()->getRepository("OCEPIBundle:Equipement");
        $repoControle = $this->getEntityManager()->getRepository("OCEPIBundle:Controle");

        $fiches = $this->getEntityManager()->getRepository("OCEPIBundle:FicheDeVie")->findAll();

        /**
         * @var FicheDeVie $fiche
         */
        foreach($fiches as $fiche) {
            $equipements = $repoEquipement->findBy(array(
                "ficheDeVie" => $fiche->getId()
            ));

            /**
             * @var Equipement $equipement
             */
            foreach($equipements as $equipement) {
                $equipement->setControles($repoControle->getLastControleOfEquipement($equipement->getId()));
            }

            $fiche->setEquipements($equipements);
        }

        return $fiches;
    }

    /**
     * @param $id
     * @return null|object
     */
    public function myFind($id) {
        $fiche = $this->getEntityManager()->getRepository("OCEPIBundle:FicheDeVie")->find($id);
        $repoEquipement = $this->getEntityManager()->getRepository("OCEPIBundle:Equipement");
        $repoControle = $this->getEntityManager()->getRepository("OCEPIBundle:Controle");

        $equipements = $repoEquipement->findBy(array(
            "ficheDeVie" => $fiche->getId()
        ));
        /**
         * @var Equipement $equipement
         */
        foreach($equipements as $equipement) {
            $controles = $repoControle->getControlesOfEquipement($equipement->getId());
            foreach($controles as $controle)  {
                $controle->setEquipement($equipement);
            }

            $equipement->setControles($controles);
        }

        $fiche->setEquipements($equipements);

        return $fiche;
    }
}
