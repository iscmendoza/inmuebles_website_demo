// JavaScript Document
var formdata = new FormData();
document.getElementById("imgs").addEventListener("change", function (evt) {
    $("#ajax").html("Subiendo");
    var i = 0, len = this.files.length, img, reader, file;
    for ( ; i < len; i++ ) {
        file = this.files[i];
        if (!!file.type.match(/image.*/)) {
            if ( window.FileReader ) {
                reader = new FileReader();
                reader.onloadend = function (e) {
                    $('#imagenes').append('<img src="' +e.target.result+ '" />');
                };
                reader.readAsDataURL(file);
            }
            formdata.append("imgs[]", file);
        }
    }
    $.ajax({
        url: "upload.php",
        type: "POST",
        data: formdata,
        processData: false,
        contentType: false,
        success: function (res) {
            $("#ajax").html(res);
        }
    });
}, false);