<?php
    namespace App\Models;
    class Proizvod{
        private $id;
        private $naziv;
        private $cijena;
        private $jedinica_mjere;
        private $status;

        public function __construct($i, $n, $c, $jm, $s){
            $this->id = $i;
            $this->naziv = $n;
            $this->cijena = $c;
            $this->jedinica_mjere = $jm;
            $this->status = $s;
        }

        public function getId(){return $this->id;}
        public function getNaziv(){return $this->naziv;}
        public function getCijena(){return $this->cijena;}
        public function getJedinicaMjere(){return $this->jedinica_mjere;}
        public function getStatus(){return $this->status;}

        public function setId($value){$this->id = $value;}
        public function setNaziv($value){$this->naziv = $value;}
        public function setCijena($value){$this->cijena = $value;}
        public function setJedinicaMjere($value){$this->jedinica_mjere = $value;}
        public function setStatus($value){$this->status = $value;}
    }

?>