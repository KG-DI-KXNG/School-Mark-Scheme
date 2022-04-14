<?php

if (isset($_POST['update_json']) && isset($_POST['json'])) {
    $json = $_POST['json'];
    $file = fopen("../assets/json/students.json", "w+") or die("Critical Error!");
    fwrite($file, $json);
    fclose($file);
}
