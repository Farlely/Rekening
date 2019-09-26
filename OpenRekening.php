<?php

include_once "DeBank.php";
include_once "BetaalRekening.php";

$Bedrag = $_POST["bedrag"];
$bank = new DeBank();
$Rekeningnummer = $bank->MaakRekeningNummer();
$BetaalRekening = new BetaalRekening();
$BetaalRekening->storten($Bedrag);
$BetaalRekening->SetRekeningNummer($Rekeningnummer);



echo " U rekening Rekening is geopent, met Rekeningnummer:".$Rekeningnummer.".Het saldo is: &euro;".$BetaalRekening->getSaldo().".";
?>
