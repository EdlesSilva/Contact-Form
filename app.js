let xhr = new XMLHttpRequest();

let formedles = document.querySelector('.formedles');

formedles.addEventListener('submit' , (event) => {
    let form =  new FormData(formedles);
    xhr.open('POST', 'enviar.php');//armazenar os dados do front-end

    xhr.onload = ()=>{ // cria a conexão com o nosso back end

        let texto = document.querySelector(".alert")
        texto.classList.remove("invisible")
        texto.textContent = xhr.responseText
        formedles.reset();



         if(xhr.status == 200){
             console.log(xhr.responseText)
         }else {
             console.log('Erro ao tentar conectar' + xhr.status)
         }
    }
    xhr.send(form); // Envia os dados do formulario para o nosso email

    console.log('funcionando')
event.preventDefault();
})