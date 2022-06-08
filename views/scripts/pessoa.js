

$( document ).ready(function() {

    let url_base = "http://localhost:3000/controllers/PessoaControllers.php?";


    $("btnEditar").on("click", function(){
        let idPessoa = $(this).val();
        url_base += "id="+idPessoa;
        $.get(url_base).done(function(response){
            $("#idBanco").val(response[0].id);
            $("#idNome").val(response[0].nome);
            $(".modal").modal("show");
            console.log(response);

        })
        console.log("Ready! Editar id: " + idPessoa);
    });


    $(".btnExcluir").on("click", function(){
        let id = $(this).val();
        url_base+="?id="+id;
        $.post(url_base).done(function(response){
            console.log(JSON.stringify(response));
        })
        console.log("Ready! Excluir id: " + id);
    });
});


