<?php
include "magic.php";
abstract class figure implements Magic {
    protected $size;
    protected $weight;
    protected $height;

    public abstract function getSguare1();
    public abstract function getPerimetr1();
    public function getPerimetrtoSquare(){
        $correlation = $this->getPerimetr1()/$this-> getSguare1();
        return  $correlation;
         }

    public function setSize($v_size){
        $this->size=$v_size;
    }

    public function setWeight($v_weight){
        $this->weight=$v_weight;
    }

    public function setHeight($v_height){
        $this->height=$v_height;
    }

    public function __toString(){
     $getSq= 'it square is ' . $this->getSguare1(). "\n";
     $getPer= 'it perimetr is ' . $this->getPerimetr1(). "\n";
     $getCorel= 'correlation perimetr to square is ' . $this->getPerimetrtoSquare(). "\n";
     $total_return='magic method show us: '."\n".'1.'. $getSq.'2.'.$getPer.'3.'.$getCorel."\n";
     return $total_return;
    }
}