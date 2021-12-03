<?php

include 'inter.php';
//interface Magic23{
//    public function __toString();
//}
abstract class Figure1 implements Magic23
{

    protected $size;
    protected $width;
    protected $height;

    public abstract function getSquare();

    public abstract function getPerimeter();

    public function PerToSq()
    {

        $q = $this->getPerimeter() / $this->getSquare();
        return $q;
    }

    public function setSize($v_size)
    {
        $this->size = $v_size;
    }

    function setWidth($v_size2)
    {
        $this->width = $v_size2;
    }

    function setHeight($v_size)
    {
        $this->height = $v_size;
    }

    public function __toString(){
        $z= 'this Square: ' . $this->getSquare()."\n";
        $x= 'this Perimeter: ' . $this->getPerimeter()."\n";
        $q= 'this Perimeter to square: ' . $this->PerToSq()."\n";
        $total1= 'magic method __toString show: ' ."\n". $z. $x.$q ;
        return $total1;
//        return 'this Square: ' . $this->getSquare();
        }
}

