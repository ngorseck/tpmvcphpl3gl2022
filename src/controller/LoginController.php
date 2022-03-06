<?php
// namespace src\controller;
use libs\system\Controller;
use src\model\UserDB;

class LoginController extends Controller
{
    private $userdao;
    public function __construct() {
        parent::__construct();
        $this->userdao = new UserDB();
    }
    /**
     * http://localhost:8081/projects/lpgl/tpmvc/tpORM/Login/index
     */
    public function index() {
        
        return $this->view->load("accueil");
    }
    /**
     * http://localhost:8081/projects/lpgl/tpmvc/tpORM/Login/logon
     */
    public function logon() {
        
        extract($_POST);
        $users = $this->userdao->getConnection($email, md5($password));
        if (count($users) != 0) 
        {
            $user = $users[0];
            return $this->index ();
        } else {
            return $this->login ();
        }
    }

    /**
     * http://localhost:8081/projects/lpgl/tpmvc/tpORM/Login/login
     */
    public function login () {

        return $this->view->load("login");
    }
    /**
     * http://localhost:8081/projects/lpgl/tpmvc/tpORM/Login/logout
     */
    public function logout() {

    }
}