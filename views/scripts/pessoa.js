

$( document ).ready(function() {

    let url_base = "http://localhost:3000/controllers/PessoaControllers.php";
    $.get(url_base).done(function (dados_pessoas){
        monta_tabela(dados_pessoas);
    });

    $(".btnCriarUsuario").on("click", function(){


        $.get(url_base).done(function() {

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
        let url_final = url_base+= "?id=" + idPessoa;

        $.get(url_final).done(function (dado) {

            url_base = "http://localhost:3000/controllers/PessoaControllers.php"

            $("#idBanco").val(idPessoa);
            $("#idNome").val(dado[idPessoa-1].nome);
            $("#idEmail").val(dado[idPessoa-1].email);
            $("#idCpf").val(dado[idPessoa-1].cpf);
            $("#idPhone").val(dado[idPessoa-1].phone);
            $("#idRg").val(dado[idPessoa-1].rg);
            $("#idRedeSocial").val(dado[idPessoa-1].redeSocial);
            $("#idStatus").val(dado[idPessoa-1].status);
            $("#idTipo").val(dado[idPessoa-1].tipo);
            $("#idGenero").val(dado[idPessoa-1].genero);
            $("#idCep").val(dado[idPessoa-1].cep);

            $(".modal").modal("show");

            $("#exampleModalLabel").html("Editar");
            
        })
        console.log("Ready! Editar id: " + idPessoa);

    });


    $(".btnExcluir").on("click", function(){
        let id = $(this).val();
        url_base+="?id="+id;
        $.post(url_base).done(function(dado){
            console.log(JSON.stringify(dado));
        })
        console.log("Ready! Excluir id: " + id);
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


function monta_corpo(dados_pessoas){

    let body = '<tbody>';

    $.each(dados_pessoas, function (indice, dados) {

        let statusDesc = (dados.status == 1) ? "Ativo" : "Inativo";
        
        let td ="";

        td += "<td>" + dados.id + "</td>";
        td += "<td>" + dados.nome + "</td>";
        td += "<td>" + dados.email + "</td>";
        td += "<td>" + dados.cpf + "</td>";
        td += "<td>" + dados.rg + "</td>";
        td += "<td>" + dados.redeSocial + "</td>";
        td += "<td>" + statusDesc + "</td>";
        td += "<td>" + dados.phone + "</td>";
        td += "<td>" + dados.tipo + "</td>";
        td += "<td>" + dados.genero + "</td>";
        td += "<td>" + dados.cep + "</td>";

        let btnEditar = "<button type='button' id='btnEditar'"+dados.id+ " value=" + dados.id + " class='btn btn-warning btnEditar'>Editar</button>";
        let btnExcluir = "<button type='button' id='btnExcluir'"+dados.id+ " value=" + dados.id + " class='btn btn-danger btnExcluir'>Excluir</button>";
        
        td += "<td>" + btnEditar + btnExcluir + "</td>";

        let tr = "<tr>" + td + "</tr>";
        body += tr;

    });

    body += "</tbody>";

    return body

}

function monta_tabela(dados_pessoas) {
    let tabela_html = monta_colunas();
    tabela_html += monta_corpo(dados_pessoas);

    if (!dados_pessoas || dados_pessoas.length <= 0) {
        tabela_html = "<p><b>Sem dados para exibir!</b></p>";
    }

    $("#idTabelaUsuarios").html(tabela_html);
}

});