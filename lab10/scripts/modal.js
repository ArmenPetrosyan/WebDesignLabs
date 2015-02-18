/**
 * Created by Petrosyan on 16.02.15.
 */

function closeModal() {
    var modal = document.getElementById('modal');
    var sub = document.getElementById('sub');
    modal.parentNode.removeChild(sub);
    modal.parentNode.removeChild(modal);
}

function createModal(){
    var substrate = document.createElement('div');
    substrate.setAttribute('id','sub');
    substrate.style.width = window.innerWidth+'px';
    substrate.style.height = window.innerHeight+'px';
    substrate.style.position = 'absolute';
    substrate.style.top = 0;
    substrate.style.zIndex = '1';
    substrate.style.backgroundColor = 'rgba(0,0,0,.75)';
    document.body.appendChild(substrate);


    var modal = document.createElement('div');
    modal.setAttribute('id','modal');
    modal.style.padding = '20px';
    modal.style.background = 'white';
    modal.style.borderRadius = '10px';
    modal.style.boxShadow = '1px 1px 5px gray';
    modal.style.left = '30%';
    modal.style.top = '50px';
    modal.style.position = 'absolute';
    modal.style.zIndex = '100';
    modal.innerHTML = "<h2>Вы уверены что хотите удалить пользователя?</h2><p>Данные будут потеряны навсегда</p>" +
        "<div id='btnWrap'><button id='y'>Да</button><button id='n'>Нет</button></div>";
    document.body.appendChild(modal);

//    document.getElementById('y').addEventListener('click',removeFile);
    document.getElementById('n').addEventListener('click',closeModal);
    return modal;
}