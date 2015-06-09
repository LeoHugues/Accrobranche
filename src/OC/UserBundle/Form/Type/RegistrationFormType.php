<?php
/**
 * Created by PhpStorm.
 * User: leo
 * Date: 05/06/15
 * Time: 17:01
 */

namespace OC\UserBundle\Form\Type;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        // add your custom field
        $builder->add('nom')
                ->add('prenom')
        ;
    }

    public function getParent()
    {
        return 'fos_user_registration';
    }

    public function getName()
    {
        return 'oc_user_registration';
    }
}