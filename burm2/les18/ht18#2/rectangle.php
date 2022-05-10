<?php

class rectangle extends figure{
    public function getSguare1()
    {
        $square=$this->height*$this->weight;
        return $square;
    }
    public function getPerimetr1()
    {
        $perimetr=($this->weight+$this->height)*2;
        return $perimetr;
    }
}