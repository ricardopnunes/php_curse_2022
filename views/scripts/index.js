function mask_cpf(i){
   
    var v = i.value;
    
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
        var v = f(o.value);
        if (v != o.value) {
            o.value = v;
        }
    }, 1);
}

function mphone(v) {
    var r = v.replace(/\D/g,"");
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
   
    var v = i.value;
    
    if(isNaN(v[v.length-1])){
       i.value = v.substring(0, v.length-1);
       return;
    }
    i.setAttribute("maxlength", "9");
    if (v.length == 5) i.value += "-"; 
}

