<?php

$title = urlencode('{{Plantilla:{{#time: md}}}}');

$url = 'http://es.wikiquote.org/w/api.php?action=parse&format=json&text=' . $title . '';

$cadena = fopen($url, "r");

?>

<div class="page panel">

    <h3 class="fw-normal mt-3">¡Bienvenida!</h3>


    <div class="small bi-download mt-3"></div>
    <h5 class="mb-1">Hojas de cálculo (.csv)</h5>

    <div class="ps-3">
        <div class="link">
            <a href="./export_csv/cuestionario_final.php" download>
                Cuestionario Final <span class="small fw-light">(cuestionario_final.csv)</span>
            </a>
        </div>
        <div class="link">
            <a href="./export_csv/cuestionario_piloto.php" download>
                Cuestionario Piloto <span class="small fw-light">(cuestionario_piloto.csv)</span>
            </a>
        </div>
        <div class="link">
            <a href="./export_csv/lista_sorteo.php" download>
                Participantes del Sorteo <span class="small fw-light">(lista_sorteo.csv)</span>
            </a>
        </div>
    </div>

    <div class="small bi-tools mt-3"></div>
    <h5 class="mb-1">Otras funciones</h5>

    <div class="ps-3">
        <div class="link">
            <a href="./index.php?p=registros"><span class="small bi-table me-1"></span> Ver registros</a>
        </div>
        <div class="link">
            <a href="./index.php?p=grafico"><span class="small bi-asterisk me-1"></span> Recuperar grafico</a>
        </div>
        <div class="link">
            <a href="./index.php?p=general"><span class="small bi-braces-asterisk me-1"></span> Gráfico general</a>
        </div>
    </div>

    <div class="small bi-quote mt-3"></div>
    <div class="link">
        <a class="d-inline-flex mb-1" href="http://es.wikiquote.org/" target="_blank">
            <h5 class="my-auto">Cita del día</h5>
            <span class="my-auto ms-2 small bi-box-arrow-up-right fw-light">&nbsp;<small>Wikiquotes</small></span>
        </a>
    </div>
    <div class="cita" id="cita">
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