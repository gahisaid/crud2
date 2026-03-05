<?php
// On définit le modèle qui représente des étudiants
class Etudiant
{
    // Attributs encapsuler

    private int $cef;
    private string $nom;
    private string $prenom;
    private int $age;
    private float $moyenne;
    private bool $status;

    public static int $compteur=0; // compte le nombre des étudiants
    // Constructeurs qui permet de construire des objets étudiants et l'initialiser

public function __construct(int $cef, string $nom, string $prenom, int $age,float $moyenne)
{
    $this->cef = $cef;
    $this->nom = $nom;
    $this->prenom = $prenom;
    $this->age = $age;
    $this->moyenne = $moyenne;
    $this->status = true; // lors de la création d'un objet étudiant la valeur par défaut est true
    //echo "l 'étudiant à été crée avaec succès";
    Etudiant::$compteur++;
}

    // Getters et Setters

    public function __get($propriete)
    {
        if($propriete!="status")
            {
        return $this->$propriete;

            }
    }

    public function __set($propriete,$value)
    {
        if($propriete!='age')
            {
                 $this->$propriete = $value;

            }
            else
                {
                    echo "l'age est en lecteure seule";
                }
    }
    // Méthodes : fonction qui permet de manipuler les données d'un objet

    // créer une méthode qui afficher la décision  d'un étudiant
    public function statusEtudiant():string
    {
         return $this->moyenne>=10?"Admis":"Redoublant";
    }

    public function mention():string
    {
        if($this->moyenne<10)
            {
                return "Faible";
            }
            else if ($this->moyenne<12)
                {     
                    return "Passable";
                   }
                   else if ($this->moyenne<14)
                    {
                        return "A. BIEN";
                    }
                    else if ($this->moyenne< 16)
                        {
                            return "Bien";
                        }
                        else
                            {
                                return "T.BIEN";
                            }
    }

}
