<?php
/**
 * Created by PhpStorm.
 * User: Siyuan
 * Date: 2017/2/10
 * Time: 0:06
 */
class Parts extends CI_Model{

    public function __construct()
    {
        parent::__construct();
        $this->data = array(
            array('partID' => '1', 'partCode' => 'A1', 'image' => 'a1.jpeg', 'CACode' => md5(uniqid()),
                'plant' => 'Mercury', 'dateTime'=> '2016-06-18', 'cost'=>8),
            array('partID' => '2', 'partCode' => 'A2', 'image' => 'a2.jpeg', 'CACode' => md5(uniqid()),
                'plant' => 'Venus', 'dateTime'=> '2016-06-19','cost'=>8),
            array('partID' => '3', 'partCode' => 'A3', 'image' => 'a3.jpeg', 'CACode' => md5(uniqid()),
                'plant' => 'Earth','dateTime'=> '2016-06-20','cost'=>9),

            array('partID' => '4', 'partCode' => 'B1', 'image' => 'b1.jpeg', 'CACode' => md5(uniqid()),
                'plant' => 'Mercury','dateTime'=> '2016-06-21','cost'=>8),
            array('partID' => '5', 'partCode' => 'B2', 'image' => 'b2.jpeg', 'CACode' => md5(uniqid()),
                'plant' => 'Venus','dateTime'=> '2016-06-22','cost'=>8),
            array('partID' => '6', 'partCode' => 'B3', 'image' => 'b3.jpeg', 'CACode' => md5(uniqid()),
                'plant' => 'Earth','dateTime'=> '2016-06-23','cost'=>9),

            array('partID' => '7', 'partCode' => 'C1', 'image' => 'c1.jpeg', 'CACode' => md5(uniqid()),
                'plant' => 'Mercury','dateTime'=> '2016-06-24','cost'=>8),
            array('partID' => '8', 'partCode' => 'C2', 'image' => 'c2.jpeg', 'CACode' => md5(uniqid()),
                'plant' => 'Venus', 'dateTime'=> '2016-06-25', 'cost'=>8),
            array('partID' => '9', 'partCode' => 'C3', 'image' => 'c3.jpeg', 'CACode' => md5(uniqid()),
                'plant' => 'Earth','dateTime'=> '2016-06-26','cost'=>9),

            array('partID' => '10', 'partCode' => 'M1', 'image' => 'm1.jpeg', 'CACode' => md5(uniqid()),
                'plant' => 'Mercury','dateTime'=> '2016-06-24','cost'=>15),
            array('partID' => '11', 'partCode' => 'M2', 'image' => 'm2.jpeg', 'CACode' => md5(uniqid()),
                'plant' => 'Venus', 'dateTime'=> '2016-06-25', 'cost'=>15),
            array('partID' => '12', 'partCode' => 'M3', 'image' => 'm3.jpeg', 'CACode' => md5(uniqid()),
                'plant' => 'Earth','dateTime'=> '2016-06-26','cost'=>20),

            array('partID' => '13', 'partCode' => 'R1', 'image' => 'r1.jpeg', 'CACode' => md5(uniqid()),
                'plant' => 'Mercury','dateTime'=> '2016-06-24','cost'=>15),
            array('partID' => '14', 'partCode' => 'R2', 'image' => 'r2.jpeg', 'CACode' => md5(uniqid()),
                'plant' => 'Venus', 'dateTime'=> '2016-06-25', 'cost'=>15),
            array('partID' => '15', 'partCode' => 'R3', 'image' => 'r3.jpeg', 'CACode' => md5(uniqid()),
                'plant' => 'Earth','dateTime'=> '2016-06-26','cost'=>20),

            array('partID' => '16', 'partCode' => 'W1', 'image' => 'w1.jpeg', 'CACode' => md5(uniqid()),
                'plant' => 'Mercury','dateTime'=> '2016-06-24','cost'=>33),
            array('partID' => '17', 'partCode' => 'W2', 'image' => 'w2.jpeg', 'CACode' => md5(uniqid()),
                'plant' => 'Venus', 'dateTime'=> '2016-06-25', 'cost'=>33),
            array('partID' => '18', 'partCode' => 'W3', 'image' => 'w3.jpeg', 'CACode' => md5(uniqid()),
                'plant' => 'Earth','dateTime'=> '2016-06-26','cost'=>34)
        );
    }

    public function get($which){
        foreach ($this->data as $record)
            if ($record['partID'] == $which)
                return $record;
        return null;
    }

    public function all()
    {
        return $this->data;
    }
}