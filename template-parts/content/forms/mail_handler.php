<?php 

//Check if the form is submitted

if($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST)){
    //Get the form data and sanitize input to prevent sql injections

    $name = htmlspecialchars($_POST['ZskybzVFS0URmbB']);
    $email = htmlspecialchars($_POST['qOFZCTDNngaA2yS']);
    $message = htmlspecialchars($_POST['edo4v5JxORhhsev']);

    //Validate data

    if(empty($name) || empty($email) || empty($message)){
        echo "
            <div class='error error-empty'>
                <span>Bitte füllen sie die Felder korrekt aus.</span>
            </div>
        ";

        exit;
    }

    //Prepare email

    $to = "manuel.urak88@gmail.com";
    $subject = "Kontaktanfrage";
    $body = "Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "Message:\n$message";

    //Send email

    if(mail($to, $subject, $body)){
        echo "
            <div class='success'>
                <span>Ihre Nachricht wurde erfolgreich gesendet.</span>
            </div>
        ";
    }else{
        echo "
            <div class='error error-send'>
                <span>Ihre Nachricht konnte nicht gesendet werden...</span>
            </div>
        ";
    }
}else{
    echo "
        <div class='error error-server'>
            <span>Serverfehler...</span>
        </div>
    ";
}

?>