<?php

include "./helper.php";

$table = "rfinal";
$graph_title = "Evaluación y dominio general\nsobre las competencias";

$url = '';

if (isset($_GET['url']))
    $url = urldecode($_GET['url']);

$searchby = '';

if (isset($_GET['searchby']))
    $searchby = $_GET['searchby'];

$email = '';
$id = '';
$searchcol = '';
$searchval = '';

if ($searchby == 'email' && isset($_GET['email'])) {
    $email = $_GET['email'];
    $searchcol = "email";
    $searchval = "'$email'";
} else if ($searchby == 'id' && isset($_GET['id'])) {
    $id = $_GET['id'];
    $searchcol = "id_resposta";
    $searchval = $id;
}

if ($email != '' || $id != '') {
    $a_fields = array(
        "cI1a,cI2a,cI3a,cI4a,cI5a,cI6a", "cII7a,cII8a,cII9a,cII10a,cII11a,cII12a",
        "cIII13a,cIII14a,cIII15a,cIII16a,cIII17a,cIII18a", "cIV19a,cIV20a,cIV21a,cIV22a,cIV23a,cIV24a",
        "cV25a,cV26a,cV27a,cV28a,cV29a,cV30a", "cVI31a,cVI32a,cVI33a,cVI34a,cVI35a,cVI36a",
        "cVII37a,cVII38a,cVII39a,cVII40a,cVII41a,cVII42a"
    );

    $a_values = get_averages($a_fields, 'a', $table, $searchcol, $searchval);

    $b_fields = array(
        "cI1b,cI2b,cI3b,cI4b,cI5b,cI6b", "cII7b,cII8b,cII9b,cII10b,cII11b,cII12b",
        "cIII13b,cIII14b,cIII15b,cIII16b,cIII17b,cIII18b", "cIV19b,cIV20b,cIV21b,cIV22b,cIV23b,cIV24b",
        "cV25b,cV26b,cV27b,cV28b,cV29b,cV30b", "cVI31b,cVI32b,cVI33b,cVI34b,cVI35b,cVI36b",
        "cVII37b,cVII38b,cVII39b,cVII40b,cVII41b,cVII42b"
    );

    $b_values = get_averages($b_fields, 'b', $table, $searchcol, $searchval);
    
    if($searchby == 'email') {
        $sql = "SELECT id_resposta FROM $table WHERE $searchcol = $searchval";

        $res = mysqli_query($conn, $sql);

        $row = mysqli_fetch_array($res);

        $id = $row['id_resposta'];
    }

    $image_title = "Grafico $id - Estudio Final - Martina Kieling";
}


?>

<div class="recuperar">

    <a class="small text-decoration-none" href="./index.php">
        <span class="bi-arrow-left me-1"></span>Panel principal
    </a>
    <?php if ($url != '') : ?>
        <br>
        <a class="small text-decoration-none" href="<?php echo $url; ?>">
            Volver a Registros
            <span class="bi-arrow-right me-1"></span>
        </a>
    <?php endif; ?>

    <div class="mt-3 d-flex">
        <span class="my-auto bi-asterisk me-2 text-primary"></span>
        <h3 class="my-auto">
            Recuperar Gráfico
        </h3>
    </div>

    <form class="my-3" action="" id="buttonlessForm" method="get">
        <input type="hidden" name="p" value=<?php echo $_GET['p']; ?>>
        <div class="mb-3">
            <div class="form-floating">
                <select class="form-select" id="searchby" name="searchby" aria-label="Floating label select example">
                    <option value='' disabled selected>-- Selecione una opción --</option>
                    <option value="email" <?php if ($searchby == 'email') echo 'selected'; ?>>Email</option>
                    <option value="id" <?php if ($searchby == 'id') echo 'selected'; ?>>Id</option>
                </select>
                <label for="searchby">Buscar por:</label>
            </div>
        </div>
        <div class="mb-3">
            <?php if ($searchby == 'email') : ?>
                <div class="form-floating">
                    <input type="email" class="form-control" id="email" name="email" placeholder="nombre@ejemplo.com" value="<?php echo $email; ?>">
                    <label for="email">Email</label>
                </div>
            <?php elseif ($searchby == 'id') : ?>
                <div class="form-floating">
                    <input type="number" class="form-control" id="id" name="id" placeholder="49" value="<?php echo $id; ?>">
                    <label for="id">Id</label>
                </div>
            <?php endif; ?>
        </div>
    </form>

    <?php if ($id != '' || $email != '') : ?>
        <div class="rendered">

            <div class="registro">
                <h4 class="text-center">
                    <?php if ($searchby == 'email') {
                    ?>
                        <small class="fw-normal fs-5 d-block">Email</small>
                    <?php
                        echo $email;
                    } else {
                    ?>
                        <small class="fw-normal fs-5 d-block">Id</small>
                    <?php
                        echo $id;
                    } ?>
                </h4>
            </div>

            <div class="d-flex">
                <div class="mx-auto" id="grafico">
                </div>
            </div>

            <div class="col-md-6 col-lg-3 mx-auto">
                <form>
                    <input type="hidden" name="" id="graf_title" value="<?php echo $graph_title ?>">
                    <table class="table text-center table-sm">
                        <thead class="text-uppercase">
                            <tr>
                                <td colspan="3">
                                    Promedios
                                </td>
                            </tr>
                            <tr>
                                <td>
                                </td>
                                <th class="a" id="headerA">
                                    Evaluación
                                </th>
                                <th class="b" id="headerB">
                                    Dominio
                                </th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php for ($i = 0; $i < 7; $i++) :

                                $roman = integerToRoman($i + 1);
                            ?>
                                <tr>
                                    <th class="cat"><?php echo $roman; ?></th>
                                    <td class="a"><?php echo round($a_values[$i], 2); ?></td>
                                    <input type="hidden" id="<?php echo $roman . 'a'; ?>" value="<?php echo $a_values[$i] ?>">

                                    <td class="b"><?php echo round($b_values[$i], 2); ?></td>
                                    <input type="hidden" id="<?php echo $roman . 'b'; ?>" value="<?php echo $b_values[$i] ?>">

                                </tr>
                            <?php endfor; ?>
                        </tbody>
                    </table>
                </form>
            </div>

            <div class="d-flex">
                <button class="mx-auto btn btn-outline-primary" onclick="saveCanvas('<?php echo $image_title; ?>')">
                    Descargar grafico
                </button>
            </div>

        </div>
    <?php endif; ?>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/0.5.6/p5.js"></script>
<script type="text/javascript" src="../js/grafico1.js?n=1"></script>