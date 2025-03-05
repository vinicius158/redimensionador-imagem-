$("#dados").submit(function(e){      

e.preventDefault();  

let largura = $("#largura").val();    

let altura = $("#altura").val();       

let imagem = document.querySelector("#arquivo");        

if(largura.length === 0 || altura.length === 0 || imagem.files.length === 0){  

$(".message").html(" <p class = 'aviso'>Preencha todos os campos !!!!</p>");        

}else{    

    if(imagem.files[0].type != "image/jpeg"){

        $(".message").html(" <p class = 'aviso'>Formato inválido !!!! </p>");   

    }else{      

        let dados = document.querySelector("#dados");          

        let form = new FormData(dados); 

        $.ajax({
          
        url:"enviar.php",     
        type:"POST",   
        processData:false,   
        contentType:false,
        data:form,
        success:function(response){           
            
            if(response == "erro"){

                $(".message").html("<p class = 'aviso'> Erro !!!!</p>");        

            }else{    

                console.log(response);   
 
                $(".message").html(response["message"]);         

                $(".download").html(response["button"]);         

            }  

        }

        });            

    }


}


})