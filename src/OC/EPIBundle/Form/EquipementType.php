<?php
/**
 * Created by PhpStorm.
 * User: leo
 * Date: 26/05/15
 * Time: 16:38
 */

namespace OC\EPIBundle\Form;

use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

/**
 * Class EquipementType
 * @package OC\EPIBundle\Form
 */
class EquipementType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('ficheDeVie', 'entity', array(
                    'property'      => 'label',
                    'class'         => 'OCEPIBundle:FicheDeVie',
                    'query_builder' => function(EntityRepository $er) {
                        return $er->createQueryBuilder('ficheDeVie')
                            ->groupBy('ficheDeVie.id')
                            ->orderBy('ficheDeVie.fabriquant', 'ASC');
                    },
                )
            )
            ->add('numInterne')
            ->add('numSerie')
        ;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'oc_epi_ficheDeVie';
    }
}