<?php

class ConMeo
{
    private $name;
    private $color;

    public function __construct()
    {
        echo "Hello world"."</br>";
    }

    public function getName()
    {
        return "Con meo A";
    }
    public function __destruct()
    {
        echo "Ket thuc";
    }
}

$a = new ConMeo();
echo $a->getName();
echo "Thuan Pham"."</br>";