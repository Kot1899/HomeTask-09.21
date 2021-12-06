<?php
class quadrate extends figure{
//    public $square_rec;

    public function getSquare(){
        $square_rec= $this->size*$this->size;
        return $square_rec;
    }
    public function getPerimeter(){
        $perimeter_rec= 4*$this->size;
        return $perimeter_rec;
    }
}
