let pizza = document.querySelector('#pizzaN');

let p = document.querySelector('#t-small');
let m = document.querySelector('#t-med');
let g = document.querySelect('#t-big');

let pedido = document.querySelector('.pedido');

pizza.addEventListener('keyup', function(){
    pedido.innerHTML = `${e.target.value}`
});