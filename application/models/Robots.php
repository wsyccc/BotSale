<?php
/**
 * Created by PhpStorm.
 * User: Siyuan
 * Date: 2017/2/10
 * Time: 0:15
 */
class Robots extends CI_Model{
    public function __construct()
    {
        parent::__construct();

        $this->data = array(
            array('id' => '1', 'topPardId' => 'a', 'torsoPartId' => 'a', 'bottomPartId' => 'a',
                'type' => 'household', 'image' => 'a.jpg', 'cost' => 25),
            array('id' => '2', 'topPardId' => 'b', 'torsoPartId' => 'b', 'bottomPartId' => 'b',
                'type' => 'household', 'image' => 'b.jpg', 'cost' => 25),
            array('id' => '3', 'topPardId' => 'c', 'torsoPartId' => 'c', 'bottomPartId' => 'c',
                'type' => 'household' , 'image' => 'c.jpg', 'cost' => 25),
            array('id' => '4', 'topPardId' => 'm', 'torsoPartId' => 'm', 'bottomPartId' => 'm',
                'type' => 'butler', 'image' => 'm.jpg', 'cost' => 50),
            array('id' => '5', 'topPardId' => 'r', 'torsoPartId' => 'r', 'bottomPartId' => 'r',
                'type' => 'butler', 'image' => 'r.jpg', 'cost' => 50),
            array('id' => '6', 'topPardId' => 'w', 'torsoPartId' => 'w', 'bottomPartId' => 'w',
                'type' => 'companion', 'image' => 'w.jpg', 'cost' => 100)
        );
    }

    public function all()
    {
        return $this->data;
    }
}