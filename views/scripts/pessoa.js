$( document ).ready(function() {
    $(".btnEditar").on("click", function(){
        var id = $(this).val();
        console.log("Ready! Ricardo id: " + id);
    });

    $(".btnExcluir").on("click", function(){
        var id = $(this).val();
        console.log("Ready! Excluir id: " + id);
    });
});