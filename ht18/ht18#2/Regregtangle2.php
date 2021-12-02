<?php
class RegRectangle extends Figure1{


    public function getSquare(){
        $square_rec= $this->size*$this->size;
        return $square_rec;
    }
    public function getPerimeter(){
        $perimeter_rec= 4*$this->size;
        return $perimeter_rec;
    }
}
