<?php
namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\Enum\JamTypeEnum;
use AppBundle\Entity\Enum\JamYearEnum;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Nelmio\Alice\Fixtures;

class LoadFixtures implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $objects = Fixtures::load(
            __DIR__.'/fixtures.yml',
            $manager,
            [
                'providers' => [$this]
            ]
        );
    }

    /**
     * @return mixed
     */
    public function jamTypes()
    {
        $types = JamTypeEnum::TYPES;

        $key = array_rand($types);
        return $types[$key];
    }

    /**
     * @return mixed
     */
    public function jamYears()
    {
        $years = JamYearEnum::YEARS;

        $key = array_rand($years);
        return $years[$key];
    }
}