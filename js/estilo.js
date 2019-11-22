function hover(x, op, tp) {
    //recebe 3 parametros, o x = o elemento, op é a opção
    //do mouse entrando ou saindo
    if (tp === "MV") {
        //define o tipo como mouse move, mouse em cima
        switch (op) {
            //seleciona a opção de efeito
            case 1:
                //opção 1 é para o sombreamento das opções do menu
                {
                    x.style = "color: gray;";
                    break;
                }
            case 2:
                //opção dois é para o efeito dod links no rodapé
                {
                    x.style = "color: #222222;";
                    break;
                }
            case 3:
                //opção três é para o efeito do logo do facebook
                {
                    x.style = "background-color: #4a69a8; border-radius:10px;";
                    document.getElementById("linkFaceCic").style = "color: #ffffff;";
                    document.getElementById("logoFace").src = "img/fbwhite.png";
                    break;
                }
        }
    } else if (tp === "OT") {
        //define o tipo com OUT ou seja mouse fora
        switch (op) {
            //seleciona a opção de efeito
            case 1:
                //opção 1 é para o sombreamento das opções do menu
                {
                    x.style = "color: whitesmoke;";
                    break;
                }
            case 2:
                //opção dois é para o efeito dod links no rodapé
                {
                    x.style = "color: #777777;";
                    break;
                }
            case 3:
                //opção três é para o efeito do logo do facebook
                {
                    var logoFB = document.getElementById("logoFace")
                    logoFB.src = "img/fb.png";
                    logoFB.style = "border-radius: 50px";
                    document.getElementById("linkFaceCic").style = "#333333";
                    x.style = "color: #777777;";
                    x.src = "img/fb.png";
                    break;
                }
        }
    }
}

function overButton(bt, op) {
    if (op === 'in') {
        bt.style = "background-color: #FF9708;";
    } else if (op === 'out') {
        bt.style = "background-color: rgba(255, 165, 56, 1);";
    }
}

function expand(sentido, e, div, img, bt) {
    if (sentido === 'ex') {
        div.style.margin = "-2px;"
        div.style.borderRadius = "20px";
        /*div.style.backgroundColor = "rgba(250, 250, 250, 0.7)";*/
        document.getElementById(bt).style.display = "block";
        document.getElementById(img).style.filter = "brightness(250%)";
        document.getElementById(img).style.filter = "invert(25%)";
        document.getElementById(e).style.height = "150px";
    } else if (sentido === 're') {
        div.style.margin = "-2px;"
        div.style.borderRadius = "20px";
        /*div.style.backgroundColor = "rgba(250, 250, 250, 0.0)";*/
        document.getElementById(bt).style.display = "none";
        document.getElementById(img).style.filter = "brightness(100%)";
        document.getElementById(img).style.filter = "invert(0%)";
        document.getElementById(e).style.height = "0px";
    }
}