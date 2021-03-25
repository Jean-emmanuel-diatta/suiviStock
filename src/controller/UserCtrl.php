<!-- controller/Usercontroller.php-->
<?php
include_once '../view/user/addUser.php';
require_once '../model/UserBd.php';
if(isset($_POST['btnAjout'])){
     $user = new UserCtrl();
     $user->setNom($nom);
     $user->setPrenom($prenom);
     $user->setEmail($email);
     $user->setPassword($password);
    
  $users =createUser($user);
    if($users){
      header('location:addUser');
    }else{
      header('location:index');
    }
}



class UserCtrl{
    //methode gestionnaire de vue
    public function viewManager(){
      $this->liste();
    }
    //afficher la liste des utilisateurs
    public function liste(){
      include_once '../view/user/listUser.php';
    }

}



?>