<?php
class Rectangle extends Figure{

    public function getSquare(){
        $square_rec2= $this->size*$this->size2;
        return $square_rec2;
    }
    public function getPerimeter(){
        $perimeter_rec2= 2*($this->size+$this->size2);
        return $perimeter_rec2;
    }

}