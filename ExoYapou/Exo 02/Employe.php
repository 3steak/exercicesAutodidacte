<?php
class Employe
{
    private $matricule;
    private $nom;
    private $prenom;
    private $dateNaissance;
    private $dateEmbauche;
    private $salaire;

    public function __construct($matricule, $nom, $prenom, $dateNaissance, $dateEmbauche, $salaire)
    {

        $this->setMatricule($matricule);
        $this->setNom($nom);
        $this->setPrenom($prenom);
        $this->setDateNaissance($dateNaissance);
        $this->setDateEmbauche($dateEmbauche);
        $this->setSalaire($salaire);
    }
    // mettre en place les accesseurs (Getter setter)
    public function getMatricule()
    {
        return $this->matricule;
    }
    public function setMatricule($matricule)
    {
        $this->matricule = $matricule;
    }

    public function getNom()
    {
        return $this->nom;
    }
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }
    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;
    }

    public function getDateEmbauche()
    {
        return $this->dateEmbauche;
    }
    public function setDateEmbauche($dateEmbauche)
    {
        $this->dateEmbauche = $dateEmbauche;
    }

    public function getSalaire()
    {
        return $this->salaire;
    }
    public function setSalaire($salaire)
    {
        // si mon salaire est > a 1500 
        $this->salaire = $salaire;
    }



    public function age()
    {
        $date = new DateTime('now', new DateTimeZone('Europe/Paris'));
        // public function diff() retourne la différence entre deux dates 
        $interval = $date->diff($this->dateNaissance);
        var_dump($interval->y);
        return $interval->y;
    }

    // le nombre d'années d'ancienneté de l'employé
    public function anciennete()
    {
        $date = new DateTime('now', new DateTimeZone('Europe/Paris'));
        $intervalAnciennete = $date->diff($this->dateEmbauche);
        var_dump($intervalAnciennete->y);
        return $intervalAnciennete->y;
    }
    /*
public function AugmentationDuSalaire(){
// augmente le salaire selon l'ancienneté donc faire appel a Anciennete()
// Si Anciennete() <5ans . +2%
// Si Anciennete() <10ans . +5%
// Si Anciennete() >10ans . +10%
}

public function AfficherEmploye(){
 Affiche les info de l'employé: 
- Matricule:[..]
-Nom Complet : [NOM Prenom] ( Le nom en MAJ et Prenom en ucfirst() )

*/
}
