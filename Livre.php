<?php
class Livre{
        private $titre;
        private $nbPages;
        private $anneeParution;
        private $prix;
        private $auteur;
        //les constructs
        public function __construct(Auteur $auteur,$titre,$nbPages,$anneeParution,$prix){
            $this -> auteur =$auteur;
            $this -> titre = $titre;
            $this -> nbPages = $nbPages;
            $this -> anneeParution = $anneeParution;
            $this -> prix = $prix;
            $this-> auteur -> ajouterLivre($this);
        } 
        
        //setter et getter de titre
        public function setTitre($titre){
            $this->titre=$titre;
        }
        public function getTitre(){
            return $this->titre;
        }
        //setter et getter de nbPage
        public function setNbPage($nbPages){
            $this->nbPages=$nbPages;
        }
        public function getNbPage(){
            return $this->nbPages;   
        }
        //setter et getter de anneParution
        public function setAnneParution($anneeParution){
            $this->anneeParution=$anneeParution;
        }
        public function getAnneParution(){
            return $this->anneeParution;   
        }
        //setter et getter de prix
        public function setPrix($prix){
            $this-> prix = $prix;
        }
        public function getPrix(){
            return $this-> prix;   
        }
        //setter et getter de auteur
        public function setAuteur($auteur){
            $this->auteur = $auteur;
        }
        public function getAuteur(){
            return $this->auteur;   
        }
        public function __toString()
        {
            return '"'. $this-> titre .'" '.$this->nbPages.' pages  paru en '.$this -> anneeParution.' vendu pour '.$this -> prix.' euros ';
        }
    }