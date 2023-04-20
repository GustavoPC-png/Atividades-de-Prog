const textarea = document.getElementById('text');
var resultado = document.querySelector('#contador');

textarea.addEventListener('keyup', function(e){
     resultado.innerHTML = `Quantidades de letras: ${e.target.value}`; 
})