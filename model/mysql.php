<?php
    // error_reporting(0);

    $server = "POAPMYSQL129.dns-servicio.com";
    $username = "u6018280_mrolim";
    $password = "bdMRolimTese20";

    // $server = "localhost";
    // $username = "root";
    // $password = "";
    
    $db = "db6018280_cuestionario";

    //Connection
    $conn = new mysqli($server, $username, $password, $db);

    if($conn->connect_error){
        // return array("A conexão falhou!", $conn->connect_error, false);
        // die("A conexão falhou: ".$conn->connect_error);
        throw new Exception ("¡No se pudo conectar a la base de datos!");
        exit;
    }

    // function close($conn)
    // {
    //     mysqli_close($conn);
    // }

    function mysqli_field_name($result, $field_offset)
    {
        $properties = mysqli_fetch_field_direct($result, $field_offset);
        return is_object($properties) ? $properties->name : null;
    }

    function query_to_csv($conn, $sql, $filename, $headers = true, $attachment = false) {

        $cols = array();

        $res = mysqli_query($conn, $sql);
        
        for($i = 0; $i < mysqli_num_fields($res); $i++) {
            array_push($cols, mysqli_field_name($res,$i));
        }

        header('Content-Type: text/csv; charset=utf-8');  
        header('Content-Disposition: attachment; filename=' . $filename);  
        
        $output = ($attachment) ? fopen($filename, "w") : fopen("php://output", "w");  
        
        if($headers) fputcsv($output, $cols);

        while($row = mysqli_fetch_assoc($res)) {  
            fputcsv($output, $row);
        }
        
        fclose($output); 

        if($attachment) readfile($filename);
    }
?>