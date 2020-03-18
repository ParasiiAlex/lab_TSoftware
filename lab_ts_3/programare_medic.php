<?php
    session_start();
?>

<html lang="ro">
<head>
    <title>Programare la medic</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="text-center h2">
        Programare la medicul de familie
        <hr style="border-top: 1px solid #a4aca9">
    </div>
    <div class="h4 text-danger" <?= isset($_SESSION['error']) && $_SESSION['error'] ? '' : 'hidden' ?>>
        <?= isset($_SESSION['errorText']) ? $_SESSION['errorText'] : ''?>
    </div>
    <form action="http://localhost/lab_ts_3/pm-action.php/" method="post">
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <label for="name" class="col-sm-4 h4">Nume:</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="name" name="name" value="<?= isset($_SESSION['name']) ? $_SESSION['name'] : ''?>" required maxlength="30">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <label for="surname" class="col-sm-4 h4">Prenume:</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="surname" name="surname" value="<?= isset($_SESSION['surname']) ? $_SESSION['surname'] : ''?>" required maxlength="40">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <label for="idnp" class="col-sm-4 h4">IDNP:</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="idnp" name="idnp" value="<?= isset($_SESSION['idnp']) ? $_SESSION['idnp'] : ''?>" required maxlength="13">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <label for="birthday" class="col-sm-4 h4">Data nașterii:</label>
                    <div class="col-sm-6">
                        <input type="date" class="form-control" id="birthday" name="birthday" value="<?= isset($_SESSION['birthday']) ? $_SESSION['birthday'] : ''?>" required>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <label for="phone" class="col-sm-4 h4">Telefon:</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="phone" name="phone" value="<?= isset($_SESSION['phone']) ? $_SESSION['phone'] : ''?>" required maxlength="15">
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-md-8">
                <div class="row">
                    <label for="datetime" class="col-sm-4 h4">Data și ora programării:</label>
                    <div class="col-sm-6">
                        <input type="datetime-local" class="form-control" id="datetime" value="<?= isset($_SESSION['datetime']) ? $_SESSION['datetime'] : ''?>" name="datetime" required>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 text-center mt-4">
            <input type="submit" class="btn btn-secondary" style="width: 15em" value="Salvează cererea">
        </div>
    </form>
</div>
</body>
</html>
