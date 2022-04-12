<?php
declare(strict_types=1);
interface ArticleInterface{
//Propriété
    public function getTitre(): string;
    public function setTitre(string $titre): self ;
    public function getDateDePublication(): string;
    public function setDateDePublication(string $dateDePublication): self ;
    public function getDateDeModification(): string;
    public function setDateDeModification(string $dateDeModification): self;
    public function getAuteur(): string;
    public function setAuteur(string $auteur): self;
    public function getStatus(): string;
    public function setStatus(int $status): self;
    public function getPartages(): int;
    public function setPartages(int $partages): self;
    public static function getCount(): int;
    public static function setCount(): void;
}
