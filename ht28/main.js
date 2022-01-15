function get_ajax(page){
    // $('#container').html('call get_ajax');
    $.ajax({
        url:'http://localhost:8080/users.php?page='+page,
        success:function (data){
            // alert(data);
            $('#container').html(data);
        }
    });
}

function get_ajax_rand(){
    // $('#container').html('call get_ajax');
    $.ajax({
        url:'http://localhost:8080/test.php',
        success:function (data){
            // alert(data);
            $('#container').html(data);
        }
    });
}

function main_page(url1){
    location.href=url1;
}