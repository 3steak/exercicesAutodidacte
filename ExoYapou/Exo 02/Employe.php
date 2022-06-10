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

        $this->salaire = $salaire;
    }



    public function age()
    {
        $date = new DateTime('now', new DateTimeZone('Europe/Paris'));
        // public function diff() retourne la différence entre deux dates 
        $interval = $date->diff($this->dateNaissance);
        return $interval->y;
    }

    // le nombre d'années d'ancienneté de l'employé
    public function anciennete()
    {

        $date = new DateTime('now', new DateTimeZone('Europe/Paris'));
        $intervalAnciennete = $date->diff($this->dateEmbauche);
        //var_dump($intervalAnciennete->y);
        return $intervalAnciennete->y;
    }

    public function AugmentationDuSalaire()
    {
        // augmente le salaire selon l'ancienneté donc faire appel a Anciennete()
        // Si Anciennete() <5ans . setSalaire($this-Salaire +2%)
        if ($this->anciennete() < 5) {
            // 1.02 correspond a 1 ( le salaire de base) + 0.2 ( les 2%)
            $this->setSalaire($this->salaire * 1.02);
            echo 'Le salaire à été augmenté de 2%</br>';
        }

        // Si Anciennete() <10ans . +5%
        if ($this->anciennete() < 10) {
            $this->setSalaire($this->salaire * 1.05);
            echo 'Le salaire à été augmenté de 5%</br>';
        }
        // Si Anciennete() >10ans . +10%
        if ($this->anciennete() > 10) {
            $this->setSalaire($this->salaire * 1.10);
            echo 'Le salaire à été augmenté de 10%</br>';
        }
    }


    //Affiche les info de l'employé: 
    public function AfficherEmploye()
    {

        echo '- Matricule : [' . $this->matricule . ']</br>';
        echo '- Nom complet :[' . strtoupper($this->nom) . ' ' . ucfirst($this->prenom) . ']</br>';
        echo '- Age:[' . $this->age() . ' ans (vieux)]</br>';
        echo '- Ancienneté:[' . $this->anciennete() . ' ans]</br>';
        echo '- Salaire:[' . $this->salaire . ']</br>';
    }
}
