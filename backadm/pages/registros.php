<?php

include "../model/mysql.php";

// $table = 'rfinal';
$table = 'rfinal';

if (isset($_GET['table']))
    $table = $_GET['table'];

$showDeleted = 0;

if (isset($_GET['excluidos']))
    $showDeleted = 1;

$filename = array(
    'rfinal' => 'cuestionario_final',
    'rpiloto' => 'cuestionario_piloto',
    'rsorteo' => 'lista_sorteo',
);

$fields = array(
    'rfinal' => array(
        'id_resposta', 'DATE_FORMAT(fim, "%d/%m/%Y") AS fecha', 'ubica', 'ee AS ca', 'email', 'excluido'
    ),
    'rpiloto' => array(
        'id_resposta', 'DATE_FORMAT(fim, "%d/%m/%Y") AS fecha', 'ea AS ca', 'excluido'
    ),
    'rsorteo' => array(
        'email'
    ),
);

?>

<div class="page registros">

    <a class="small text-decoration-none" href="./index.php">
        <span class="bi-arrow-left me-1"></span>Panel principal
    </a>

    <div class="mt-3 d-flex">
        <span class="my-auto bi-table me-2 text-primary"></span>
        <h3 class="my-auto">
            Ver Registros
        </h3>
        <button class="my-auto bi-arrow-clockwise ms-1 text-secondary" for="formTabla" id="reloadForm" title="Recargar">
        </button>
    </div>

    <form class="my-3" action="" method="get" id="buttonlessForm">
        <input type="hidden" name="p" value=<?php echo $_GET['p']; ?>>
        <div class="mb-2">
            <div class="form-floating">
                <select class="form-select" name='table' id="selTabla" aria-label="Seleccione una tabla">
                    <option value="" disabled selected>
                        -- Seleccione una tabla --
                    </option>
                    <option value="rfinal" <?php if ($table == 'rfinal') echo "selected"; ?>>
                        Cuestionario Final
                    </option>
                    <option value="rpiloto" <?php if ($table == 'rpiloto') echo "selected"; ?>>
                        Cuestionario Piloto
                    </option>
                    <option value="rsorteo" <?php if ($table == 'rsorteo') echo "selected"; ?>>
                        Lista de Sorteo
                    </option>
                </select>
                <label for="floatingSelect">Tabla</label>
            </div>
        </div>
        <?php if ($table != '') : ?>
            <div class="mb-2 d-flex">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="excluidos" id="showDeleted" <?php if ($showDeleted) echo 'checked'; ?>>
                    <label class="form-check-label" for="showDeleted">
                        Exhibir excluidos
                    </label>
                </div>
                <div class="ms-3">
                    <a class="text-decoration-none" href="<?php echo './export_csv/' . $filename[$table] . '.php?excluidos=' . strval($showDeleted); ?>">
                        <span class="bi-download"></span>
                        <?php echo $filename[$table] . '.csv'; ?>
                    </a>
                </div>
            </div>
        <?php endif; ?>
    </form>

    <table class="table table-striped">
        <thead class="text-">
            <tr>
                <?php
                switch ($table) {
                    case 'rfinal':
                ?>
                        <th scope="col">#</th>
                        <th scope="col">Fecha</th>
                        <th scope="col">Ubicación - Comunidad Autónoma</th>
                        <th scope="col">Email</th>
                        <th scope="col">¿Excluido?</th>
                        <th scope="col" class="text-center">Acciones</th>
                    <?php
                        break;

                    case 'rpiloto':
                    ?>
                        <th scope="col">#</th>
                        <th scope="col">Fecha</th>
                        <th scope="col">Comunidad Autónoma</th>
                        <th scope="col">¿Excluido?</th>
                        <th scope="col" class="text-center">Acciones</th>
                    <?php
                        break;

                    case 'rsorteo':
                    ?>
                        <th scope="col">Email</th>
                <?php
                        break;
                }
                ?>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($table != '') :

                $formatted_fields = join(', ', $fields[$table]);

                $sql = "SELECT $formatted_fields FROM $table";

                if ($table != 'rsorteo') {
                    if (!$showDeleted) {
                        $sql .= ' WHERE excluido = 0';
                    }

                    $sql .= ' ORDER BY excluido DESC';
                }

                $starttime = microtime(true);

                $res = mysqli_query($conn, $sql);

                $rows = mysqli_num_rows($res);

                $endtime = microtime(true);
                $duration = $endtime - $starttime; //calculates total time taken

                // convert to miliseconds and format 5 decimal places
                $duration = number_format($duration, 5); 

            ?>
                <small><?php echo $rows ?> registros</small>
                <?php

                switch ($table) {
                    case 'rfinal':
                        while ($row = mysqli_fetch_array($res)) {
                            $id = $row['id_resposta'];
                            $fecha = $row['fecha'];
                            $ubica = utf8_encode($row['ubica']);
                            $ca = utf8_encode($row['ca']);
                            $email = $row['email'];
                            $excluido = $row['excluido'];

                            $new_exc = 1;
                            if ($excluido)
                                $new_exc = 0;

                            $url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

                            $update_pgr = "./update_id.php";
                            $update_pgr .= "?table=$table&id=$id&excluido=" . strval($new_exc) . "&url=" . urlencode($url);

                ?>
                            <tr class="<?php if ($excluido) echo 'excluido'; ?>">
                                <th scope="row"><?php echo $id; ?></th>
                                <td><?php echo $fecha; ?></td>
                                <td><?php echo $ubica . ' <b>-</b> ' . $ca; ?></td>
                                <td><?php echo $email; ?></td>
                                <td><?php echo ($excluido) ? 'Sí' : 'No'; ?></td>
                                <td class="acciones text-center">
                                    <a class="<?php echo ($excluido) ? 'bi-recycle text-success' : 'bi-trash3-fill text-danger' ?>" title="<?php echo ($excluido) ? 'Recuperar' : 'Eliminar' ?>" href="<?php echo $update_pgr; ?>"></a>

                                    <a class="bi-asterisk text-primary" title="Ver gráfico"
                                    href="?p=grafico&url=<?php echo urlencode($url); ?>&searchby=id&id=<?php echo $id; ?>"></a>
                                </td>
                            </tr>
                        <?php
                        }
                        break;

                    case 'rpiloto':
                        while ($row = mysqli_fetch_array($res)) {

                            $id = $row['id_resposta'];
                            $fecha = $row['fecha'];
                            $ca = utf8_encode($row['ca']);
                            $excluido = $row['excluido'];

                            $new_exc = 1;
                            if ($excluido)
                                $new_exc = 0;

                            $url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

                            $update_pgr = "./update_id.php";
                            $update_pgr .= "?table=$table&id=$id&excluido=" . strval($new_exc) . "&url=" . urlencode($url);

                        ?>
                            <tr class="<?php if ($excluido) echo 'excluido'; ?>">
                                <th scope="row"><?php echo $id; ?></th>
                                <td><?php echo $fecha; ?></td>
                                <td><?php echo $ca; ?></td>
                                <td><?php echo ($excluido) ? 'Sí' : 'No'; ?></td>
                                <td class="acciones text-center">
                                    <a class="<?php echo ($excluido) ? 'bi-recycle text-success' : 'bi-trash3-fill text-danger' ?>" title="<?php echo ($excluido) ? 'Recuperar' : 'Eliminar' ?>" href="<?php echo $update_pgr; ?>"></a>

                                    <a class="bi-asterisk text-primary" title="Ver gráfico"
                                    href="?p=grafico&url=<?php echo urlencode($url); ?>&searchby=id&id=<?php echo $id; ?>"></a>
                                </td>
                            </tr>
                        <?php
                        }
                        break;

                    case 'rsorteo':
                        while ($row = mysqli_fetch_array($res)) {

                            $email = $row['email'];

                        ?>
                            <tr>
                                <td><?php echo $email; ?></td>
                            </tr>
                <?php
                        }
                        break;
                }

            else :
                ?>
                <p>Ninguna tabla seleccionada</p>
            <?php
            endif;
            ?>
        </tbody>
    </table>
</div>