const textarea = document.getElementById('text');
var resultado = document.querySelector('#contador');

textarea.addEventListener('keyup', function(e){
     conteudo = e.target.value;
     resultado.innerHTML = `Quantidades de letras: ${conteudo.length}`; 
})