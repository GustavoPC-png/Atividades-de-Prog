var y = 0;
var counter = document.getElementById("x");
var adicao = document.getElementById("bttn1");
var reset = document.getElementById("bttn2");
var subtracao = document.getElementById("bttn3");

adicao.addEventListener("click", function(){
    y++;
    counter.innerHTML = y;
});
reset.addEventListener("click", function(){
    y = 0;
    counter.innerHTML = y;
});
subtracao.addEventListener("click", function(){
    y--;
    counter.innerHTML = y;
});