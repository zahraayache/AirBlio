<?php
require_once __DIR__ . './Database.php';
class API {
    function Verfification(){
        $db = new Database;
        $users = array();
        $user = array();

    if (array_key_exists('email', $_REQUEST) && array_key_exists('password', $_REQUEST)) {

        $email =  $_REQUEST['email'];
        $password = $_REQUEST['password'];
        
        $data = $db->prepare("SELECT * FROM client WHERE email='$email' AND client_password='$password'");
        $data->execute();
        session_start();
        while($OutputData = $data->fetch(PDO::FETCH_ASSOC)){
            $_SESSION['userId'] = $OutputData['id'];
            $_SESSION['email'] = $OutputData['email'];
            $_SESSION['role'] = $OutputData['role'];
            $user = array (
                'userId' => $OutputData['id'], 
                'email' => $OutputData['email'],
                'first_name'  => $OutputData['first_name'],
                'last_name' => $OutputData['last_name'],
                'cell' => $OutputData['cell'],
                'adress' => $OutputData['adress'],
                'password' => $OutputData['client_password'],
                'iban' => $OutputData['iban'],
                'role' => $OutputData['role']
            );
            array_push($users,$user);
        };
        return json_encode(['employee' => $users]);
    } else {
        return 'invalid parameter';
    }
}
}

$API = new API;
header('Content-Type: application/json');
echo $API->Verfification();


?>