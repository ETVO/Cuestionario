var eh = document.getElementById("ei");

eh.onclick = function (){
    eh_set();
}

eh.onload = function (){
    eh_set();
}

function eh_set()
{
    var eh1 = document.getElementById("eh1");
    var eh2 = document.getElementById("eh2");
    var eh3 = document.getElementById("eh3");//Bachillerato
    var eh4 = document.getElementById("eh4");//formacion medio
    var eh5 = document.getElementById("eh5");//formacion superior
    var eh6 = document.getElementById("eh6");
    var eh7 = document.getElementById("eh7");
    var eh8 = document.getElementById("eh8");
    var eh9 = document.getElementById("eh9");

    var ehcat1 = document.getElementById("ehcat1");
    var eh_rad1 = document.getElementById("eh_rad1");
    var ehr1s = document.getElementById("ehr1s");
    var ehr1n = document.getElementById("ehr1n");

    var ehcat2 = document.getElementById("ehcat2");
    var eh_rad2 = document.getElementById("eh_rad2");

    var ehcat3 = document.getElementById("ehcat3");
    var eh_rad3_1 = document.getElementById("eh_rad3_1");
    var eh_rad3_2 = document.getElementById("eh_rad3_2");
    

    if(eh4.checked || eh5.checked || eh9.checked)
    {
        eh_rad1.style="";
    }
    else
    {
        eh_rad1.style="visibility: hidden";
        ehr1s.checked = false;
        ehr1n.checked = false;
    }

    if(eh3.checked || eh4.checked || eh5.checked || eh9.checked)
    {
        ehcat2.style = "opacity: 1";
    }
    else
    {
        ehcat2.style = "opacity: 0.5";
        eh6.checked = false;
    }

    if(eh6.checked)
    {
        eh_rad2.style = "";
        ehcat3.style = "opacity: 1";
    }
    else
    {
        eh_rad2.style="visibility: hidden";
        ehcat3.style = "opacity: 0.5";
        eh7.checked = false;
        eh8.checked = false;
    }

    if(eh7.checked)
    {
        eh_rad3_1.style="";
    }
    else
    {
        eh_rad3_1.style="visibility: hidden";
    }

    if(eh8.checked)
    {
        eh_rad3_2.style="";
    }
    else
    {
        eh_rad3_2.style="visibility: hidden";
    }


    if(eh9.checked)
    {
        eh9_text.style = "";
    }
    else
    {
        eh9_text.style = "display: none";
    }
}

// ec -> ed

var ed = document.getElementById("ed");

ed.onclick = function (){
    ed_set();
}

ed.onload = function (){
    ed_set();
}

function ed_set()
{
    var ed6 = document.getElementById("ed6");
    var ed6_text = document.getElementById("ed6_text");

    if(ed6.checked)
    {
        ed6_cual.style = "display: block";
    }
    else
    {
        ed6_cual.style = "display: none";
    }
}

var ubica = document.getElementById("ubica");
var ef = document.getElementById("ef");

ubica.onclick = function (){
    ubica_set();
}

ubica.onload = function (){
    ubica_set();
}

function ubica_set()
{
    var ubica1 = document.getElementById("ubica1");
    var ubica2 = document.getElementById("ubica2");
    var ubica2_cual = document.getElementById("ubica2_cual");

    if(ubica2.checked)
    {
        ubica2_cual.style = "display: block";
        ef.style = "pointer-events: none";
        ef.classList.add("disabled");
    }
    else
    {
        ubica2_cual.style = "display: none";
        ef.style = "pointer-events: auto";
        ef.classList.remove("disabled");
    }
}

var ec = document.getElementById("ec");

ec.onclick = function (){
    ec_set();
}

ec.onload = function (){
    ec_set();
}

function ec_set()
{
    var ec1 = document.getElementById("ec1");
    var ec2 = document.getElementById("ec2");
    var ec_anos = document.getElementById("ec_anos");

    if(ec1.checked || ec2.checked)
    {
        ec_anos.style = "display: block";
    }
    else
    {
        ec_anos.style = "display: none";
    }
}


var submit = document.getElementById("submit");

var subFinal = document.getElementsByName("subFinal")[0];

var informe = document.getElementById("informe");
var sorteo = document.getElementById("sorteo");
var email = document.getElementById("email");
var inputEmail = document.getElementById("inputEmail");
var confirmEmail = document.getElementById("confirmEmail");
var warning = document.getElementById("warning");

inputEmail.oninput = function() {
    cmpEmail();
}

confirmEmail.oninput = function() {
    cmpEmail();
}

function cmpEmail() {
    if(confirmEmail.value != inputEmail.value && (confirmEmail.value != "" && inputEmail.value != ""))
    {
        subFinal.disabled = true;
        warning.style = "";
        return false;
    }
    else
    {
        subFinal.disabled = false;
        // warning.style = "visibility:hidden";
        warning.style = "display:none";
        return true;
    }
}

informe.onchange = function() {
    checkEmail();
}

sorteo.onchange = function() {
    checkEmail();
}

var email1 = "";
var email2 = "";

function checkEmail() {
    if(informe.checked || sorteo.checked)
    {
        email.style = "display: block";
        
        if(inputEmail.value == "")
            inputEmail.value = email1;
        inputEmail.required = true;

        if(confirmEmail.value == "")
            confirmEmail.value = email2;
        confirmEmail.required = true;
    }
    else
    {   
        email1 = inputEmail.value;
        inputEmail.value = "";
        inputEmail.required = false;

        email2 = confirmEmail.value;
        confirmEmail.value = "";
        confirmEmail.required = false;

        email.style = "display: none";
        cmpEmail();
    }
}

subFinal.onclick = function() {
    checkEmail();
    if(!cmpEmail())
    {
        alert("¡Los correos electrónicos deben ser iguales!");
        confirmEmail.focus();
        return;
    }

    // var inputs = document.getElementsByTagName("input");
    // var incompletes = [];
    // var aps = [];

    // for(var i = 0; i < inputs.length; i++)
    // {
    //     if(inputs[i].required)
    //     {
    //         if(!cons(inputs[i]))
    //             incompletes.push(inputs[i])
    //     }
    // }

    // if(incompletes.length > 0)
    // {
    //     incompletes.forEach(input => {
    //         aps.push(input.name.substr(0, 1).toUpperCase());
    //     });

    //     var i = 0;
    //     out = "¡Atención!\n\nCampo o campos obligatorios sin llenar\nApartado/s: ";

    //     var ant = "";
    //     aps.forEach(ap => {
    //         if(ap != ant) {
    //             if(i > 0) 
    //                 out += ", ";
    //             else
    //                 i = 1;
                
    //             out += ap;
    //         } 

    //         ant = ap;
    //     });
    //     alert(out);
    //     return;
    // }
}

function cons(input)
{
    switch(input.type)
    {
        case "radio":
            var names = document.getElementsByName(input.name);

            if(names.length > 1)
            {
                var flag = false;
                for(var j = 0; j < names.length; j++)
                {
                    if(names[j].checked)
                        flag = true;
                }
                return flag;
            }
            
            return input.checked;
        
        case "text":
            return input.value!=="";
        
        case "number":
            return true;
    }
}

$('#cuestionario').on('keyup keypress', function(e) {
  var keyCode = e.keyCode || e.which;
  if (keyCode === 13) { 
    e.preventDefault();
    return false;
  }
});


function setAll()
{
    eh_set();
    ec_set();
    ed_set();
    ubica_set();
}