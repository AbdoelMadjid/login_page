<?php
include_once("../config/config.inc.php");
include_once("../config/db.php");
header('Content-type: application/json');
header("access-control-allow-origin: *");

$headers="ID|PID|ADDED DATE";
$final_headers=array();
foreach(explode('|',$headers) as $col){
    $data["title"]=$col;        
    array_push($final_headers,$data);
}

echo json_encode($final_headers);
?>