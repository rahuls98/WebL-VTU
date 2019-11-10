var text = document.querySelector('h1');
var font = 5;
var flag = 0;

function inc(){
    font++;
    text.style.fontSize = font;
    text.style.color = "red";
    text.textContent = "TEXT-GROWING";
    if(font==50)
        flag = 1;
}

function dec(){
    font--;
    text.style.fontSize = font;
    text.style.color = "blue";
    text.textContent = "text-shrinking";
    if(font==5)
        flag = 0;
}

setInterval(()=>{
    if(flag==1){
        dec();
    }
    else{
        inc();
    }
}, 100);