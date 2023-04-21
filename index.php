<?php
    include 'functions.php';
    //variabili
    
    
    //funzioni
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>generatore passw</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <div class="form-cnt w-75 m-auto text-center">
        <h1>form per password</h1>
    <form action="index.php" method="GET">
        <label for="number">Lunghezza password: </label>
        <input name="lengthInput" type="number" min="4" step="1">
        <input type="submit">
    </form>
    <?php  
    //il controllo sottostante serve a far sì che non vi sia un errore nella definizione dell'elemento lengthinput una volta tornati indietro 
    //dall'url dopo la manipolazione avvenuta da parte dell'utente
    if(isset($_GET['lengthInput'])) {
        echo generaPassw($_GET['lengthInput']);
        //in questo modo lengthinput sarà sempre settato
    }
    ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>