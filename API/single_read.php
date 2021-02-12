<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Methods: POST");
    header("Access-Control-Max-Age: 3600");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

    include_once '../config/database.php';
    include_once '../class/employees.php';

    $database = new Database();
    $db = $database->getConnection();

    $item = new Employee($db);

    $item->hid = isset($_GET['hid']) ? $_GET['hid'] : die();
  
    $item->getSingleEmployee();

    if($item->hname != null){
        // create array
        $emp_arr = array(
            "hid" =>  $item->hid,
            "hname" => $item->hname,
            "address" => $item->address,
            "city" => $item->city,
            "phone" => $item->phone,
            "email" => $item->email
        );
      

        echo json_encode($emp_arr);
    }
      
    else{
        http_response_code(404);
        echo json_encode("Employee not found.");
    }
?>