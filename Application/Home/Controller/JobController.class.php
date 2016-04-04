<?php
namespace Home\Controller;
use Think\Controller;
class JobController extends Controller {
    public function jobs(){
        $this->display();
    }
    public function details($pid=""){
        $this->display();
    }
    public function post(){
        $this->display();
    }
}