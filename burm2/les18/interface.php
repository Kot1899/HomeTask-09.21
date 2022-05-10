<?php

interface figure{
    public function setSize($v);
    }

interface figureSecond{
    public function getSize();
}

class rect implements figure, figureSecond {
    public $size;
    public function setSize($v){
        $this->size=$v;
    }
    public function getSize(){
        return $this->size;
    }
}

class cicle implements figure {
    public $size;
    public function setSize($v){
        $this->size=$v;
    }
}
