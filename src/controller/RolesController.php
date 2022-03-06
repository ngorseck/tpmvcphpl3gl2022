<?php
// namespace src\controller;
use libs\system\Controller;
use src\model\RolesDb;

class RolesController extends Controller
{
   //Roles/add
   public function add(){
      $roles_dao=new RolesDb();
      $data = $roles_dao->findAll();
      //print_r($data);
      foreach($data as $roles)
      {
         echo $roles->getId() . "   " . $roles->getNom() . "<br/>";
      }
      return $this->view->load("roles/ajout");
       
   }
   /**
    * http://localhost:8081/projects/lpgl/tpmvc/tpORM/Roles/edit/12
    */
   public function edit($id) {

      echo $id;
   }
  
}




?>