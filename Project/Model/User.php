<?php
class user {
	private $iduser;
	private $password;

	function setIduser($iduser) {
	  $this-> iduser= $iduser;
	}
	
	function getIduser() {
	return $this-> iduser;
	}

}