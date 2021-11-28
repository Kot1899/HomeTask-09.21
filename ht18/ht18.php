<?php

abstract class Figure{

    protected $size;

    public abstract function getSquare();

    public function set_Size($v_size){
        $this->size=$v_size;
    }
}

class Rectangle extends Figure{
    public function getSquare(){
        $square_rec=0;
        $square_rec= $size*$size;
        return $this->$square_rec;

    }
}

$regular_rec= new Rectangle(10);
Echo $regular_rec->$square_rec;