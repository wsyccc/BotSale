<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Siyuan
 * Date: 2017/2/10
 * Time: 0:34
 */
class Part extends Application {

    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->model('parts');
        $this->data['pagebody'] = 'Part/homepage';
        $source = $this->parts->all();
        $this->data['parts'] = $source;
        $this->render();
    }

    public function detail($id) {
        $this->data['pagebody'] = 'Part/justone';
        $record = $this->parts->get($id);

        $this->data = array_merge($this->data, $record);
        $this->render();
    }
}