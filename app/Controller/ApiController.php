<?php
namespace Controller;

use \W\Controller\Controller;

class ApiController extends Controller
{
    public function liste(){
        $m = new \Manager\MiniURLManager();
        $liste = $m->findAll();
        // echo json_encode($liste);
        $this->showJson($liste);
    }
}