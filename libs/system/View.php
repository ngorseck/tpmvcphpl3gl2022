<?php
namespace libs\system;
// use libs\system\View;
class View
{
    public function __construct(){
        
    }
    public function load(){
        $num=func_num_args();
        $args=func_get_args();
        switch ($num) {
            case 1:
                $url = 'http://localhost:8081/projects/lpgl/tpmvc/tpORM/';
                $file="src/view/".$args[0].".php";
                
                if (file_exists($file)) {

                   require_once $file;
                }else {
                    die($file." n'existe pas comme vue");
                }
                break;
                case 2:
                    $file="src/view/".$args[0].".php";
                if (file_exists($file)) {
                    $data=$args[1];
                    $url = 'http://localhost:8081/projects/lpgl/tpmvc/tpORM/public/';
                   require_once $file;
                }else {
                    die($file." n'existe pas comme vue");
                }
                    break;
         
        }
    }
}



?>