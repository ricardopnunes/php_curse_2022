

$( document ).ready(function() {

    let url_base = "http://localhost:3000/controllers/PessoaControllers.php";
    let url_lista_todas = url_base + "?rota=listarTodaspessoas";

    $.get(url_lista_todas).done(function (response){
        monta_tabela(response);
    }).fail(function(error){
        console.log("Deu ruim fi: " + JSON.stringify(error));
    });

    $(".btnCriarUsuario").on("click", function(){


        $.get(url_lista_todas).done(function() {

            $("#idBanco").val("");
            $("#idNome").val("");
            $("#idEmail").val("");
            $("#idCpf").val("");
            $("#idPhone").val("");
            $("#idRg").val("");
            $("#idRedeSocial").val("");
            $("#idStatus").val("");
            $("#idTipo").val("");
            $("#idCep").val("");
            $("#idGenero").val("");
        });

        $("#exampleModalLabel").html("Cadastrar");

    })


    $("#idTabelaUsuarios").on("click", '.btnEditar',  function(){
        let idPessoa = $(this).val() 
        let url_final = url_base+= "?id=" + idPessoa + "&rota=editarpessoa";

        $.get(url_final).done(function (response) {

            $("#idBanco").val(idPessoa);
            $("#idNome").val(response[0].nome);
            $("#idEmail").val(response[0].email);
            $("#idCpf").val(response[0].cpf);
            $("#idPhone").val(response[0].telefone);
            $("#idRg").val(response[0].rg);
            $("#idRedeSocial").val(response[0].redeSocial);
            $("#idStatus").val(response[0].status);
            $("#idTipo").val(response[0].tipo);
            $("#idGenero").val(response[0].genero);
            $("#idCep").val(response[0].cep);


            $(".modal").modal("show");
            $("#exampleModalLabel").html("Editar");
            
        });
    });


    $("#idTabelaUsuarios").on("click", '.btnExcluir',  function(){
        let id = $(this).val();
        let url_final = url_base+= "?id="+id + "&rota=excluirpessoa";
        
        $(this).closest("tr").remove();
        $.get(url_final).done(function(response){
            $(this).closest("tr").remove();
        });
    });



    function monta_colunas(){
        let cabecalho = (
            `<table class="table table-dark table-striped">
            <thead>
                <tr>
                  <th>ID</th>
                  <th>Email</th>
                  <th>Nome</th>
                  <th>CPF</th>
                  <th>RG</th>
                  <th>Rede Social</th>
                  <th>Status</th>
                  <th>Phone</th>
                  <th>Tipo</th>
                  <th>Genero</th>
                  <th>CEP</th>
                  <th>ACAO</th>
                </tr>
              </thead>`
        );
        return cabecalho;
    }


function monta_corpo(responses_pessoas){

    let body = '<tbody>';

    $.each(responses_pessoas, function (indice, responses) {

        let statusDesc = (responses.status == 1) ? "Ativo" : "Inativo";
        
        let td ="";

        td += "<td>" + responses.id + "</td>";
        td += "<td>" + responses.nome + "</td>";
        td += "<td>" + responses.email + "</td>";
        td += "<td>" + responses.cpf + "</td>";
        td += "<td>" + responses.rg + "</td>";
        td += "<td>" + responses.redeSocial + "</td>";
        td += "<td>" + statusDesc + "</td>";
        td += "<td>" + responses.telefone + "</td>";
        td += "<td>" + responses.tipo + "</td>";
        td += "<td>" + responses.genero + "</td>";
        td += "<td>" + responses.cep + "</td>";

        let btnEditar = "<button type='button' id='btnEditar'"+responses.id+ " value=" + responses.id + " class='btn btn-warning btnEditar'>Editar</button>";
        let btnExcluir = "<button type='button' id='btnExcluir'"+responses.id+ " value=" + responses.id + " class='btn btn-danger btnExcluir'>Excluir</button>";
        
        td += "<td>" + btnEditar + btnExcluir + "</td>";

        let tr = "<tr>" + td + "</tr>";
        body += tr;

    });

    body += "</tbody>";

    return body

}

function monta_tabela(responses_pessoas) {
    let tabela_html = monta_colunas();
    tabela_html += monta_corpo(responses_pessoas);

    if (!responses_pessoas || responses_pessoas.length <= 0) {
        tabela_html = "<p><b>Sem responses para exibir!</b></p>";
    }

    $("#idTabelaUsuarios").html(tabela_html);
}

});