<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Siyuan
 * Date: 2017/2/10
 * Time: 0:36
 */
class Robot extends Application {

    function __construct()
    {
        parent::__construct();
    }
    // Presents all the robots we have in a grid view
    function Index() {
        // show the robots
        $this->data['pagebody'] = 'Robot/homepage';
        $source = $this->robots->all();
        $this->data['robots'] = $source;
        $this->render();
    }
}