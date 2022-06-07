

$( document ).ready(function() {


    function cria_tabela(dados_pessoas){
        let tabela_pessoa = monta_colunas();
        tabela_pessoa += cria_corpo(dados_pessoas);

        if(!dados_pessoas || dados_pessoas.length <= 0){
            tabela_pessoa = "<p><b>Nada para exibir</b></p>";
        }

        $("#idTabelaPessoa").html(tabela_pessoa)
    }


    function monta_colunas(){
        let header = (
            '<table class="table table-dark table-striped">'+
            '<thead>'+
                '<tr>'+
                  '<th>ID</th>'+
                  '<th>Nome</th>'+
                  '<th>CPF</th>'+
                  '<th>RG</th>'+
                  '<th>Rede Social</th>'+
                  '<th>Status</th>'+
                  '<th>Email</th>'+
                  '<th>Phone</th>'+
                  '<th>Tipo</th>'+
                  '<th>CEP</th>'+
                  '<th>Genero</th>'+
                  '<th>ACAO</th>'+
                '</tr>'+
              '</thead>'+
              '<tbody>'
        );
        return header;
    }


    $(".btnEditar").on("click", function(){
        var idPessoa = $(this).val();
        console.log("Ready! Editar id: " + idPessoa);
        

    });

    $(".btnExcluir").on("click", function(){
        var id = $(this).val();
        console.log("Ready! Excluir id: " + id);
    });
});


