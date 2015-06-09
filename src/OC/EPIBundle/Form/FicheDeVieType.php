<?php
/**
 * Created by PhpStorm.
 * User: leo
 * Date: 25/05/15
 * Time: 14:09
 */

namespace OC\EPIBundle\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

/**
 * Class FicheDeVieType
 * @package OC\EPIBundle\Form
 */
class FicheDeVieType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('modele')
            ->add('fabriquant')
            ->add('identifiantFab', 'text', array(
                'label' => 'Identifiant du fabriquant'
            ))
            ->add('dateFabrication', 'date', array(
                'label' => 'Date de fabrication'
            ))
            ->add('dateAchat', 'date', array(
                'label' => 'Date d\'Achat'
            ))
            ->add('dateMiseEnService', 'date', array(
                'label' => 'Date de mise en service'
            ))
            ->add('dureeDeVie', 'integer', array(
                'label' => 'Durée de vie (en année)'
            ))
            ->add('frequenceControle', 'integer', array(
                'label' => 'Fréquence des contrôles (en jour)'
            ))
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
