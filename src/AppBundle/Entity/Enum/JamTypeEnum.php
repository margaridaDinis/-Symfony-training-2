<?php
namespace AppBundle\Entity\Enum;

/**
 * Class JamTypeEnum
 * @package AppBundle\Entity\Enum
 */
class JamTypeEnum
{
    const STRAWBERRY = 'Strawberry';
    const PUMPKIN = 'Pumpkin';
    const RED_PEPPER = 'Red Pepper';
    const PEACH = 'Peach';
    const APPLE = 'Apple';
    const PEAR = 'Pear';
    const BLUEBERRY = 'Blueberry';

    const TYPES =
        [
            self::STRAWBERRY => self::STRAWBERRY,
            self::PUMPKIN => self::PUMPKIN,
            self::RED_PEPPER => self::RED_PEPPER,
            self::PEACH => self::PEACH,
            self::APPLE => self::APPLE,
            self::PEAR => self::PEAR,
            self::BLUEBERRY => self::BLUEBERRY
        ];
}