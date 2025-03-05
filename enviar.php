<?php     

require("class.php");    

header("Content-Type: application/json");              

if(isset($_POST["altura"]) && isset($_POST["largura"]) && isset($_FILES["arquivo"])){

$largura_nova = $_POST["largura"];     

$altura_nova = $_POST["altura"];      

$filename = $_FILES["arquivo"]["tmp_name"];             

$image = new Image();     

$response = $image->redimensionar($largura_nova,$altura_nova,$filename);             

echo json_encode($response);     

}

?>     