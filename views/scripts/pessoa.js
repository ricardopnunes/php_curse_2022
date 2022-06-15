

$( document ).ready(function() {

    let url_base = "http://localhost:3000/controllers/PessoaControllers.php";
    $.get(url_base).done(function (dados_pessoas){
        monta_tabela(dados_pessoas);

    });

    $("#idTabelaUsuarios").on("click", '.btnEditar',  function(){
        let idPessoa = $(this).val();
        url_base += "?id="+idPessoa;
        $.get(url_base).done(function (dado) {

            url_base = "http://localhost:3000/controllers/PessoaControllers.php"
            $("#idBanco").val(idPessoa);
            $("#idNome").val(dado[0].nome);
            $("#idEmail").val(dado[0].email);
            $("#idCpf").val(dado[0].cpf);
            $("#idPhone").val(dado[0].phone);
            $("#idRg").val(dado[0].rg);
            $("#idRedeSocial").val(dado[0].redeSocial);
            $("#idStatus").val(dado[0].status);
            $("#idTipo").val(dado[0].tipo);
            $("#idCep").val(dado[0].cep);
            $("#idGenero").val(dado[0].genero);

            $(".modal").modal("show");
            
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
                  <th>CEP</th>
                  <th>Genero</th>
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
    var tabelaHtml = monta_colunas();
    tabelaHtml += monta_corpo(dados_pessoas);

    if (!dados_pessoas || dados_pessoas.length <= 0) {
        tabelaHtml = "<p><b>Sem dados para exibir!</b></p>";
    }

    $("#idTabelaUsuarios").html(tabelaHtml);
}

});