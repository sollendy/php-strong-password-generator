<?php 
function generaPassw($passwLength) {
    // $passwLength = $_GET['lengthInput'];
    $minuscole = "abcefghijklmnopqrstuvwxyz";
    $maiuscole = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $numeri = "1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $bimbiSpeciali = ",.!£$&/()?+-:;_#\|";
    $caratteri = $minuscole . $maiuscole . $numeri . $bimbiSpeciali;
    return substr(str_shuffle($caratteri), 0, $passwLength);

    // $passwordNata = "";
    // for($i = 0; $i < $_GET['lengthInput']; $i++) {
    //     $istantChar = $caratteri[rand(0, strlen($caratteri) - 1)];
    //     $passwordNata .= $istantChar;
    //  }
};
?>