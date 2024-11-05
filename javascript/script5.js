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
const varioselementos = document.querySelectorAll("h3","a","hr");

console.log(subtitulo);
console.log(titulo);
console.log(varioselementos);
