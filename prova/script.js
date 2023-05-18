document.getElementById("enviar").addEventListener('click', (e) =>{
    e.preventDefault();
    var usuario = document.getElementById("peso").value
    var final = document.getElementById("convertido")
    var num;
    var slc = document.getElementById("quantidades").value;
    var con = document.getElementById("converter").value;

    if(quantidades.value === "g1"){
        if(converter.value === "g2"){
            num = usuario;
        }
        else if(converter.value === "k2"){
            num = usuario/1000;
        }
        else{
            num = usuario/1000000;
        }
    }

    if(quantidades.value === "k1"){
        if(converter.value === "g2"){
            num = usuario*1000;
        }
        else if(converter.value === "k2"){
            num = usuario;
        }
        else{
            num = usuario/1000;
        }
    }
    if(quantidades.value === "t1"){
        if(converter.value === "g2"){
            num = usuario*1000000;
        }
        else if(converter.value === "k2"){
            num = usuario * 1000;
    }
    else{
        num = usuario;
    }
}
    final.value = num;

})