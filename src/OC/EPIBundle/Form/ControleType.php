<?php
/**
 * Created by PhpStorm.
 * User: leo
 * Date: 28/05/15
 * Time: 10:55
 */

namespace OC\EPIBundle\Form;

use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

/**
 * Class ControleType
 * @package OC\EPIBundle\Form
 */
class ControleType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('dateControle', 'date')
            ->add('sangle', 'choice', array(
                'choices' => array(
                    'B' => 'Bon état',
                    'AS' => 'A surveiller',
                    'AR' => 'A réparer',
                    'R' => 'A rebuter'
                )
            ))
            ->add('couture', 'choice', array(
                'choices' => array(
                    'B' => 'Bon état',
                    'AS' => 'A surveiller',
                    'AR' => 'A réparer',
                    'R' => 'A rebuter'
                )
            ))
            ->add('marquage', 'choice', array(
                'choices' => array(
                    'B' => 'Bon état',
                    'AS' => 'A surveiller',
                    'AR' => 'A réparer',
                    'R' => 'A rebuter'
                )
            ))
            ->add('longes', 'choice', array(
                'choices' => array(
                    'B' => 'Bon état',
                    'AS' => 'A surveiller',
                    'AR' => 'A réparer',
                    'R' => 'A rebuter'
                )
            ))
            ->add('mousqueton', 'choice', array(
                'choices' => array(
                    'B' => 'Bon état',
                    'AS' => 'A surveiller',
                    'AR' => 'A réparer',
                    'R' => 'A rebuter'
                )
            ))
            ->add('remarque', 'textarea')
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