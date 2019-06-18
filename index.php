<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
</head>
<body>
    

<?php
function losujZPrzedzialu($min,$max){
    if ($max > $min ) {
        echo "Liczba wylosowana miedzy $min a $max to: ";
        echo mt_rand ($min,$max);
        echo "<br/>"; 
    }else{
        echo "Maksymalna liczba musi byc wieksza niz minimalna liczba";
    }
}
if(isset($_GET) && !empty($_GET)) {
    if($_GET['numberOfDraws'] <=50 ) {
        for($i =0; $i <= $_GET['numberOfDraws']; $i++) {
            losujZPrzedzialu($_GET['minNumber'], $_GET['maxNumber']);
        }
    }
} else {
    echo "Prosze wpisac liczby aby rozpoczac losowanie";
}
?>

<form method="GET">
    
    <input type="number" placeholder="min" name="minNumber" min='0' required>
    <input type="number" placeholder="max" name="maxNumber" min="0" required>
    <input type="number" placeholder="ilosc losowan" name="numberOfDraws" min="1"required>
    <button type="submit" class="btn btn-info">LOSUJ</button>


</form>



</body>
</html>