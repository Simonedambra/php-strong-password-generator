<?php

include __DIR__ . '/gen.php';




?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>password gen</title>
    <!-- boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- /boostrap -->
</head>

<body>
    <form action="index.php" method="GET">


        <div class="container-fluid d-flex bg-body-secondary pb-5 pt-5">
            <div class="container d-flex bg-primary pb-5 pt-5 justify-content-between align-items-center rounded-2">
                <div>
                    <h5>INSERISCI LA LUNGHEZZA DESIDERATA</h5>
                    <input name="passwordL" type="number" class=" mx-5 rounded-2">
                </div>
                <div class="container d-flex flex-column w-50 justify-content-center align-items-center bg-body-secondary p-5 rounded-3">
                    <h1>
                        PASSWORD GENERATA
                    </h1>
                    <H5>
                        <?php if ($_GET['passwordL']) : ?>
                            <?php gen($passarray, $passwordL) ?>
                        <?php else : ?>
                            NON HAI ANCORA SELEZIONATO ALCUNA LUNGHEZZA
                        <?php endif; ?>
                    </H5>
                </div>
                <div>
                    <button class="btn btn-light mx-5 rounded-2">genera password</button>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="1" name="lettere" <?php if ($_GET['lettere']) : ?> checked <?php endif; ?> id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            lettere
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="2" name="numeri" <?php if ($_GET['numeri']) : ?> checked <?php endif; ?> id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            numeri
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="3" name="caratteri" <?php if ($_GET['caratteri']) : ?> checked <?php endif; ?> id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            caratteri speciali
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="4" name="maiuscole" <?php if ($_GET['maiuscole']) : ?> checked <?php endif; ?> id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            lettere maiuscole
                        </label>
                    </div>
                </div>
            </div>


        </div>


    </form>
</body>

</html>