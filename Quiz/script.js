let frutas = document.getElementsByName('fruta');

document.getElementById("enviar").addEventListener("click", (e) => {
  e.preventDefault();
  let frutaChecked = 0;
  for(let i = 0; i  < frutas.length; i++){
    if(frutas[i].checked){
      frutaChecked=frutas[i];
      break;
    }
  }

  if(!frutaChecked) {
    alert("Selecione um item");
  } else {
    window.location.href="/pergunta_2.html";
  }
})

