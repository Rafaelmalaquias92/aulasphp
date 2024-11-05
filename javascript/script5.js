/* Funções de seleção no DOM

-getElementById ('parâmetro')
Seleciona UM ELEMENTO através do ID.

-querySelector ('parâmetro')
Seleciona UM ELEMENTO através de um seletor.

-querySelectorAll ('parâmetro')
Seleciona VÁRIOS ELEMENTO através de seletores.

Exemplos: acessando/manipulando o DOM
*/


const subtitulo = document.getElementById("subtitulo-dom");
const titulo = document.querySelector("h1");
const varioselementos = document.querySelectorAll("h3,a,hr");
const descricaoDom = document.querySelector(".descricao-dom");

console.log(subtitulo);
console.log(titulo);
console.log(varioselementos);





// CSS inline (CSS in JS)
subtitulo.style.backgroundColor = "red";

// CSS atraves de classes via JS
descricaoDom.classList.add("destaque");

// Manipulação de Eventos

const pagina = document.querySelector("body");
const exemplo1 = document.querySelector("#exemplo1");
const mensagem  = document.querySelector("#mensagem");

// Ouvinte de Evento
exemplo1.addEventListener("click", function(){
   pagina.style.fontFamily = "Verdana";
   mensagem.innerHTML = "<i>Fonte alterada com Sucesso!</i>"
   titulo.setAttribute("hidden", true);
});

// Ouvinte de evento para teclado
document.addEventListener("keypress", function(){
    console.log("Se tira a mão de mim 🤬");
});

document.addEventListener("keypress", function(event){
    if(event.code === "KeyR"){
        pagina.style.fontFamily = "Times";
        mensagem.innerHTML = "";
        titulo.removeAttribute("hidden");
    }
});