<?php

/*require "Personne.Class.php";
require "famille.Class.php";
require "voiture.Class.php";
*/

function ChargerClasse($classe)
{
    require $classe.".Class.php";
}
spl_autoload_register("ChargerClasse");

class XXX
{

    /*****************Attributs***************** */
    private $_xxx;

    /*****************Accesseurs***************** */

    
    /*****************Constructeur***************** */

    public function __construct(array $options = [])
    {
        if (!empty($options)) // empty : renvoi vrai si le tableau est vide
        {
            $this->hydrate($options);
        }
    }
    public function hydrate($data)
    {
        foreach ($data as $key => $value)
        {
            $methode = "set" . ucfirst($key); //ucfirst met la 1ere lettre en majuscule
            if (is_callable(([$this, $methode]))) // is_callable verifie que la methode existe
            {
                $this->$methode($value);
            }
        }
    }

    /*****************Autres Méthodes***************** */
    
    /**
     * Transforme l'objet en chaine de caractères
     *
     * @return String
     */
    public function toString()
    {
        return "";
    }

    /**
     * Renvoi vrai si l'objet en paramètre est égal à l'objet appelant
     *
     * @param [type] obj
     * @return bool
     */
    public function equalsTo($obj)
    {
        return true;
    }
    /**
     * Compare 2 objets
     * Renvoi 1 si le 1er est >
     *        0 si ils sont égaux
     *        -1 si le 1er est <
     *
     * @param [type] obj1
     * @param [type] obj2
     * @return void
     */
    public static function compareTo($obj1, $obj2)
    {
        return 0;
    }
}


$pere = new Personne (["nom"=>"Dupont","prenom"=>"Toto","age"=>35,"genre"=>"H"]);
$mere = new Personne (["nom"=>"Dupont","prenom"=>"Tata","age"=>30,"genre"=>"F"]);
$voit = new Voiture (["marque"=>"Renault","modele"=>"Clio","immat"=>"DD888DD","km"=>26000]);
$famille= new Famille (["pere"=>$pere,"mere"=>$mere,"voiture"=>$voit]);
//var_dump ($famille);
echo $famille->toString();

