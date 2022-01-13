

// кнопка сброса ввода =РАБОТАЕТ
function clearbutton(){
    let inputElement=document.getElementById('input');
    inputElement.value=''; //присвоим значение что равно пустоте
}

var numberCal;
var symbolCal;
var inputValue;
var resultCal;



//LISTEN CLICK EVENT
var buttons=document.getElementById('btn');
buttons.addEventListener('click', function (e){
    alert("click me");
});

$('#btn').on('click',function (e) {
    alert('click with jquery')
});


//функция с аргументом (реализовал для кнопки 0-9)
function calculateNumber(el){

    // обнуляем сначала поле результата

    // let resultElement=document.getElementById('result');
    // document.getElementById('result').value='';
    // let inputElement=document.getElementById('input');
    // inputElement.value = inputElement.value+el.innerHTML;
    // numberCal = inputElement.value;  //переменная Б, просто числа

    $('#result').val('');
    $('#input').val('');

}

// метод для символов
function calculateSymbol(elem){

    inputValue=document.getElementById('input').value; //inputValue - это перменная А с числом которую запоминаем

    document.getElementById('input').value=''; //обнуляем поле сначала

    symbolCal= elem.innerHTML; // - это переменная ЗНАК МАТ-ОПЕРАЦИИ

    document.getElementById('input').value='';  //после выполнения расчета поле INPUT становится пустым

}


//метод для выполнения функции РАВНО
function equals(){

     let resultElement=document.getElementById('result');   // обратились к нопке РЕЗАЛТ

    switch (symbolCal){
        case '+':
            resultCal=parseInt(inputValue)+parseInt(numberCal);
            break;
        case '-':
            resultCal=parseInt(inputValue)-parseInt(numberCal);
            break
        case '*':
            resultCal=parseInt(inputValue)*parseInt(numberCal);
            break;
        case '/':
            resultCal=parseInt(inputValue)/parseInt(numberCal);
            break;
        default:
            resultCal='error';
    }
    resultElement.value= resultCal;  //  в поле РЕЗУЛЬТАТА калькулятора выведется значение итоговое
     document.getElementById('input').value='';  //после выполнения расчета поле INPUT становится пустым
}






https://github.com/Kot1899/HomeTask-09.21.git
    https://github.com/Kot1899/HomeTask-09.21.git
        4eG2cJ:zy32P(L