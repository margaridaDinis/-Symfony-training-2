<?php
namespace AppBundle\Entity\Enum;

/**
 * Class JamYearEnum
 * @package AppBundle\Entity\Enum
 */
class JamYearEnum
{
    const YEAR_2014 = '2014';
    const YEAR_2015 = '2015';
    const YEAR_2016 = '2016';
    const YEAR_2017 = '2017';

    const YEARS =
        [
            self::YEAR_2014 => self::YEAR_2014,
            self::YEAR_2015 => self::YEAR_2015,
            self::YEAR_2016 => self::YEAR_2016,
            self::YEAR_2017 => self::YEAR_2017
        ];
}