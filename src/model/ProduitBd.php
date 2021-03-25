<?php
    require_once 'Bd.php';

    function listProduit()
    {
        $req = "SELECT * FROM produit";
        $con=getConnexion();
        return $con->query($req)->fetchAll();
    }

    function supprimerProduit($id)
    {
        $req = "DELETE FROM produit WHERE id = $id";
        $con =getConnexion();
        return $con->exec($req);
    }

    function ajoutProduit($produit)
    {
        $req = "INSERT INTO produit VALUES (NULL,'".$produit->getId()."','".$produit->getNom()."','".$produit->getQte()."','".$produit->getId()."')";
        $con =getConnexion();
        return $con->exec($req);
    }
    function updateProduit()
    {
        $con =getConnexion();
        return $con->exec("UPDATE  produit SET ref= '".$produit->setRef()."', nom = '".$produit->setNom()."', qtStock = '".$produit->setQtStock()."'");
    }
