<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Home\Controller;

/**
 * Description of IndexController
 *
 * @author Administrator
 */

class TestController extends HomeController{

    public function index(){
       $this->display();
    }
    
    public function test1() {
        $this->display();
    }
}
