<?php
namespace AppBundle\Service;
use AppBundle\Entity\JamJar;
use Doctrine\ORM\EntityManagerInterface;
class JamJarService
{
    protected $manager;

    /**
     * JamJarService constructor.
     *
     * @param EntityManagerInterface $manager
     */
    public function __construct(EntityManagerInterface $manager)
    {
        $this->manager = $manager;
    }
    public function saveJamJar($quantity = 1, JamJar $jamJar)
    {
        for ($i = 1; $i < $quantity; $i++) {
            $this->manager->persist(clone $jamJar);
        }
        $this->manager->flush();
    }

}
