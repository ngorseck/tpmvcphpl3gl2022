<?php
require_once '../bootstrap.php';

$role=new Roles();
// $role->setId(1);
$role->setNom("Role_User");


$entityManager->persist($role);
$entityManager->flush();
echo $role->getId();



?>