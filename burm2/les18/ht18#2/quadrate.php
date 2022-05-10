<?php

class quadrate extends figure{
    public function getSguare1()
    {
        $square=$this->size*$this->size;
        return $square;
    }
    public function getPerimetr1()
    {
        $perimetr=$this->size*4;
        return $perimetr;
    }
}