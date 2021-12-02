<?php
abstract class Figure{

    protected $size;
    protected $width;
    protected $height;

//    public function __construct($v, $v2)
//    {
//        $this->setSize($v);
//        $this->setSize2($v2);
//    }

    public abstract function getSquare();

    public abstract function getPerimeter();

    public function PerToSq (){

        $q=$this->getPerimeter()/$this->getSquare();
        return $q;
    }

    public function setSize($v_size){
        $this->size=$v_size;
    }

function setWidth($v_size2){
    $this->width=$v_size2;
}

function setHeight($v_size){
    $this->height=$v_size;
}
}
