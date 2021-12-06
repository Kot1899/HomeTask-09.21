<?php
class quadrate extends Figure1{


    public function getSquare(){
        $square_Qua= $this->size*$this->size;
        return $square_Qua;
    }
    public function getPerimeter(){
        $perimeter_Qua= 4*$this->size;
        return $perimeter_Qua;
    }
}
