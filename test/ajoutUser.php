<?php
 require_once '../bootstrap.php';

$user = new User();
//$user->setId(1);
$user->setNom("jacob");
$entityManager->persist($user);
$entityManager->flush();


echo $user-getId();
?>