<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace app\controllers;
/**
 * Description of Main
 *
 * @author dboro
 */
class Main extends App{
    public function indexAction() {
//        $this->layout = false;
        $name = 'darma';
        $hi = 'hi';
        $this->set(compact('name', 'hi'));
        
    }
}
