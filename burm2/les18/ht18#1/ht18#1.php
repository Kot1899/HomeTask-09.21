<?php
/*
 Тебе необходимо работать с геометрическими фигурами, например, с квадратами,
 прямоугольниками, треугольниками и так далее.

Пусть каждая фигура будет описываться своим классом, при этом ты хочешь сделать так, чтобы
каждый класс имел метод для вычисления площади и метод для вычисления периметра фигуры.

Сделаем для этого абстрактный класс Figure с двумя абстрактными методами getSquare и
getPerimeter.

Также реализуй такие классы как Rectangle (прямоугольник), quadrate (квадрат), и любой
другой на свое усмотрение.

В абстрактном классе Figure, реализуй общий метод для вычисления отношения площади к периметру.
 */
include 'figure.php';
include 'circle.php';
include 'rectangle.php';
include 'quadrate.php';

echo 'hello Kot'. "\n";

$circle= new circle();
$circle->setSize(10);
echo '-----circle-----'."\n";
echo 'square='.$circle->getSguare1()."\n";
echo 'perimetr='.$circle->getPerimetr1()."\n";
echo 'perimetr to square='.$circle->getPerimetrtoSquare()."\n";

$rectangle= new rectangle();
$rectangle->setWeight(10);
$rectangle->setHeight(20);
echo '-----rectangle-----'."\n";
echo 'square='.$rectangle->getSguare1()."\n";
echo 'perimetr='.$rectangle->getPerimetr1()."\n";
echo 'perimetr to square='.$rectangle->getPerimetrtoSquare()."\n";

$quadrate= new quadrate();
$quadrate->setSize(10);
echo '-----quadrate-----'."\n";
echo 'square='.$quadrate->getSguare1()."\n";
echo 'perimetr='.$quadrate->getPerimetr1()."\n";
echo 'perimetr to square='.$quadrate->getPerimetrtoSquare()."\n";