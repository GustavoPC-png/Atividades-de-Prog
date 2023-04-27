document.getElementById("bttn").addEventListener('click', (e) => {
    e.preventDefault();
    var item = document.querySelector('#texto').value;
    var lista = document.querySelector('#output');
    var novoitem = document.createElement("li");
    novoitem.appendChild(document.createTextNode(item));
    
    var removerItem = document.createElement("Button");
    removerItem.innerHTML = "Excluir"
    removerItem.onclick = function(){
        lista.removeChild(novoitem);
    };
    novoitem.appendChild(removerItem);

    lista.appendChild(novoitem);
    document.getElementById("item").value = "";
});