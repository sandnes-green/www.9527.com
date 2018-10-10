<?php
  namespace app\home\controller;
  use think\Controller;
  use app\home\model\User;
  class TestMiddle extends Controller{
      public function test(){
        $a = rand(1,100);
        $a>50 ? $this->redirect('http://www.9527.com',302) : $this->redirect('index',['name'=>'sand']);
      }
      public function index($name=''){
        echo "hello".$name;
      }
  }
