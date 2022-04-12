<?php
class Auteur{
        private $nom;
        private $prenom;
        private $dateDeNaissance;
        private $bibliographie;
        //les constructs
        public function __construct($nom,$prenom,$dateDeNaissance)
        {
            $this-> nom = $nom;
            $this-> prenom = $prenom;
            $this-> dateDeNaissance = $dateDeNaissance;
            $this-> bibliographie = [];
        }
        
        //setter et getter de nom
        public function setNom($nom){
            $this->nom = $nom;
        }
        public function getNom(){
            return $this->nom;
        }
        //setter et getter de $prenom
        public function setPrenom($prenom){
            $this->prenom =$prenom;
        } 
        public function getPrenom(){
            return $this->prenom;
        }
        //setter et getter de dateDeNaissance
        public function setDateDeNaissance($dateDeNaissance){
            $this->dateDeNaissance = $dateDeNaissance;
        }
        public function getDateDeNaissance(){
            return $this->dateDeNaissance;
        }
        //setter et getter de bibliographie
        public function setBibliographie($bibliographie){
            $this-> bibliographie = $bibliographie;
        }
        public function getBibliographie(){
            return $this -> bibliographie;
        }
        //methodes
        public function ajouterLivre(Livre $livre){
            $this-> bibliographie [] = $livre;
        }
        public function afficherLivre(){
            echo '<strong>Les livres de '.$this->nom.' '.$this-> prenom .' '. $this->calculAge().' ans</strong> : <br>';
            foreach ($this->bibliographie as $livre){
                echo $livre.'<br>';
            } 
        }
        public function calculAge(){
            $dateAujourdhui = new DateTime('now');
            $dateN = new DateTime($this->dateDeNaissance);
            $age = $dateN->diff($dateAujourdhui);
            return $age->format("%Y");
        }
        public function __toString()
        {
            return $this-> nom.' '.$this-> prenom.' '; 
        }
    }