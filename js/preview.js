function preview() {      

    let frame = document.querySelector(".img");   

    frame.src = URL.createObjectURL(event.target.files[0]);      
    
}          