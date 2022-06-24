// var page = 1;
var maintitle = document.getElementById("maintitle");

var apA = document.getElementById("apA");
var apB = document.getElementById("apB");
var apC = document.getElementById("apC");
var apD = document.getElementById("apD");
var apE = document.getElementById("apE");
var apF = document.getElementById("apF");

var pages = [apA, apB, apC, apD, apE, apF];

var ant = document.getElementsByClassName("ant");
var prox = document.getElementsByClassName("prox");
var submit = document.getElementsByClassName("submit");

var controls = document.getElementsByClassName("page_control");
var head = document.getElementById("headjs");

var apTitles = ["A - El Consentimiento Informado", "B - Datos iniciales", 
"C - Evaluación de las competencias y dominio sobre esas competencias", 
"D - Opinión sobre la formación de los entrenadores que actúan en edad escolar", "E - Datos sociodemográficos",
"F - Sobre el cuestionario y la participación en este estudio"];

function showSelectedPage()
{
    if(typeof(Storage) !== "undefined")
    {
        if(sessionStorage.getItem("page"))
            page = sessionStorage.getItem("page");
        else
            page = 1;
    }
    else
        page = 1;

    hideAllPages();

    for(var i = 0; i < ant.length; i++) ant[i].style = "";
    for(var i = 0; i < prox.length; i++) prox[i].style = "";
    for(var i = 0; i < submit.length; i++) submit[i].style = "visibility:hidden";
    
    if(page == 1)
    {
        apA.style = "display:block";
        for(var i = 0; i < ant.length; i++) ant[i].style = "display:none";
        maintitle.innerHTML += "<b style='color: #BE1521'>*</b>";
        
    }
    else if(page == 2)
        apB.style = "display:block";
    else if(page == 3)
    {
        apC.style = "display:block";
        ec_set();
        ed_set();
    }
    else if(page == 4)
        apD.style = "display:block";
    else if(page == 5)
        apE.style = "display:block";
    else if(page == 6)
    {
        apF.style = "display:block";
        for(var i = 0; i < prox.length; i++) prox[i].style = "display: none";
        for(var i = 0; i < submit.length; i++) submit[i].style = "visibility:visible";
    }

    setControl();
    cmpEmail();
    checkEmail();
    setAll();

    if(typeof(Storage) !== "undefined")
    {
        sessionStorage.setItem("page", page);
    }
}

function setControl()
{
    for(var i = 0; i < controls.length; i++)
    {
        controls[i].innerHTML = "Página <b>" + page + "</b> de <b>6</b> <br><b>(" + apTitles[page-1] + ")</b>";
    }
}

function hideAllPages()
{
    pages.forEach(page => {
        hidePage(page);
    });
}

function showAllPages()
{
    pages.forEach(page => {
        showPage(page);
    });
}

function showPage(page)
{
    page.style = "display:block";
}

function hidePage(page)
{
    page.style = "display:none";
}

window.onload = function (){
    rodape();
    showSelectedPage();
}

function pageChange(direction){
    if(direction == 1)//next
    {
        if(page < 6){
            if(page == 1)
            {
                if(document.getElementById("no_acepta").checked)
                {
                    if(confirm("Estimado/a, si elige esta opción no podrá responder al cuestionario " +
                    "ni tener acceso al gráfico con el resultado del dominio de sus competencias " +
                    "como entrenador de voleibol. ¿Está seguro?"))
                        window.location.href = "..";
                    return;
                }
                if(!document.getElementById("acepta").checked)
                {   
                    alert("Debe seleccionar una de las dos opciones (Acepta o No Acepta)");
                    return;
                }
            }
            else if(page == 5)
            {
                if(!document.getElementById("ubica1").checked && (!document.getElementById("ubica2").checked || document.getElementById("ubica2_text").value == ""))
                {
                    alert("¡Por favor rellena su ubicación (questión e) antes de seguir!");
                    return;
                }
            }
            page++;
        }
    }
    else//back 
    {
        if(page > 1){
            page--;
        }
    }

    if(typeof(Storage) !== "undefined")
    {
        sessionStorage.removeItem("page");
        
        sessionStorage.setItem("page", page);
    }
    
    showSelectedPage();
    scrollTop();
}

function scrollTop() {
    document.body.scrollTop = document.documentElement.scrollTop = 0;
}