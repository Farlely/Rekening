<?php
include_once: "Rekening.php";

class spaarRekening extends Rekening {

   private $MaximumSaldo = 1000000;

   function opnemen($Bedrag){
     if($this->Saldo = $this-> + $Bedrag > 0){
        $this->Saldo = $this->Saldo - $Bedrag;
     }
   }

}
?>
