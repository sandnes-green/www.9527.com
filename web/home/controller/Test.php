<?php
  namespace app\home\controller;
  use think\Controller;
  use app\home\model\User;
  use app\home\model\Admin;
  use think\Request;

  class Test extends Controller{
    public function index(){
        echo "<pre/>";
        echo "test";
    }
    public function lists(){
        echo "lists";
    }
  }
