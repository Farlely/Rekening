<?php

abstract Class Rekening{

  private $Saldo;
  private $Rekeningnummer;


   abstract function afschrijven($Bedrag);
//abstract dwen je ze subclase over te nemen en  te progameren.


    function storten($Bedrag){
    $this->Saldo = $this->Saldo + $Bedrag;

  }
    function SetRekeningNummer(){
    $this->Rekeningnummer = $Rekeningnummer;
  }

   function getSaldo(){
     return $this->Saldo;
   }
}








?>
