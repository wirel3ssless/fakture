<?php
    class klijent{
        private $id, $ime, $adresa, $brojTelefona, $email, $idKorisnik;
        
        public function __toString(){
            return "ID: {$this->id}<br>Ime: {$this->ime}<br>Adresa: {$this->adresa}<br>Broj telefona: {$this->brojTelefona}<br>";
        }
        public function __construct($i = null, $a = null, $b = null, $e = null, $k = null){
            $this->ime = $i;
            $this->adresa = $a;
            $this->brojTelefona = $b;
            $this->email = $e;
            $this->idKorisnika = $k;
        }

        public function getId(){
            return $this->id;
        }
        public function getIme(){
            return $this->ime;
        }
        public function getAdresa(){
            return $this->adresa;
        }
        public function getBroj(){
            return $this->broj;
        }
        public function getEmail(){
            return $this->email;
        }
        public function getIdKor(){
            return $this->idKorisnik;
        }

        public function setIme($vrijednost){
            $this->ime = $vrijednost;
        }
        public function setAdresa($vrijednost){
            $this->adresa = $vrijednost;
        }
        public function setBroj($vrijednost){
            $this->broj = $vrijednost;
        }
        public function setEmail($vrijednost){
            $this->email = $vrijednost;
        }
    }
?>