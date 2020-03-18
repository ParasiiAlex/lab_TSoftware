<?php
    session_start();
    
    $error = false;
    $errorText = "";
    
    $temperature = trim(htmlspecialchars($_POST['temperature']));
    $pulse = trim(htmlspecialchars($_POST['pulse']));
    $tension = trim(htmlspecialchars($_POST['tension']));
    $height = trim(htmlspecialchars($_POST['height']));
    $weight = trim(htmlspecialchars($_POST['weight']));
    $healthDescription = trim(htmlspecialchars($_POST['acuze']));
    $diagnostic = trim(htmlspecialchars($_POST['diagnostic']));
    $recommendation = trim(htmlspecialchars($_POST['recommendation']));
    
    if (!validateTemperature($temperature)) {
        $error = true;
        $errorText .= "Temperatură incorectă!<br>";
    }
    
    if (!validatePulse($pulse)) {
        $error = true;
        $errorText .= "Puls incorect!<br>";
    }
    
    if (!validateTension($tension)) {
        $error = true;
        $errorText .= "Tensiune incorectă!<br>";
    }
    
    if (!validateHeight($height)) {
        $error = true;
        $errorText .= "Înălțime incorectă!<br>";
    }
    
    if (!validateWeight($weight)) {
        $error = true;
        $errorText .= "Greutate incorectă!<br>";
    }
    
    if (!validateHealthDescription($healthDescription)) {
        $error = true;
        $errorText .= "Descrierea acuzelor invalidă!<br>";
    }
    
    if (!validateDiagnostic($diagnostic)) {
        $error = true;
        $errorText .= "Diagnostic invalid!<br>";
    }
    
    if (!validateRecommendation($recommendation)) {
        $error = true;
        $errorText .= "Descrierea recomandărilor invalidă!<br>";
    }
    
    if ($error){
        $_SESSION['error'] = $error;
        $_SESSION['errorText'] = $errorText;
        
        $_SESSION['temperature'] = $temperature;
        $_SESSION['pulse'] = $pulse;
        $_SESSION['tension'] = $tension;
        $_SESSION['height'] = $height;
        $_SESSION['weight'] = $weight;
        $_SESSION['acuze'] = $healthDescription;
        $_SESSION['diagnostic'] = $diagnostic;
        $_SESSION['recommendation'] = $recommendation;
        
        header('Location: http://localhost/lab_ts_3/fisa_consultatie/');
    } else {
        echo 'Formular Valid !';
        session_reset();
        session_destroy();
    }
    
    function validateTemperature($temperature)
    {
        if ($temperature < 32.00 || $temperature > 39.99) {
            return false;
        } else {
            return true;
        }
    }
    
    function validatePulse($pulse)
    {
        if ($pulse < 50 || $pulse > 200) {
            return false;
        } else {
            return true;
        }
    }
    
    function validateTension($tension)
    {
        if (preg_match('/^[0-9]{2,3}\/[0-9]{2,3}$/', $tension)) {
            return true;
        } else {
            return false;
        }
    }
    
    function validateHeight($height)
    {
        if ($height < 50 || $height > 300) {
            return false;
        } else {
            return true;
        }
    }
    
    function validateWeight($weight)
    {
        if ($weight < 10 || $weight > 300) {
            return false;
        } else {
            return true;
        }
    }
    
    function validateHealthDescription($text)
    {
        if (preg_match('/^[0-9a-zA-Z.,?!+\-%\/ ]{80,1000}$/', $text)) {
            return true;
        } else {
            return false;
        }
    }
    
    function validateDiagnostic($text)
    {
        if (preg_match('/^[0-9a-zA-Z.,?!+\-%\/ ]{20,1000}$/', $text)) {
            return true;
        } else {
            return false;
        }
    }
    
    function validateRecommendation($text)
    {
        if (preg_match('/^[0-9a-zA-Z.,?!+\-%\/ ]{100,1000}$/', $text)) {
            return true;
        } else {
            return false;
        }
    }