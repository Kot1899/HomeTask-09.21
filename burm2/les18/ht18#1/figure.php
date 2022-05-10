<?php

abstract class figure{
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

}