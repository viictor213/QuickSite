       function PreviewImagePerfil() {
    var oFReader = new FileReader();
    oFReader.readAsDataURL(document.getElementById("profile").files[0]);

    oFReader.onload = function (oFREvent) {
        document.getElementById("imgPerfil").style.backgroundImage = "url("+oFREvent.target.result+")";
        document.getElementById("botonAceptar").style.display = "block";
        document.getElementById("botonCancelar").style.display = "block";

    };
};

function PreviewImageBanner() {
    var oFReader = new FileReader();
    oFReader.readAsDataURL(document.getElementById("banner").files[0]);

    oFReader.onload = function (oFREvent) {
        document.getElementById("imgBanner").style.backgroundImage = "url("+oFREvent.target.result+")";
        document.getElementById("botonAceptar").style.display = "block";
        document.getElementById("botonCancelar").style.display = "block";

    };
};