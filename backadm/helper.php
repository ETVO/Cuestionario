<?php
require_once dirname(__DIR__) . './util/util.php';
require_once dirname(__DIR__) . './model/mysql.php';

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

function auth_or_exit()
{

    $auth = false;

    if (isset($_SESSION['pass'])) {
        $pass = $_SESSION['pass'];
        if ($pass == getSenha()) {
            $auth = true;
        }
    }

    // If not authenticated, redirect to main admin page
    if (!$auth) {
        header('Location: ../index.php');
        exit;
    }
}

function get_averages($grouped_fields, $group_name = 'g', $table, $searchcol, $searchval = null)
{
    foreach ($grouped_fields as $i => &$group) {
        $group_arr = explode(',', $group);
        $count = count($group_arr);
        $group = "(" . join(' + ', $group_arr) . ")/$count AS " . $group_name . ($i + 1);
    }

    $group_query = join(', ', $grouped_fields);
    $sql = "SELECT $group_query FROM $table";

    if($searchcol != 1) {
        $sql .= " WHERE $searchcol = $searchval";
    }

    $conn = get_conn();
    $res = mysqli_query($conn, $sql);

    $row = mysqli_fetch_array($res, MYSQLI_NUM);
    
    return $row;
}
