function mask_cpf(i){
   
    let v = i.value;
    
    if(isNaN(v[v.length-1])){
       i.value = v.substring(0, v.length-1);
       return;
    }
    
    i.setAttribute("maxlength", "14");
    if (v.length == 3 || v.length == 7) i.value += ".";
    if (v.length == 11) i.value += "-"; 
}



function mask_phone(o, f) {
    setTimeout(function () {
        let v = f(o.value);
        if (v != o.value) {
            o.value = v;
        }
    }, 1);
}

function mphone(v) {
    let r = v.replace(/\D/g,"");
    r = r.replace(/^0/,"");
    if (r.length > 10) {
        r = r.replace(/^(\d\d)(\d{5})(\d{4}).*/,"(0$1) $2-$3");
    }
    else if (r.length > 5) {
        r = r.replace(/^(\d\d)(\d{4})(\d{0,4}).*/,"(0$1) $2-$3");
    }
    else if (r.length > 2) {
        r = r.replace(/^(\d\d)(\d{0,5})/,"(0$1) $2");
    }
    else {
        r = r.replace(/^(\d*)/, "(0$1");
    }
    return r;
}


function mask_cep(i){
   
    let v = i.value;
    
    if(isNaN(v[v.length-1])){
       i.value = v.substring(0, v.length-1);
       return;
    }
    i.setAttribute("maxlength", "9");
    if (v.length == 5) i.value += "-"; 
}



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
