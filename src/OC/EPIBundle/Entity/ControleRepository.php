<?php

namespace OC\EPIBundle\Entity;

use Carbon\Carbon;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Tools\Pagination\Paginator;
use OC\EPIBundle\Entity\Controle as Controle;
use Symfony\Component\Validator\Constraints\DateTime;

class ControleRepository extends EntityRepository
{
    public function getLastControleOfEquipement($id) {

        $em = $this->getEntityManager();
        $qb = $em->createQueryBuilder();

        $qb->select('c')
            ->from('OCEPIBundle:Controle', 'c')
            ->where('c.equipement = '.$id)
            ->orderBy('c.dateControle', 'DESC')
            ->setMaxResults(1);

       return $qb->getQuery()->getResult();
    }

    /**
     * @param $id
     * @param Carbon $date
     * @return array
     */
    public function getControleEquipementFromDate($id, $date) {

        $equipements = $this->getEntityManager()->getRepository('OCEPIBundle:Equipement')->getEquipementsByIdFiche($id);

        $em = $this->getEntityManager();
        $qb = $em->createQueryBuilder();

        $dateStringPlusUn = Carbon::createFromFormat('Y-m-d',$date)->addDay()->format('Y-m-d');

       // var_dump('<h1>'.$date.'</h1>');
         //   var_dump('<h1>'.$dateStringPlusUn.'</h1>');

        $qb->select('c')
            ->from('OCEPIBundle:Controle', 'c')
            ->leftJoin('c.equipement', 'e')
            ->where("e.id IN(:ids)")
            ->setParameters(array('ids' => $equipements))
            ->andWhere("c.dateControle between (:date1) and (:date2) ")
            ->setParameter('date1', $date)
            ->setParameter('date2', $dateStringPlusUn)
            ;

        $controles =$qb->getQuery()->getResult();

        //var_dump('<h1>'.count($controles).'</h1>');die;

        return $controles;
    }

    public function getControlesOfEquipement($id) {

        $em = $this->getEntityManager();
        $qb = $em->createQueryBuilder();

        $qb->select('c')
            ->from('OCEPIBundle:Controle', 'c')
            ->where('c.equipement = '.$id)
            ->orderBy('c.dateControle', 'DESC');

        return $qb->getQuery()->getResult();
    }

    /**
     * @param int $page
     * @param int $maxperpage
     * @param int $idFiche
     * @return Paginator
     */
    public function getPaginatedList($page = 1, $maxperpage = 15, $idFiche){

        $EquipementRepo = $this->_em->getRepository("OCEPIBundle:Equipement");
        $ids = $EquipementRepo->getEquipementId($idFiche);

        $qb = $this->_em->createQueryBuilder();

        $qb->select('c')
            ->from("OCEPIBundle:Controle", "c")
            ->where('c.equipements IN (:ids)')
            ->setParameter('ids', $ids)
            ->orderBy('c.dateControle', 'ASC');

        $qb->setFirstResult(($page-1) * $maxperpage)
            ->setMaxResults($maxperpage);

        return new Paginator($qb);
    }

    public function countControle($idFiche) {
        $EquipementRepo = $this->_em->getRepository("OCEPIBundle:Equipement");
        $ids = $EquipementRepo->getEquipementId($idFiche);

        $qb = $this->_em->createQueryBuilder();

        $qb->select('COUTN(c)')
            ->from("OCEPIBundle:Controle", "c")
            ->where('c.equipements IN (:ids)')
            ->setParameter('ids', $ids);

        return $qb->getQuery()->getSingleScalarResult();
    }

    /**
     * @param $fiche
     * @param $user
     */
    public function insertFirstControle($fiche, $user) {

        if(count($fiche->getEquipements()) > 0) {

            $manager = $this->getEntityManager();

            /**
             * @var Controle $controle
             */
            $newControle = new Controle();
            $newControle->setUser($user);
            $newControle->setCouture("B");
            $newControle->setDateControle(Carbon::now());
            $newControle->setLonges("B");
            $newControle->setMarquage("B");
            $newControle->setMousqueton("B");
            $newControle->setRemarque("Rien à Signaler");
            $newControle->setSangle("B");

            foreach($fiche->getEquipements() as $equipement) {
                $newControle->setEquipement($equipement);
                $manager->merge($newControle);
            }
            $manager->flush();
        }
    }

    /**
     * @param FicheDeVie $fiche
     * @param $user
     */
    public function updateFicheWithLastControle($fiche, $user) {

        $manager = $this->getEntityManager();

        foreach($fiche->getEquipements() as $equipement) {

            $controle = $equipement->getControles()[0];

            $newControle = new Controle();

            $newControle->setDateControle(Carbon::now());
            $newControle->setUser($user);


            $newControle->setEquipement($equipement);
            $newControle->setCouture($controle->getCouture());
            $newControle->setLonges($controle->getLonges());
            $newControle->setMarquage($controle->getMarquage());
            $newControle->setMousqueton($controle->getMousqueton());
            $newControle->setRemarque($controle->getRemarque());
            $newControle->setSangle($controle->getSangle());

            $manager->merge($newControle);
        }
        $manager->flush();
    }

    public function newControleFiche($idFiche, $user) {

        $fiche = $this->getEntityManager()->getRepository("OCEPIBundle:FicheDeVie")->myFind($idFiche);

        if(count($fiche->getEquipements()) > 0) {
            if(count($fiche->getEquipements()[0]->getControles()) > 0) {
                $this->updateFicheWithLastControle($fiche, $user);
                return true;
            } else {
                $this->insertFirstControle($fiche, $user);
                return true;
            }
        }

        return false;
    }
}
