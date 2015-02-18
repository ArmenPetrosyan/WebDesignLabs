/**
 * Created by Petrosyan on 22.01.15.
 */

        $('#person').hide();
        $('#article').hide();

        $('h2').on('click',function(e){
           if(this.textContent == 'Article'){
               $('#article').show().addClass('lightSpeedIn');
           }else
           if(this.textContent == 'Person'){
               $('#person').slideToggle();
           }
        });
