<?php
class Debank {
  private $BankNummers = array ('NL02INBD29309304941',
                               'NL02INBD29309304942',
                               'NL02INBD29309304943',
                               'NL02INBD29309304944',
                               'NL02INBD29309304945',
                               'NL02INBD29309304946',
                               'NL02INBD29309304947',
                               'NL02INBD29309304948',
                               'NL02INBD29309304949',
                               'NL02INBD29309304950',
                               );
   public function MaakRekeningNummer() {

   return $this->BankNummers[0];

 }
 function checkIfRekeningExists($bankNummer) {

         $bankNummers[$i];
         while($bankNummer == $bankNummers[$i]) {
             $this->rekeningId = $i;
             return TRUE;

         }

         $i++;

         //return TRUE;
     }

}


?>
