<?php
class circle extends figure{
    public function getSguare1()
    {
        $PI=3.14;
        $square=$this->size*$this->size*$PI;
        return $square;
    }
    public function getPerimetr1()
    {
        $PI=3.14;
        $perimetr=$this->size*2*$PI;
        return $perimetr;
    }
}