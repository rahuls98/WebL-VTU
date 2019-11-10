var i;
var bod = document.querySelector('tbody');
for(i=0; i<=10;i++){
    bod.insertAdjacentHTML('beforeend','<tr><td>'+i+'</td><td>'+i*i+'</td><td>'+i*i*i+'</td></tr');
}