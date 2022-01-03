

    // через функцию задать событие
//     function change_button(){
//     let butt= document.getElementById('btn'); // это мы обратиись только
//     butt.innerText='NEW name of button';  //  это innerText позволяет менять текст
//     butt.style.border='1px solid red'; //это мы задали стиль границ кнопки
// }

//  выведем в кнопку значение то что ввели в калькулятор
    function calculator(){
    let enterElement=document.getElementById('enter'); // переменная для поля ввода
    let butt= document.getElementById('btn'); // переменная для поля кнопки
    let enterVal= enterElement.value;   // присвоили в переменную значение что будем вводить
        butt.innerText=enterVal;   // в кнопку переименовуем на значения из инпута
    }

    function clearbutton(){
        let enterElement=document.getElementById('enter');
        enterElement.value=''; //присвоим значение что равно пустоте
    }