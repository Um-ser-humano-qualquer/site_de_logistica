var menuItem = document.querySelectorAll('.item-menu')
        
function selectlink(){
    menuItem.forEach((item)=>
        item.classList.remove('ativo')
    )
    this.classList.add('ativo')
}

menuItem.forEach((item)=>
    item.addEventListener('click', selectlink)
)

var btnExp = document.querySelector('#btn-exp')
var menuSide = document.querySelector('.menu-lateral')

btnExp.addEventListener('click', function(){
menuSide.classList.toggle('expandir')})
    
var div = window.document.querySelector(".post");

div.addEventListener("mousehover", saiu);

function saiu() {

div.style.width = "100px";
}