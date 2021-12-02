<?php

class Circle extends Figure1{

    public function getSquare(){
        // size - это радиус круга
        $PI=3.14;
        $square_cir= $this->size*$this->size*$PI;
        return $square_cir;
    }
    public function getPerimeter(){
        $PI=3.14;
        $perimeter_cir= 4*$PI*$this->size;
        return $perimeter_cir;
    }
}