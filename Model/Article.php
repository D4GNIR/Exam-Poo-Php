<?php
declare(strict_types=1);
require('ArticleInterface.php');
final class Article implements ArticleInterface{
     //Propiétes
     private string $titre;
     private string $dateDePublication;
     private string $dateDeModification;
     private string $auteur;
     private int $status;
     private int $partages;
     private static int $count = 0;


     // Assignateur titre
    public function getTitre(): string {
         return $this->titre;
     }
     // Mutateur titre
    public function setTitre(string $titre): self {
          $this->titre = $titre; return $this; 
     }
    
     // Assignateur date De Publication
     public function getDateDePublication(): string {
     return $this->dateDePublication;
     }
     // Mutateur date De Publication
     public function setDateDePublication(string $dateDePublication): self {
          $this->dateDePublication = $dateDePublication; return $this; 
     }
    
     // Assignateur date De Modification
     public function getDateDeModification(): string {
          return $this->dateDeModification;
          }
     // Mutateur date De Modification
     public function setDateDeModification(string $dateDeModification): self {
          $this->dateDeModification = $dateDeModification; return $this; 
          }

     // Assignateur auteur
     public function getAuteur(): string {
          return $this->auteur;
          }
     // Mutateur auteur
     public function setAuteur(string $auteur): self {
          $this->auteur = $auteur; return $this; 
          }

     // Assignateur status
     public function getStatus(): string {
          if ($this->status == 0) {
               return 'Article Inactif';         
          }else {
          self::setCount();
          return 'Article Actif';
          }
          
          }
     // Mutateur status
     public function setStatus(int $status): self {
          // if (self::validateStatus($status)) {
               $this->status = $status; return $this; 
               }   
          // }

         // Méthode statique pour valider le password
    public static function validateStatus(int $status):bool{
          if ($status < 1) {
               return False;        
          } 
          return TRUE;
          }
     
     // Assignateur partages
     public function getPartages(): int {
          return $this->partages;
           }
          
     // Mutateur partages
     public function setPartages(int $partages): self {
          $this->partages = $partages; return $this; 
          }
     
     public static function getCount(): int { 
          return self::$count;
     }
     public static function setCount(): void {
          self::$count++;
          }

// Constructeur
    public function __construct(string $titre,string $dateDePublication,string $dateDeModification,string $auteur,int $status,int $partages){
     $this-> setTitre($titre);
     $this-> setDateDePublication($dateDePublication);
     $this-> setDateDeModification($dateDeModification);
     $this-> setAuteur($auteur);
     $this-> setStatus($status);
     $this-> setPartages($partages);
 }



}



