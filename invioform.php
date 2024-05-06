<?php
$errors = array();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    
    if (empty($_POST['nome'])) {
        $errors[] = 'Il campo "Nome" è obbligatorio';
    } elseif (!preg_match('/^[a-zA-Z ]*$/', $_POST['nome'])) {
        $errors[] = 'Il campo "Nome" deve contenere solo lettere e spazi';
    }


    if (empty($_POST['cognome'])) {
        $errors[] = 'Il campo "Cognome" è obbligatorio';
    } elseif (!preg_match('/^[a-zA-Z ]*$/', $_POST['cognome'])) {
        $errors[] = 'Il campo "Cognome" deve contenere solo lettere e spazi';
    }


    if (empty($_POST['email'])) {
        $errors[] = 'Il campo "E-Mail" è obbligatorio';
    } elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Il campo "E-Mail" deve essere un indirizzo email valido';
    }

    if (!isset($_POST['trattamentodatipersonali'])) {
        $errors[] = 'Il campo "Trattamento dati personali" è obbligatorio';
    } elseif ($_POST['trattamentodatipersonali']!= 'si' && $_POST['trattamentodatipersonali']!= 'no') {
        $errors[] = 'Il campo "Trattamento dati personali" deve essere "si" o "no"';
    }

    if (empty($_POST['messaggio'])) {
        $errors[] = 'Il campo "Messaggio" è obbligatorio';
    } elseif (strlen($_POST['messaggio']) < 10) {
$errors[] = 'Il campo "Messaggio" deve contenere almeno 10 caratteri';
    }

   
    if (empty($errors)) {
        $data = array(
            'nome' => $_POST['nome'],
            'cognome' => $_POST['cognome'],
            'email' => $_POST['email'],
            'trattamentodatipersonali' => $_POST['trattamentodatipersonali'],
            'messaggio' => $_POST['messaggio']
        );

        $file = 'form_data.json';
        $json_data = json_encode($data, JSON_PRETTY_PRINT);

        if (file_put_contents($file, $json_data)) {
            header('Location: contatti.php?message=grazie per averci contattato!');
            exit;
        } else {
            $errors[] = 'Si è verificato un errore durante il salvataggio dei dati. Riprova più tardi.';
        }
    }

    if (!empty($errors)) {
        $error_message = urlencode(implode(',', $errors));
        $nome = urlencode($_POST['nome']);
        $cognome = urlencode($_POST['cognome']);
        $email = urlencode($_POST['email']);
        $trattamentodatipersonali = urlencode($_POST['trattamentodatipersonali']);
        $messaggio = urlencode($_POST['messaggio']);
        header('Location: contatti.php?error='. $error_message . '&nome='. $nome . '&cognome='. $cognome . '&email='. $email . '&trattamentodatipersonali='. $trattamentodatipersonali . '&messaggio='. $messaggio);
        exit;
    }
}