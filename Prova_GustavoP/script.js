document.getElementById('bttn').addEventListener('click', (e) =>{
    e.preventDefault();
    var preco = 0;
    var num = 0;
    var sllc = document.getElementById('sl').value
    var qn = parseFloat(document.getElementById('num').value)

    if(document.getElementById('p').checked){
        preco = num + 10;
        if(document.getElementById('q').checked){
            preco = 10 + 4;
            console.log(preco);
            if(document.getElementById('c').checked){
                preco = 17.50;
                if(document.getElementById('ms').checked){
                    preco = 25.50;
            }
        }

    }
        else if(document.getElementById('ms').checked){
            preco = 18;
            if(document.getElementById('c').checked)
            preco = 21.5
    }
        else if(document.getElementById('c').checked){
        preco = 13.50
    }
}


    if(document.getElementById('m').checked){
        preco = 15;
        if(document.getElementById('q').checked){
            preco = 15 + 4;
            console.log(preco);
            if(document.getElementById('c').checked){
                preco = 19 + 3.50;
                if(document.getElementById('ms').checked){
                    preco = 22.50 + 8;
            }
        }

    }
        else if(document.getElementById('ms').checked){
            preco = 15 + 8;
            if(document.getElementById('c').checked)
            preco = 23 + 3.5;
    }
        else if(document.getElementById('c').checked){
        preco = 15 + 3.50
    }
}

    if(document.getElementById('g').checked){
        preco = 20;
        if(document.getElementById('q').checked){
            preco = 20 + 4;
            console.log(preco);
            if(document.getElementById('c').checked){
                preco = 24 + 3.50;
                if(document.getElementById('ms').checked){
                    preco = 27.50 + 8;
            }
        }

    }
        else if(document.getElementById('ms').checked){
            preco = 20 + 8;
            if(document.getElementById('c').checked)
            preco = 28 + 3.5;
    }
        else if(document.getElementById('c').checked){
        preco = 20 + 3.5;
    }
}
    if(sllc===""){
        alert("Porfavor selecione o jeito da entrega!")
    }
    else if(sllc==="e"){
        num = preco + 5;
        document.getElementById('valor').innerHTML = `R$ ${num*qn} valor total` 

    }

    else{
        document.getElementById('valor').innerHTML = `R$ ${preco*qn} valor total` 
    }
})