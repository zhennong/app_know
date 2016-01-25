<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Home\Controller;

/**
 * Description of InterfaceController
 *
 * @author wodrow
 */
class InterfaceController extends HomeController{
    public function test1 () {
        echo $_GET['jsoncallback']."(".json_encode(['name'=>'test']).")";
    }
    
    public function tets2 () {
        $arr = array(
            "user" => 'user',
            "pass" => 'pass',
            "name" => 'response'

        );
        $x = $_GET['jsoncallback'] . "(".json_encode($arr).")";
        echo $x;
    }
}
