
// Modal que amplia imagem.
export const openImg = (listImg) =>{
    
    listImg.forEach(img =>{

        $(img).on( "click", function(e) {
            $('.modal').css('display', 'block');
            $('.img-modal').attr('src',  e.target.src);
        })
    })
}

// Fecha modal.
export const closeImg = () =>{

    $('.modal').on( "click", function(e) {
        $('.modal').css('display', 'none');
    })
}

