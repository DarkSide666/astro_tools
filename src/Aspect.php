<?php
namespace DarkSide666\AstroTools;

class Aspect extends AbstractObject
{
    const A1 = 'Conjunction';   // 1
    const A2 = 'Opposition';    // 2
    const A3 = 'Trine';         // 3
    const A4 = 'Square';        // 4
    const A5 = 'Quincunx';      // 5
    const A6 = 'Sextile';       // 6

    // all
    protected static $all = [
        self::A1,
        self::A2,
        self::A3,
        self::A4,
        self::A5,
        self::A6,
    ];

    protected static $names = [
        self::A1 => 'Conjunction',
        self::A2 => 'Opposition',
        self::A3 => 'Trine',
        self::A4 => 'Square',
        self::A5 => 'Quincunx',
        self::A6 => 'Sextile',
    ];
}
