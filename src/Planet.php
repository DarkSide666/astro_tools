<?php
namespace DarkSide666\AstroTools;

class Planet extends AbstractObject
{
    const SUN = 'SUN';
    const MOON = 'MOON';
    const MERCURY = 'MERCURY';
    const VENUS = 'VENUS';
    const MARS = 'MARS';
    const JUPITER = 'JUPITER';
    const SATURN = 'SATURN';
    const URANUS = 'URANUS';
    const NEPTUNE = 'NEPTUNE';
    const PLUTO = 'PLUTO';

    const CHIRON = 'CHIRON';
    const LILITH = 'LILITH';
    const TNODE = 'TNODE';

    // all
    protected static $all = [
        self::SUN,
        self::MOON,
        self::MERCURY,
        self::VENUS,
        self::MARS,
        self::JUPITER,
        self::SATURN,
        self::URANUS,
        self::NEPTUNE,
        self::PLUTO,
        self::CHIRON,
        self::LILITH,
        self::TNODE,
    ];

    // all planets
    protected static $all_planets = [
        self::SUN,
        self::MOON,
        self::MERCURY,
        self::VENUS,
        self::MARS,
        self::JUPITER,
        self::SATURN,
        self::URANUS,
        self::NEPTUNE,
        self::PLUTO,
    ];

    protected static $names = [
        self::SUN => 'Saule',
        self::MOON => 'Mēness',
        // ...
    ];

    protected static $swetest_codes = [
        self::SUN => '0',
        self::MOON => '1',
        self::MERCURY => '2',
        self::VENUS => '3',
        self::MARS => '4',
        self::JUPITER => '5',
        self::SATURN => '6',
        self::URANUS => '7',
        self::NEPTUNE => '8',
        self::PLUTO => '9',
        self::CHIRON => 'D',
        self::LILITH => 'A',
        self::TNODE => 't',
    ];
}
