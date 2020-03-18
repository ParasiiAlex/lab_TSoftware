<?php
    session_start();
    
    $error = false;
    $errorText = "";
    
    $name = trim(htmlspecialchars($_POST['name']));
    $surname = trim(htmlspecialchars($_POST['surname']));
    $idnp = trim(htmlspecialchars($_POST['idnp']));
    $birthday = trim(htmlspecialchars($_POST['birthday']));
    $phone = trim(htmlspecialchars($_POST['phone']));
    $datetime = trim(htmlspecialchars($_POST['datetime']));
    
    if (!validateName($name)) {
        $error = true;
        $errorText .= "Nume invalid!<br>";
    }
    
    if (!validateSurname($surname)) {
        $error = true;
        $errorText .= "Prenume invalid!<br>";
    }
    
    if (!validateIDNP($idnp)) {
        $error = true;
        $errorText .= "IDNP invalid!<br>";
    }
    
    if (!validateBirthday($birthday)) {
        $error = true;
        $errorText .= "Data nașterii invalidă!<br>";
    }
    
    if (!validatePhone($phone)) {
        $error = true;
        $errorText .= "Număr de telefon invalid!<br>";
    }
    
    if (!validateDatetime($datetime)) {
        $error = true;
        $errorText .= "Data/ora programare invalidă!<br>";
    }
    
    if ($error){
        $_SESSION['error'] = $error;
        $_SESSION['errorText'] = $errorText;
        
        $_SESSION['name'] = $name;
        $_SESSION['surname'] = $surname;
        $_SESSION['idnp'] = $idnp;
        $_SESSION['birthday'] = $birthday;
        $_SESSION['phone'] = $phone;
        $_SESSION['datetime'] = $datetime;
        
        header('Location: http://localhost/lab_ts_3/programare_medic/');
    } else {
        echo 'Formular Valid !';
        session_reset();
        session_destroy();
    }
    
    function validateName($name)
    {
        if (preg_match('/^[a-zA-Z]{2,30}$/', $name)) {
            return true;
        } else {
            return false;
        }
    }
    
    function validateSurname($surname)
    {
        if (preg_match('/^[a-zA-Z]{2,40}$/', $surname)) {
            return true;
        } else {
            return false;
        }
    }
    
    function validateIDNP($idnp)
    {
        if (preg_match('/^[0-9]{13}$/', $idnp)) {
            return true;
        } else {
            return false;
        }
    }
    
    function validateBirthday($birthday)
    {
        if (preg_match('/^[0-9]{4}-[0-9]{2}-[0-9]{2}$/', $birthday)) {
            return true;
        } else {
            return false;
        }
    }
    
    function validatePhone($phone)
    {
        if (preg_match('/^[0-9\-]{9,15}$/', $phone)) {
            return true;
        } else {
            return false;
        }
    }
    
    function validateDatetime($datetime)
    {
        if (preg_match('/^[0-9]{4}-[0-9]{2}-[0-9]{2}T[0-2][0-9]:[0-5][0-9]$/', $datetime)) {
            return true;
        } else {
            return false;
        }
    }