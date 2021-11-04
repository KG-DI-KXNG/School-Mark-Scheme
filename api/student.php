<?php
$student_id;
$student_name;
$student_stars;
$student_json;


// Create New User
if (isset($_POST['send_c'])) {
    $student_name = $_POST['studentNameC'];
    $student_stars = $_POST['studentStarsC'];
    $student_id = $_POST['studentIdC'];

    header("Content-type: application/json");
    $student = array('id' => (int)$student_id, 'name' => $student_name, 'stars' =>  (int)$student_stars);
    echo json_encode($student);
}
