<?php

namespace OC\EPIBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * EquipementRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class EquipementRepository extends EntityRepository
{
    public function getEquipementsByIdFiche($idFiche) {
        $qb = $this->_em->createQueryBuilder();

        $qb->select('e.id')
            ->from('OCEPIBundle:Equipement', 'e')
            ->where('e.ficheDeVie = '.$idFiche);

        return $qb->getQuery()->getResult();
    }

    public function myFind($id) {
        $equipement = $this->find($id);
        $equipement->setControles($this->getEntityManager()->getRepository("OCEPIBundle:Controle")->getControlesOfEquipement($id));
        return $equipement;
    }

    public function getEquipement($id) {
        /**
         * @var Equipement $equipement
         */
        $equipement = $this->find($id);

/*        $qb = $this->_em->createQueryBuilder();

        $qb->select('e.ficheDeVie')
            ->from('OCEPIBundle:Equipement', 'e')
            ->where('e.id = '.$id);
        $ficheId = $qb->getQuery()->getResult();
*/

        $sql = 'SELECT ficheDeVie_id FROM Equipement WHERE id = '.$id;
        $ficheId = $this->getEntityManager()->getConnection()->executeQuery($sql)->fetchAll();

        $fiche = $this->getEntityManager()->getRepository("OCEPIBundle:FicheDeVie")->find($ficheId[0]["ficheDeVie_id"]);

        $controles = $this->getEntityManager()->getRepository("OCEPIBundle:Controle")->getControlesOfEquipement($id);

        $equipement->setFicheDeVie($fiche);
        $equipement->setControles($controles);

        return $equipement;
    }
}
