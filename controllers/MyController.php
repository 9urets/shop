<?php
namespace app\controllers;

class MyController extends AppController{
    public function actionIndex($id=null){
        $hi = "Hello World";
        $names = ['Ivanov', 'Petrov', 'Sidarov'];
      //  return $this->render("index", ['hello'=>$hi, "names"=>$names]);
        if(!$id) $id='test';

        return $this->render("index", compact('hi','names','id'));
    }
}
/*
$this->load->database();

$this->db->select('login, pass');
$this->db->where('id', 1);
//$this->db->get_where('table', [);
$this->db->order_by('login', "ASC");
$this->db->limite(10);
echo '<pre>';
$query = $this->db->het('users');
foreach ($query->result() as $row) {
    print_r($row);
}
*/