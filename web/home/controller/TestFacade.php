<?php
  namespace app\home\controller;
  use think\Controller;
  class TestFacade extends Controller{
    public function index(){
      echo \app\facade\Test::hello('thinkphp');
    }

    public function test(){
      $test = new \app\common\Test;
      return $test->hello('zhouyue');
    }
  }
