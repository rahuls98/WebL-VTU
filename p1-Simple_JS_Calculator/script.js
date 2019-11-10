function display(){
    var content = document.getElementById('display').innerHTML + this.innerHTML;
    document.getElementById('display').innerHTML = content; 
};

function clearFunc(){
    document.getElementById('display').innerHTML = '> ';
}

function calculate(){
    var content = document.getElementById('display').innerHTML.slice(5);
    var res = eval(content);
    document.getElementById('display').innerHTML = '> '+res;
}