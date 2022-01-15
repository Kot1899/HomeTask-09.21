// кнопка сброса ввода =РАБОТАЕТ
function clearbutton(){
    $('#input').val('');
}

//создаем глобальные переменные
var numberCal;
var symbolCal;
var inputValue;
var resultCal;
var proc=100;

//функция с аргументом (реализовал для кнопки 0-9)
/*
function calculateNumber(el){//
   // обнуляем сначала поле результата
   let resultElement=document.getElementById('result');
   document.getElementById('result').value='';
   let inputElement=document.getElementById('input');
   inputElement.value = inputElement.value+el.innerHTML;
   numberCal = inputElement.value;  //переменная Б, просто числа
}*/
function calculateNumber(el) {
    $('#result').val('');    // обнуляем сначала поле результата
    $('#input').val($('#input').val() + $(el).html());
    numberCal = $('#input').val();  //переменная Б, просто числа
}

// метод для символов
      function calculateSymbol(elem) {
        inputValue = $('#input').val();   //inputValue - это перменная А с числом которую запоминаем
        $('#input').val('');             //обнуляем поле сначала
        symbolCal = $(elem).html();      // - это переменная ЗНАК МАТ-ОПЕРАЦИИ
        $('#input').val('');             //после выполнения расчета поле INPUT становится пустым
    }

// метод для M-
function calculateSymbolM(elem) {

    $('#input').val('');             //после выполнения расчета поле INPUT становится пустым
    $('#result').val('bonjour ma petite souris').css({
        fontSize: '18px',
        color:'blue'
    });
}

// метод для %
function calculateSymbolPer1(per) {
    inputValue = $('#input').val();   //inputValue - это перменная А с числом которую запоминаем
    $('#result').val(   $('#input').val() / parseInt(proc) );
    $('#input').val('');             //обнуляем поле сначала
}

//метод для выполнения функции РАВНО
    function equals() {
        if ($('#result').val() != null) {
            switch (symbolCal) {
                case '+':
                    resultCal = parseInt(inputValue) + parseInt(numberCal);
                    break;
                case '-':
                    resultCal = parseInt(inputValue) - parseInt(numberCal);
                    break
                case '*':
                    resultCal = parseInt(inputValue) * parseInt(numberCal);
                    break;
                case '/':
                    resultCal = parseInt(inputValue) / parseInt(numberCal);
                    break;
                default:
                    resultCal = 'error';
            }
            $('#result').val(resultCal);    //  в поле РЕЗУЛЬТАТА калькулятора выведется значение итоговое
            $('#input').val('');         //после выполнения расчета поле INPUT становится пустым

              }
    }

/*
4eG2cJ:zy32P(L

ssh burmme@demo.burm.me -p 24560
*/