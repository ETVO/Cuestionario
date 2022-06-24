// var page = 1;
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

var apTitles = ["A - El Consentimiento Informado", "B - Orientaciones para responder el cuestionario", 
"C - Evaluación de las competencias y dominio sobre esas competencias", 
"D - Opinión sobre la formación de los entrenadores que actúan en edad escolar", "E - Datos sociodemográficos",
"F - Sobre el cuestionario y la participación en este estudio"];

function showSelectedPage()
{
    if(typeof(Storage) !== "undefined")
    {
        if(sessionStorage.getItem("ppage"))
            page = sessionStorage.getItem("ppage");
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

    if(typeof(Storage) !== "undefined")
    {
        sessionStorage.setItem("ppage", page);
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
        sessionStorage.removeItem("ppage");
        
        sessionStorage.setItem("ppage", page);
    }
    
    showSelectedPage();
    scrollTop();
}

function scrollTop() {
    document.body.scrollTop = document.documentElement.scrollTop = 0;
}