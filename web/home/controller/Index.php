<?php
  namespace app\home\controller;
  use think\Controller;
  use think\facade\Request;
  class Index extends Controller{

    public function index(){
        echo "String";
    }

    public function lists(){
      return 'lists';
    }

  }
