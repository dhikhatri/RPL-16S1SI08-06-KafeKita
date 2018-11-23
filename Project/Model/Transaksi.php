<?php
class Transaksi
 private $idtransaksi;
 private $idkasir;
 private $iddetail;

function setIdtransaksi($idtransaksi){
  $this->idtransaksi= $idtransaksi;
}

function getIdtransaksi(){
 return $this->idtransaksi;
}


?>