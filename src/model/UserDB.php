<?php
namespace src\model;
use libs\system\Model;

class UserDB extends Model
{
    public function __construct()
    {
        parent::__construct();
    }
  
    public function getConnection($email, $password){
      
      return $this->entityManager
                    ->createQuery("SELECT u FROM User u WHERE u.email = :em
                                    AND u.password = :pass")
                    ->setParameter('em', $email)
                    ->setParameter('pass', $password)
                    ->getResult(); //array(Object)
        
    }
}