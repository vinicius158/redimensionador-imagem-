<?php   

class Image{

public function redimensionar($largura_nova,$altura_nova,$filename){

$novo_caminho = "imagens/".md5(time()).".jpeg";            

if(move_uploaded_file($filename,$novo_caminho)){

if(list($largura_atual,$altura_atual) = getimagesize($novo_caminho)){

    if($img = imagecreatetruecolor($largura_nova,$altura_nova)){

        if($original = imagecreatefromjpeg($novo_caminho)){

            if(imagecopyresampled($img,$original,0,0,0,0,$largura_nova,$altura_nova,$largura_atual,$altura_atual)){

                if(imagejpeg($img,$novo_caminho,100)){

                  $response["message"] = "<p class = 'aviso'> Imagem redimensionada !!!!</p>";     

                  $response["button"] = "<a href = '$novo_caminho' download = '$novo_caminho'><button class = 'baixar'>Baixar imagem <i class='fa fa-cloud-download' style = 'font-size:18px; margin-left:5px;'></i></button></a>";      
                  
                  return $response;    

                }else{

                  return "erro";    

                }

            }else{

              return "erro";   

            }   
        

        }else{

         return "erro";   

        }   

    }else{

      return "erro";   

    }

}else{

    return "erro";   

}              

}else{

return "erro";   

}

}

}    

?>      