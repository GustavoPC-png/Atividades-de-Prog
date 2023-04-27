function adicionarItem() {
    var item = document.getElementById("item").value;
    var lista = document.getElementById("lista");
    var novoItem = document.createElement("li");
    novoItem.appendChild(document.createTextNode(item));
    
    // Criar botão de excluir para o novo item
    var botaoExcluir = document.createElement("button");
    botaoExcluir.innerHTML = "Excluir";
    botaoExcluir.onclick = function() {
      lista.removeChild(novoItem);
    };
    novoItem.appendChild(botaoExcluir);
    
    lista.appendChild(novoItem);
    document.getElementById("item").value = "";
  }