<?php
$semana = date("D");

$semanaarray = array("Mon" => "lunes", "Tue" => "martes", "Wed" => "miércoles", "Thu" => "jueves", "Fri" => "viernes", "Sat" => "sábado", "Sun" => "domingo");

$dia = $semanaarray[$semana];

$title = urlencode('{{Plantilla:{{#time: md}}}}');

$url = 'http://es.wikiquote.org/w/api.php?action=parse&format=json&text=' . $title . '';

$cadena = fopen($url, "r");

?>

<div class="panel">

    <h3 class="fw-normal mt-3">¡Bienvenida!</h3>


    <div class="small bi-download mt-3"></div>
    <h5 class="mb-1">Hojas de cálculo (.csv)</h5>

    <div class="ps-3">
        <div class="link">
            <a href="">Cuestionario Final <span class="small fw-light">(rfinal.csv)</span></a>
        </div>
        <div class="link">
            <a href="">Cuestionario Piloto <span class="small fw-light">(rpiloto.csv)</span></a>
        </div>
        <div class="link">
            <a href="">Participantes del Sorteo <span class="small fw-light">(sorteo.csv)</span></a>
        </div>
    </div>

    <div class="small bi-tools mt-3"></div>
    <h5 class="mb-1">Otras funciones</h5>

    <div class="ps-3">
        <div class="link">
            <a href=""><span class="small bi-table me-1"></span> Ver registros</a>
        </div>
        <div class="link">
            <a href=""><span class="small bi-asterisk me-1"></span> Recuperar grafico</a>
        </div>
        <div class="link">
            <a href=""><span class="small bi-braces-asterisk me-1"></span> Graficos generales</a>
        </div>
    </div>

    <div class="small bi-quote mt-3"></div>
    <div class="link">
        <a class="d-flex mb-1" href="http://es.wikiquote.org/" target="_blank">
            <h5 class="my-auto">Cita del día</h5>
            <span class="my-auto ms-2 small bi-box-arrow-up-right fw-light">&nbsp;<small>Wikiquotes</small></span>
        </a>
    </div>
    <div class="cita">
        <?php
        if ($cadena) {


            $array_x =  json_decode(stream_get_contents($cadena), true);


            $texto_html = $array_x["parse"]["text"]["*"];
            $texto = strip_tags($texto_html, ["<br>", "img"]);

            echo $texto;
        }
        ?>
    </div>
</div>