<?php

class ConNguoi
{
    private static $name;
    const A ='thuan';

    public static function setName()
    {
        $name = self::A;
        return self::$name = $name;
    }

    // public static function getName()
    // {
    //     return self::$name;
    // }
}

echo ConNguoi::setName();
//echo ConNguoi::getName();