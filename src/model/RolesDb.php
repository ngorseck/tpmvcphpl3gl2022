<?php
namespace src\model;
use libs\system\Model;

class RolesDb extends Model
{
    public function __construct()
    {
        parent::__construct();
        //echo "ok";
    }
  
    public function findAll(){
      
      //return ["donnees"=>"LPGL"]; 
      return $this->entityManager->createQuery("SELECT r FROM Roles r")->getResult();
        
    }
}




?>