<?php
/*
 Тебе необходимо работать с геометрическими фигурами, например, с квадратами,
 прямоугольниками, треугольниками и так далее.

Пусть каждая фигура будет описываться своим классом, при этом ты хочешь сделать так, чтобы
каждый класс имел метод для вычисления площади и метод для вычисления периметра фигуры.

Сделаем для этого абстрактный класс Figure с двумя абстрактными методами getSquare и
getPerimeter.

Также реализуй такие классы как Rectangle (прямоугольник), Quadrate (квадрат), и любой
другой на свое усмотрение.

В абстрактном классе Figure, реализуй общий метод для вычисления отношения площади к периметру.
 */
abstract class Figure{

    protected $size;
    protected $size2;

    public function __construct($v, $v2)
    {
        $this->setSize($v);
        $this->setSize2($v2);
    }

    public abstract function getSquare();

    public abstract function getPerimeter();

    public function setSize($v_size){
        $this->size=$v_size;
    }
    public function setSize2($v_size){
        $this->size2=$v_size;
    }
}

class RegRectangle extends Figure{
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

class Circle extends Figure{

    public function getSquare(){
        // size - это радиус круга
        $PI=3.14;
        $square_cir= $this->size*$this->size*$PI;
        return $square_cir;
    }
    public function getPerimeter(){
        $PI=3.14;
        $perimeter_cir= 4*$PI*$this->size;
        return $perimeter_cir;
    }
}

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

$regular_rec= new RegRectangle(10, 1);
Echo '-----regular rectangle-----' . "\n";
Echo 'square of regular rectangle :' . $regular_rec->getSquare(). "\n";
Echo 'perimeter of regular rectangle :' . $regular_rec->getPerimeter(). "\n". "\n";

$circle= new Circle(10, 1);
Echo '-----circle-----' . "\n";
Echo 'square of circle :' . $circle->getSquare(). "\n";
Echo 'perimeter of circle :' . $circle->getPerimeter(). "\n". "\n";

$rectangle= new Rectangle(10, 1);
Echo '-----rectangle-----' . "\n";
Echo 'square of rectangle :' . $rectangle->getSquare(). "\n";
Echo 'perimeter of rectangle :' . $rectangle->getPerimeter(). "\n". "\n";