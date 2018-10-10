<?php
  namespace app\home\controller;
  use think\Controller;
  use think\Request;
  class Error extends Controller{
    public function index(Request $request){
      echo '<pre>';
      var_dump($request);
      $cityName = $request->controller();
      return $this->city($cityName);
    }

    public function city($name){
      return '当前城市: '.$name;
    }
  }
