<?php
class Rectangle extends Figure{

    public function getSquare(){
        $square_rec2= $this->height*$this->width;
        return $square_rec2;
    }
    public function getPerimeter(){
        $perimeter_rec2= 2*($this->height+$this->width);
        return $perimeter_rec2;
    }

}