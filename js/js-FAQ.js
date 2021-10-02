var only_one_open_1 = 0;
var only_one_open_2 = 0;
var other_let_open_1 = 1;
var other_let_open_2 = 1;

function InfoSi(e)
{
    if(only_one_open_1 == 0 && other_let_open_1 == 1)
    {
    document.getElementById("container-si").style.visibility ="visible";
    var info_yes =document.getElementById("container-si");
    // ----------------------Work in Progress --------------------------------
    var title_yes = document.createElement("h2");
    var btn_yes = document.createElement("button");
 
    title_yes.setAttribute("id","titulo_1");
    btn_yes.setAttribute("id","btn_1");
    btn_yes.setAttribute("class","btn btn-primary btn-lg bg-brown");
    btn_yes.setAttribute("onclick","javascript:CerrarSi()");
    
    title_yes.innerHTML ="Gracias por tu opinión!";
    btn_yes.innerHTML ="Cerrar";

    info_yes.appendChild(title_yes);
    info_yes.appendChild(btn_yes);
    
    only_one_open_1 = 1;
    other_let_open_2 = 0;
    }

}

function InfoNo(e)
{
    if(only_one_open_2 == 0 && other_let_open_2 == 1)
    {
    document.getElementById("container-no").style.visibility ="visible";
    var info_no =document.getElementById("container-no");

    var title_no = document.createElement("h2");
    var text_no = document.createElement("textarea");
    var btn_no = document.createElement("button");

    title_no.setAttribute("id","titulo_2");

    text_no.setAttribute("class", "form-control");
    text_no.setAttribute("id", "txt_mensaje");
    text_no.setAttribute("rows","3");
    text_no.setAttribute("name","mensaje");

    btn_no.setAttribute("id","btn_2");
    btn_no.setAttribute("class","btn btn-primary btn-lg bg-brown");
    btn_no.setAttribute("onclick","javascript:CerrarNo()");

    title_no.innerHTML ="Dinos cómo mejorar:";
    btn_no.innerHTML ="Cerrar";

    info_no.appendChild(title_no);
    info_no.appendChild(text_no);
    info_no.appendChild(btn_no);

    only_one_open_2 = 1;
    other_let_open_1 = 0;
    }
    
}

function CerrarSi()
{
    document.getElementById("container-si").style.visibility ="hidden";
     // ----------------------Work in Progress --------------------------------
    document.getElementById("container-si").removeChild(titulo_1);
    document.getElementById("container-si").removeChild(btn_1);
    only_one_open_1 = 0;
    other_let_open_2 = 1;

}
function CerrarNo()
{
    document.getElementById("container-no").style.visibility ="hidden";
    document.getElementById("txt_mensaje").value ="";
    document.getElementById("container-no").removeChild(titulo_2);
    document.getElementById("container-no").removeChild(txt_mensaje);
    document.getElementById("container-no").removeChild(btn_2);
    only_one_open_2 = 0;
    other_let_open_1 = 1;
}

