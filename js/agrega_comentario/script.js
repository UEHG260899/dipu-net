$(document).ready(function () {
    $("#btnComentario").click(function(){
        let comentario = $("#textComentario").val();
        if(comentario === ""){
            $("#modalErrores").modal("toggle");
        }else{
            $("#formComentario").submit();
        }
    });
});