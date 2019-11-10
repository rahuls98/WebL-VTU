function handler(){
    var ip = document.getElementById('ip').value;
    
    var temp = parseInt(ip);
    if(temp){
        var rev = ip.split('').reverse().join('');
        document.querySelector('p').innerHTML = 'Number in reverse: '+rev;
    }
    else{
        chars = ip.split('');
        function findVowel(arr){
            for(var i=0; i<arr.length; i++){
                if('aeiou'.includes(arr[i]))
                    return(i+1);
            }
            return("No vowels");
        };

        var ind = findVowel(chars);
        document.querySelector('p').innerHTML = 'Position of left most vowel: '+ind;
    }
}