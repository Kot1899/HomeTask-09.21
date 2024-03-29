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

$regular_rec= new quadrate();
$regular_rec->setSize(10);
Echo '-----regular rectangle-----' . "\n";
Echo 'perToSq = ' . $regular_rec->PerToSq(). "\n";
Echo 'square of regular rectangle :' . $regular_rec->getSquare(). "\n";
Echo 'perimeter of regular rectangle :' . $regular_rec->getPerimeter(). "\n". "\n";

$circle= new circle();
$circle->setSize(10);
Echo '-----circle-----' . "\n";
Echo 'perToSq = ' . $circle->PerToSq(). "\n";
Echo 'square of circle :' . $circle->getSquare(). "\n";
Echo 'perimeter of circle :' . $circle->getPerimeter(). "\n". "\n";

$rectangle= new rectangle();
$rectangle->setWidth(10);
$rectangle->setHeight(1);
Echo '-----rectangle-----' . "\n";
Echo 'perToSq = ' . $rectangle->PerToSq(). "\n";
Echo 'square of rectangle :' . $rectangle->getSquare(). "\n";
Echo 'perimeter of rectangle :' . $rectangle->getPerimeter(). "\n". "\n";