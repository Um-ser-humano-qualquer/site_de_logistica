/*const qnt = document.querySelector("qnt")

const dados_produto = async() =>{
    const dados = await fetch("../php/Alunopg6.php");
    const resposta = await dados.text();
       qnt.innerHTML= resposta;
};
dados_produto();*/
const form = document.getElementById("form_mov");

form.addEventListener('submit', async(e)=>{
    e.preventDefault();
    
    const dadosForm = new FormData(form);
})