function finder(text){
    $('#content').find('mark').each(function(){
        $(this).replaceWith($(this).text());
    });
    var textNodes = $('#content').find('td');
    textNodes.each(function(i){
            if($(this).text().match("("+text+")")){
                highliter($(this),text);
            }
    });
}

function highliter(element,substr){
    element.html(element.html().replace(substr,"<mark>$&</mark>"));
}

$(document).ready(
    function(){
//        finder('Непе');
        if(sessionStorage.getItem('editable')=='true'){
            $('.element').addClass('on').parent().css({'background-color':'#fff'});
        }
        function checkInputs(){
            var issues = 0;
            $('.add').find('input').each(
                function(index,item){
                    if(item.hasAttribute('required')){
                        if(!$(this).val()){
                            issues++;
                            $(this).attr('placeholder','Заполните обязательное поле').
                                    css({'border':'1px dashed red'});
                        }
                    }
                }
            );
            return (issues)?false:true;
        };

        $('#addBtn').bind('click',function(){
            if(checkInputs()){
                $.post('scripts/php/addPerson.php',{
                        'table':'personal',
                        'fname':$('[name=firstname]').val(),
                        'patro':$('[name=patronymic]').val(),
                        'lname':$('[name=lastname]').val(),
                        'email':$('[name=email]').val(),
                        'tel':$('[name=tel]').val(),
                        'city':$('[name=city]').val(),
                        'country':$('[name=country]').val()
                    },
                    function(){
                        alert('Добавлено!');
                        location='index.php';
                    });
            }
        });

        $('.element').bind('click',function(){
            if($(this).hasClass('on')){
                $(this).removeClass('on');
                $(this).addClass('offAnim').parent().css({'background-color':'#CAC8D2'});
                sessionStorage.setItem('editable','false');
            }else
            if($(this).hasClass('onAnim')){
                $(this).removeClass('onAnim');
                $(this).addClass('offAnim').parent().css({'background-color':'#CAC8D2'});
                sessionStorage.setItem('editable','false');
            }
            else{
                $(this).removeClass('offAnim');
                $(this).addClass('onAnim').parent().css({'background-color':'#fff'});
                sessionStorage.setItem('editable','true');
            }
        });

        $('#search').find('input').bind('keyup',function(e){
            console.log('add');
            finder($(this).val());
        });

        $('.delete').bind('click',createModal);
    }
);