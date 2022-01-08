/*
В этом задании ты будешь двигать квадрат (или любой другой объект на усмотрение) по экрану браузера.
Твой квадрат (к примеру его размеры 200х200 пикселей), по умолчанию имеет фон черного цвета.

При перемещении квадрата по экрану, его цвет фона должен изменяться. Подели экран мысленно на 4е секции
(правый верхний и нижний угол, левый верхний и нижний угол). При попадании в разные части экрана, цвет квадрата должен изменится.

Для определения размера области экрана, используй document.documentElement.clientHeight и
document.documentElement.clientWidth

Перемещение можно осуществлять мышкой и\или клавиатурой — выбирай любой вариант.

Усложнение — обрати внимание, что периметр квадрата не должен выходить за границы экрана при его достижении.

экран 1440*900

 */

document.getElementById('body').addEventListener('mousemove',
    function (e){
    console.log(e);
    moveObj(e)
});

function moveObj(e){
    let test= document.getElementById('square');
    test.style.top= (e.clientY)+'px';
    test.style.left= (e.clientX)+'px';
}
