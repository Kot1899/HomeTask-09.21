$("#send_mail").on("click", function () {
    var email = $('#email').val().trim();
    var name = $('#name').val().trim();
    var phone = $('#phone').val().trim();
    var message = $('#message').val().trim();

    // функция трим удаляет все лишние пробелы
    if (email == "") {
        $('#error_mess').text('Enter email');
        return false;
    } else if (name == "") {
        $('#error_mess').text('Enter name');
        return false;
    } else if (phone == "") {
        $('#error_mess').text('Enter phone');
        return false;
    } else if (message.length < 5) {
        $('#error_mess').text('Enter message');
        return false;
    }
    $('#error_mess').text('');


    $.ajax({
        url: 'ajax/mail.php',
        type: 'POST',
        cache: false, //кеширование
        data: { 'name': name, 'email': email, 'phone': phone, 'message': message},
        dataType: 'html',
        beforeSend: function(){
            $("#send_mail").prop('disabled', true);   //заблокировать кнопку чтобы ее не можно было нажать много раз
        },
        success: function (data) {
            if(!data)   //означает если data= false
                alert('was some errors');
            else
                $('#mail_form').trigger('reset');//эта конструкция очистит форму от всех

            $("#send_mail").prop('disabled', false);
        }
        });




});