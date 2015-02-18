/**
 * Created by Petrosyan on 21.01.15.
 */

function showData(data){
    $('#res1').html('').hide();
    for (var key in data){
        var res = key +' : '+data[key];
        var li = $('<li>'+res+'</li>');
        $('#res1').append(li);
    }
    $('#res1').slideDown(700);
}

function submitHandler(){
    $.ajax({
        url:'../lab6/support.php',
        type:'POST',
        data:{
            'fio':$('#pib').val(),
            'addr':$('#addr').val(),
            'email':$('#mail').val(),
            'passw':$('#passw').val()
        },
        success: function (data,code,x){
            if(code=='success'){
                var data1 = $.parseJSON(data);
                showData(data1);
            }else{
                alert(code);
            }
        }
    });
}

function checkPWHandler(){
    $.ajax({
        url:'../lab6/support.php',
        type:'POST',
        data:{
            'password':$('#password').val()
        },
        success: function (data,code,x){
            $('#res2').hide();
            if(code=='success'){
               if(data == 'true'){
                   $('#res2').css('color','green').text('Пароль верный!').fadeIn();
               }else{
                   $('#res2').css('color','red').text('Пароль не верный!').fadeIn();
               }
            }else{
                alert(code);
            }
        }
    });
}

$('#submit1').on('click',submitHandler);
$('#submit2').on('click',checkPWHandler);
