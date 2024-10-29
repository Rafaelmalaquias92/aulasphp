//alert('teste')

/*var nome = 'Ronaldo ⚽';
var local = ' Rua Augusta 🏳‍🌈';
var separador = '<hr>';
var imagem = 

for(let i = 1; i <= 10; i++){

    document.write(nome);
    document.write(local+'<br>');
    document.write(separador+'<br>');

}*/

/*var valor = Number(prompt('Digite o Valor::'));

let i = 1;

while (i <= 10) {
    document.write(valor * i + '<br>');
    i++;
}*/

/*var produto = 'Ganja🚬🍁🔥';
var valor = 10;

document.write(produto+'<br>');

for(let i = 1; i <= 12; i++){
  
    valor = valor*2;
    document.write(produto+'<br>');
}*/

const botao = document.querySelector('#botao');
botao.style.fontSize = '20px';

const body = document.querySelector('body');

botao.addEventListener('click',()=> body.style.backgroundColor = 'black');

