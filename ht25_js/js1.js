//  первая кнопка для примера с числом

function calculator(){
    let inputElement=document.getElementById('input');// переменная для поля ввода
    let sevenElement=document.getElementById('7'); // переменная для button 7
    let sevenVal= '7';   // присвоили в переменную значение что будем вводить
    // let eightVal= '8';
    // let nineVal= '9';
    // let fourVal= '4';
    // let fiveVal= '5';
    // let sixVal= '6';
    // let oneVal= '1';
    // let twoVal= '2';
    // let threeVal= '3';
    inputElement.value = inputElement.value+sevenVal;
        // +eightVal+nineVal+fourVal+fiveVal+sixVal+oneVal+twoVal+threeVal;
}

// кнопка сброса ввода =РАБОТАЕТ
function clearbutton(){
    let inputElement=document.getElementById('input');
    inputElement.value=''; //присвоим значение что равно пустоте
}



