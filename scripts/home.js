function PreviewImage() {
    var oFReader = new FileReader();
    oFReader.readAsDataURL(document.getElementById("file").files[0]);

    oFReader.onload = function (oFREvent) {
        document.getElementById("imgPost").src = oFREvent.target.result;

    };
};