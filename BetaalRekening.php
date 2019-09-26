<?php

include_once "Rekening.php";

class BetaalRekening extends Rekening {

  private $MinimaalSaldo = -200;

   //function __construct($Saldo) {
    // $this->Saldo = $Saldo;

  // }
 function afschrijven($Bedrag){
   if($this->SaldoCheck($Bedrag)){
     $this->Saldo = $this->Saldo - $Bedrag;
   }

 }
 function bijschrijven($Bedrag){
   if($this->isSaldoNaTransactie($Bedrag)){
     $this->Saldo = $this->saldo + $Bedrag;
   }
 }
 private function isSaldoNaTransactie($Bedrag){
   if($this->Saldo - $Bedrag > $this->MinimaalSaldo){
     return True;
   }
     return False;
 }
}
 ?>
