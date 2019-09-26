<?php
include_once "Debank.php";
include_once "BetaalRekening.php";

$Bedrag = $_POST["bedrag"];
$RekeningnummerAf = $_POST["RekeningnummerAf"];
$RekeningnummerBij = $_POST["RekeningnummerBij"];

$bank = new Bank();
if($bank->chekIfRekeningExists($RekeningnummerBij)){
  //hier weet ik dat rekeningbestaat
  if($bank->chekIfRekeningExists($RekeningnummerAf)){
// beide Rekeningnummer bestaan
    releaseBank();
    completeTransAction();

  }

}
releaseBank();

function completeTransAction() {

  $rekeningAf= new BetaalRekening();
  $rekeningBy=  new BetaalRekening();

  $rekeningAf->afschrijven($Bedrag);
  $rekeningBy->bijschrijven($Bedrag);


}
function releaseBank(){
  $bank = null;
}




 ?>
