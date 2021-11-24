<?php
// Create or access a Session
session_start();


require_once './connection.php';
require_once './model.php';


$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
}

switch ($action) {

    // Client control 
    case 'contact':
        $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
        $phone = filter_input(INPUT_POST, "phone", FILTER_SANITIZE_STRING);
        $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);
        $selected_email = filter_input(INPUT_POST, 'selected_email', FILTER_SANITIZE_STRING);
        $email_from = "Sitio Web";
        $email_subject = "Consulta de ".$name;
        $email_body = "Nombre: $name.\n\n";
        $email_body .="Telefono: $phone \r\n".
        "Email: $email.\n".
        "Mensaje: $message.\n"; 
        $to = "consultas@royalq-mundial.com";
        $headers = "De: $email_from \r\n";
        $headers.= "Responder a: $email \r\n";
        mail($to, $email_subject, $email_body, $headers);
        include "./view-thankYou.php";
        break;
    case 'template':
        include "./view-template.php";
        break;
    default:
        // register new admin

        // $cl_username="gaby1234";
        // $cl_password="Gabriel.3030";
        // $hashedPassword = password_hash($cl_password, PASSWORD_DEFAULT);
        // regClient($cl_username, $hashedPassword );
        
        // Get users list and check

        
        include './view-home.php';
        break;
}

?>