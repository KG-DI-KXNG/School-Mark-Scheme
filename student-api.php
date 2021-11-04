<?php
if(isset($_GET['student'])){ 
$people_json = file_get_contents('student.json');
header('content-type: application/json');

// $decoded_json = json_decode($people_json, true);

// $customers = $decoded_json['customers'];

echo $people_json;
}

if(isset($_POST['new-student'])){
    $id = $_POST['id'];
    $classname = $_POST['class'];
    $name = $_POST['studentName'];
    $star = $_POST['star'];


    $class = [
        $classname = [
            "id"=>$id,
            "student_name"=>$name,
            "star"=>$star,
        ]
        ];
    echo json_encode($class);
}

if(isset($_GET['new-student'])){
    $id = 1;
    $classname = "spanish";
    $name = "kg";
    $star = 4;


    $class = [
        $classname => [
            ["id"=>$id, "student_name"=>$name,"star"=>$star]
        ],
        "maths" => [
            ["id"=>$id, "student_name"=>$name,"star"=>$star]
        ]
    ];
    
    // $people_json = file_get_contents('student.json');
    // $decoded_json = json_decode($people_json, true);
    
    // $customers = $decoded_json['customers'];
//     $people_json = file_get_contents($class);
//    var_dump(json_decode($people_json, true));
$new = [];

foreach($class as $c){
    foreach($c as $c1){
        foreach($c1 as $c2){
            $new= array_push($c2) ;
        };
    };
};

for
echo $class["spanish"][0]['id'];

    // $fp = fopen('results.json', 'a+');
    // fwrite($fp, json_encode($class));
    // fclose($fp);
    // $fp = fopen('results.json', 'a+');
    // fwrite($fp, "\n");
    // fclose($fp);

}

//clear all records
if (isset($_GET['clear'])){
	$myfile = fopen("results.json", "w+");
	fclose($myfile);
}

