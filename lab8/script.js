/**
 * Created by Petrosyan on 12.02.15.
 */

function chartDrawer(){
    var vaiting = document.createElement('div');
    vaiting.setAttribute('class','waitanim');
    document.getElementById('superForm').appendChild(vaiting);

    var canvas = document.getElementById('graph');
    var context = canvas.getContext('2d');
    var colors = ['#0aaadf','#8748aa','#010101','#fffb00','#ff2c2a'];
    var strtX = 5, strtY = 5, dy = 26;

    var xmlhttp;
    if (!xmlhttp && typeof XMLHttpRequest!='undefined') {
        xmlhttp = new XMLHttpRequest();
    }
    xmlhttp.onreadystatechange = function(){
        if(xmlhttp.readyState == 4){
            if(xmlhttp.status == 200){
                var res = JSON.parse(xmlhttp.response);
                for(var i=0;i<res.length;i++){
                    vaiting.remove();
                    context.fillStyle = colors[i];
                    context.fillRect(strtX,strtY,res[i]*10,16);
                    context.fillText(res[i],res[i]*10+10,strtY+12);
                    strtY+=dy;
                }
            }
        }
    }
    xmlhttp.open('GET','request.php',true);
    xmlhttp.send(null);
}

function removeFile(){
    var xmlhttp;
    if (!xmlhttp && typeof XMLHttpRequest!='undefined') {
        xmlhttp = new XMLHttpRequest();
    }
    xmlhttp.onreadystatechange = function(){
        if(xmlhttp.readyState == 4){
            if(xmlhttp.status == 200){
                closeModal();
                location = 'lab8.php';
            }
        }
    }

    xmlhttp.open('GET','request.php?rm=true',true);
    xmlhttp.send(null);
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
    modal.innerHTML = "<h2>Вы уверены что хотите удалить файл?</h2><p>Данные будут потеряны навсегда</p>" +
        "<div id='btnWrap'><button id='y'>Да</button><button id='n'>Нет</button></div>";
    document.body.appendChild(modal);

    document.getElementById('y').addEventListener('click',removeFile);
    document.getElementById('n').addEventListener('click',closeModal);
    return modal;
}

function closeModal() {
    console.log('sdsds');
        var modal = document.getElementById('modal');
        var sub = document.getElementById('sub');
        modal.parentNode.removeChild(sub);
        modal.parentNode.removeChild(modal);
}
document.getElementById('lil').addEventListener('click',createModal);
chartDrawer();

