<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redimensionador de imagens</title>        
    <link rel = "stylesheet" href = "estilo/index.css">       
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">        
</head>
<body>           
    
    <div class="content">       

    <div class="form">       

    <p class = "title"><b>Redimensionador de imagem - jpeg</b></p>

     <form id = "dados" enctype = "multipart/form-data" method = "POST">          
        
        <label  class = "upload" onchange = "preview()">Escolha uma imagem <i class="fa fa-file" style = "margin-left:5px;"></i>   

        <input type = "file" placeholder = "escolha uma foto" name = "arquivo" id = "arquivo"></label>              
        
        <input type = "text" placeholder = "Largura pretendida em px" name = "largura" id = "largura" onkeypress="return event.charCode >= 48 && event.charCode <= 57" maxlength = "4">       

        <input type = "text" placeholder = "Altura pretendida em px" name = "altura" id = "altura" onkeypress="return event.charCode >= 48 && event.charCode <= 57" maxlength = "4">         

        <button type = "submit">Redimensionar imagem <i class="fa fa-file-picture-o" style = "font-size:18px; margin-left:5px;"></i></button>      

     </form>         

     <img class = "img">         
     
     <div class="message">       

     </div>

<div class="download">
  
</div>         

      </div>      

</div>         

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>          

<script src = "js/preview.js"></script>          

<script src = "js/index.js"></script>       
 
</body>        
</html>