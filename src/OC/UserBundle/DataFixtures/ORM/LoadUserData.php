<?php
/**
 * Created by PhpStorm.
 * User: leo
 * Date: 23/05/15
 * Time: 15:21
 */

namespace OC\UserBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use OC\UserBundle\Entity\User;


class LoadUserData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $userAdmin = new User();
        $usertest = new User();

        $userAdmin->setSuperAdmin(true);
        $userAdmin->setUsername("admin");
        $userAdmin->setPlainPassword("admin");
        $userAdmin->setNom("Hugues");
        $userAdmin->setPrenom("Léo");
        $userAdmin->setEmail("leo.hugues@epsi.fr");
        $userAdmin->setEnabled(true);

        $usertest->setSuperAdmin(true);
        $usertest->setUsername("Magaloche");
        $usertest->setPlainPassword("magali2015");
        $usertest->setNom("Magali");
        $usertest->setPrenom("NoLoSabeis");
        $usertest->setEmail("magali@oc-aventures.com");
        $usertest->setEnabled(true);


        $manager->persist($userAdmin);
        $manager->persist($usertest);

        $manager->flush();

        $this->addReference('Mag', $usertest);
    }

    /**
     * {@inheritDoc}
     */
    public function getOrder()
    {
        return 1;
    }
}