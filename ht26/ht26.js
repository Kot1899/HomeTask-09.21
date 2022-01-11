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
    // console.log(e);
    moveObj(e)
});

var Y_axis;
var X_axis;

function moveObj(e){
    let test= document.getElementById('square');
    Y_axis = test.style.top= (e.clientY)+'px';
    X_axis =test.style.left= (e.clientX)+'px';

    // попробуем просто вывести перменные с осями в консоль
    console.log(Y_axis);
    console.log(X_axis);

    // 1/4 четверть
    re1_y=400+'px';
    re1_x=720+'px';
    let re1=document.getElementById('rectangle1');
    if ((Y_axis<re1_y) && (X_axis<re1_x)){
        re1.style.backgroundColor = 'blue';
    }else{
        re1.style.backgroundColor = 'black';
    }

// 2/4 четверть
    let re2=document.getElementById('rectangle2');
    if ((Y_axis<re1_y) &&  (X_axis>re1_x)){
        re2.style.backgroundColor = '#F07C5B';
    }else{
        re2.style.backgroundColor = 'black';
    }

// 3/4 четверть
    let re3=document.getElementById('rectangle3');
    if ((Y_axis>re1_y) &&  (X_axis<re1_x)){
        re3.style.backgroundColor = '#4FF88F';
    }else{
        re3.style.backgroundColor = 'black';
    }

// 4/4 четверть
    let re4=document.getElementById('rectangle4');
    if ((Y_axis>re1_y) &&  (X_axis>re1_x)){
        re4.style.backgroundColor = '#FAE71D';
    }else{
        re4.style.backgroundColor = 'black';
    }
}


/*
// 1/4 четверть
re1_y=400+'px';
re1_x=720+'px';
let re1=document.getElementById('rectangle1');
if ((Y_axis<re1_y) && (X_axis<re1_x)){
    re1.style.backgroundColor = 'blue';
}else{
    re1.style.backgroundColor = 'black';
}

// 2/4 четверть
let re2=document.getElementById('rectangle2');
if ((Y_axis<re1_y) &&  (X_axis>re1_x)){
    re2.style.backgroundColor = '#F07C5B';
}else{
    re2.style.backgroundColor = 'black';
}

// 3/4 четверть
let re3=document.getElementById('rectangle3');
if ((Y_axis>re1_y) &&  (X_axis<re1_x)){
    re3.style.backgroundColor = '#4FF88F';
}else{
    re3.style.backgroundColor = 'black';
}

// 4/4 четверть
let re4=document.getElementById('rectangle4');
if ((Y_axis>re1_y) &&  (X_axis>re1_x)){
    re4.style.backgroundColor = '#FAE71D';
}else{
    re4.style.backgroundColor = 'black';
}
*/

/*
// let a=1;
// 1/4 четверть
// let re1=document.getElementById('rectangle1');
// if (a>4){
//     re1.style.backgroundColor = 'blue';
//     // re1.innerHTML='<style>#rectangle1 { background-color:#F07C5B;} </style>';  все равно не сработал
// }

// 2/4 четверть
// let re2=document.getElementById('rectangle2');
// if (a>4){
//     re2.style.backgroundColor = '#F07C5B';
// }

// 3/4 четверть
// let re3=document.getElementById('rectangle3');
// if (a>4){
//     re3.style.backgroundColor = '#4FF88F';
// }

// 4/4 четверть
// let re4=document.getElementById('rectangle4');
// if (a>4){
//     re4.style.backgroundColor = '#FAE71D';
// }

 */