
let cnt= document.getElementById('count');
/*
// let i=0;
*/
setInterval(function(){
// i++;
// cnt.innerText=i;
    cnt.innerText=new Date();
},1000)

/*
// cnt.innerText='poka';

// for (let i=0; i<10; i++){
//     cnt.innerText=i;
// }


    //через меджик метод, получаем то же самое
setInterval(function(){
let d= new Date();
    cnt.innerText=d.toString();
},1000)
*/

//движение картинки
// let les19 - autoload= document.getElementById('test_motion');
// let i=0;
// setInterval(function (){
//     les19 - autoload.style.left = (i++) + 'px';
// },100)


//функция SetTimeout через анонимную функцию
// setTimeout(function (){
//     let d= new Date();
//     cnt.innerText=d.toString();
// },3000)

//функция SetTimeout через именуемую функцию
// function showTime(){
//     let d= new Date();
//     cnt.innerText=d.toString();
// }
// setTimeout(showTime,5000)


// function moveObject(motion){
//     let les19 - autoload= document.getElementById('test_motion');
//
// }

document.getElementById('place').addEventListener('mousemove', function (e){
    // console.log(e);
    moveObj(e)
});

function moveObj(e){
    let test= document.getElementById('test_motion');
    test.style.top= (e.clientY)+'px';
    test.style.left= (e.clientX)+'px';
}






















// for (let i = 0; i < 200; i++){
//     les19 - autoload.style.left = i;
// }