<?php
 require_once '../model/ProduitBd.php';

 if(isset($_POST['btnAdd'])){
     extract($_POST);
     if(ajoutProduit() == 1){
         
            
     }
 }

   ?>   