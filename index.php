<?php
// Create or access a Session
session_set_cookie_params(0);
session_start();

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
        $email_from = "Sitio Web";
        $email_subject = "Consulta de ".$name;
        $email_body = "Nombre: $name.\n\n";
        $email_body .="Telefono: $phone \r\n".
        "Email: $email.\n".
        "Mensaje: $message.\n"; 
        $to = "consultas@royalq-mundial.com";
        $headers = "De: $email_from \r\n";
        $headers.= "Responder a: $email \r\n";
        //mail($to, $email_subject, $email_body, $headers);
        include "./view-thankYou.php";
        break;
    case 'template':
        include "./view-template.php";
        break;
    default:
        $user_royal_link = "TKWWB";
        $user_binance_link="https://accounts.binance.me/es/register?ref=RK8NAR90";
        $user_phone="34658995720";
        $user_instagram_link="https://www.instagram.com/btc_jero/";
        $user_telegram_link="https://t.me/Jeronimo16";
        $user_facebook_link="https://www.facebook.com/profile.php?id=100055793599170";
        $user_facebook_group_link="https://www.facebook.com/groups/1030584354450614/?ref=share";
        // register new admin

        // $cl_username="gaby1234";
        // $cl_password="Gabriel.3030";
        // $hashedPassword = password_hash($cl_password, PASSWORD_DEFAULT);
        // regClient($cl_username, $hashedPassword );

        // Get users list and check
        $_SESSION['status'] = "created";
        include './view-home.php';
        break;
}

?>