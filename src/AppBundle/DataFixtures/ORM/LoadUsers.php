<?php
/**
 * Created by PhpStorm.
 * User: william
 * Date: 2/2/18
 * Time: 5:10 PM
 */

namespace AppBundle\DataFixtures\ORM;


use AppBundle\Entity\User;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadUsers implements FixtureInterface
{

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $user1 = new User();
        $user1->setName("Tom Foolery");
        $user1->setBio("This guy is so goofy. What a goof.");
        $user1->setEmail("tom.foolery@williamareynolds.com");
        $manager->persist($user1);

        $user2 = new User();
        $user2->setName("Swag Wench");
        $user2->setBio("Contains and manages all the swag forever");
        $user2->setEmail("swag.wench@williamareynolds.com");
        $manager->persist($user2);

        $manager->flush();
    }
}