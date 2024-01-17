<?php

class Model
{
    private $bd;

    private static $instance=null;

    private function __construct()
    {
        try {
            $this->bd = new PDO('mysql:host=localhost;dbname=gestion_librairie_mvc', 'root', '');
            $this->bd->query("SET NAMES 'utf8'");
            $this->bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } 
        catch (PDOException $e) 
        {
            die('<p>Echec connexion. Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
    }

    public static function get_model()
    {

        if(is_null(self::$instance))
        {
            self::$instance=new Model();
        }
        return self::$instance;
    }

// ----------------------------------PARTIE HOME--------------------------------------------//

    

// ----------------------------------PARTIE LIVRE--------------------------------------------//
    public function get_all_livres()
    {
        try {
            $requete = $this->bd->prepare('SELECT DISTINCT * FROM livres ORDER BY Titre_livre ASC');
            $requete->execute();
            
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }


    public function get_par_titre()
    {
        try {
            $requete = $this->bd->prepare('SELECT DISTINCT Titre_livre FROM livres ORDER BY Titre_livre ASC');
            $requete->execute();
            
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }


    public function get_par_auteur()
    {
        try {
            $requete = $this->bd->prepare('SELECT DISTINCT Nom_auteur, Prenom_auteur FROM livres ORDER BY Nom_auteur ASC');
            $requete->execute();
            
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }


    public function get_par_editeur()
    {
        try {
            $requete = $this->bd->prepare('SELECT DISTINCT Editeur FROM livres ORDER BY Editeur ASC');
            $requete->execute();
            
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }


// ----------------------------------PARTIE FOURNISSEUR--------------------------------------------//
    public function get_all_fournisseurs()
    {
        try {
            $requete = $this->bd->prepare('SELECT DISTINCT * FROM fournisseurs ORDER BY Raison_sociale ASC ');
            $requete->execute();
            
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }


    public function get_par_raison_sociale()
    {
        try {
            $requete = $this->bd->prepare('SELECT DISTINCT Raison_sociale FROM fournisseurs ORDER BY Raison_sociale ASC');
            $requete->execute();
            
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }


    public function get_par_localite()
    {
        try {
            $requete = $this->bd->prepare('SELECT DISTINCT Localite FROM fournisseurs ORDER BY Localite');
            $requete->execute();
            
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }


    public function get_par_pays()
    {
        try {
            $requete = $this->bd->prepare('SELECT DISTINCT Pays FROM fournisseurs');
            $requete->execute();
            
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }

// ----------------------------------PARTIE COMMANDES--------------------------------------------//
    public function get_all_commandes()
    {
        try {
            $requete = $this->bd->prepare('SELECT * FROM commandes INNER JOIN livres ON commandes.Id_Livre = livres.Id_Livre INNER JOIN fournisseurs ON fournisseurs.Id_fournisseur = livres.Id_Livre ORDER BY Titre_livre ASC');
            $requete->execute();
            
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }


    public function get_par_editeur_commandes()
    {
        try {
            // echo" je suis dans le get du modele";
            $requete = $this->bd->prepare('SELECT Editeur FROM commandes INNER JOIN livres ON commandes.Id_Livre = livres.Id_Livre ORDER BY Editeur ASC');
            $requete->execute();
            
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }


    public function get_par_fournisseur()
    {
        try {
            $requete = $this->bd->prepare('SELECT Raison_sociale FROM commandes INNER JOIN fournisseurs ON commandes.Id_fournisseur = fournisseurs.Id_fournisseur ORDER BY Raison_sociale ASC');
            $requete->execute();
            
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }


    public function get_par_date()
    {
        try {
            $requete = $this->bd->prepare('SELECT DISTINCT Date_achat FROM commandes');
            $requete->execute();
            
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }



}





