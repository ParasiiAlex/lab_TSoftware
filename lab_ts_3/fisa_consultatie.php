<?php
    session_start();
?>

<html lang="ro">
<head>
    <title>Fișa Consultație</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="text-center h2">
        Fișa consultației
        <hr style="border-top: 1px solid #a4aca9">
    </div>
    <div class="h4 text-danger" <?= isset($_SESSION['error']) && $_SESSION['error'] ? '' : 'hidden' ?>>
        <?= isset($_SESSION['errorText']) ? $_SESSION['errorText'] : ''?>
    </div>
    <form action="http://localhost/lab_ts_3/fc-action.php/" method="post">
        <div class="h3">Detalii Pacient:</div>
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <label for="temperature" class="col-sm-3 h4">Temperatura:</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="temperature" name="temperature" placeholder="Grade Celsius" value="<?= isset($_SESSION['temperature']) ? $_SESSION['temperature'] : ''?>" required maxlength="5">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <label for="pulse" class="col-sm-3 h4">Pulsul:</label>
                    <div class="col-sm-6">
                        <input type="number" class="form-control" id="pulse" name="pulse" placeholder="Bătăi pe secundă" value="<?= isset($_SESSION['pulse']) ? $_SESSION['pulse'] : ''?>" required maxlength="3">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <label for="tension" class="col-sm-3 h4">Tensiunea:</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="tension" name="tension" placeholder="Sistolică (mmHg) / Diastolică (mmHg)" value="<?= isset($_SESSION['tension']) ? $_SESSION['tension'] : ''?>" required maxlength="7">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <label for="height" class="col-sm-3 h4">Înălțime:</label>
                    <div class="col-sm-6">
                        <input type="number" class="form-control" id="height" name="height" placeholder="Centimetri" value="<?= isset($_SESSION['height']) ? $_SESSION['height'] : ''?>" required maxlength="3">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <label for="weight" class="col-sm-3 h4">Greutatea:</label>
                    <div class="col-sm-6">
                        <input type="number" class="form-control" id="weight" name="weight" placeholder="Kilograme" value="<?= isset($_SESSION['weight']) ? $_SESSION['weight'] : ''?>" required maxlength="3">
                    </div>
                </div>
            </div>
        </div>
        <label for="acuze" class="h3">Acuze:</label>
        <div>
            <textarea id="acuze" name="acuze" class="form-control" style="max-width: 100%; min-width: 100%; max-height: 200px;
                    min-height: 50px" placeholder="Introduceți minim 80 caractere." required minlength="80"><?= isset($_SESSION['acuze']) ? $_SESSION['acuze'] : ''?></textarea>
        </div>
        <label for="diagnostic" class="h3">Diagnostic:</label>
        <div>
            <textarea id="diagnostic" name="diagnostic" class="form-control" style="max-width: 100%; min-width: 100%; max-height: 100px;
                    min-height: 50px" placeholder="Introduceți minim 20 caractere." required minlength="20"><?= isset($_SESSION['diagnostic']) ? $_SESSION['diagnostic'] : ''?></textarea>
        </div>
        <label for="recommendation" class="h3">Recomandari:</label>
        <div>
            <textarea id="recommendation" name="recommendation" class="form-control" style="max-width: 100%; min-width: 100%; max-height: 200px;
                    min-height: 50px" placeholder="Introduceți minim 100 caractere." required minlength="100"><?= isset($_SESSION['recommendation']) ? $_SESSION['recommendation'] : ''?></textarea>
        </div>
        <div class="text-center mt-4">
            <input type="submit" class="btn btn-secondary" style="width: 15em" value="Salvează">
        </div>
    </form>
</div>
</body>
</html>
