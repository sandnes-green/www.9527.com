<?php
  namespace app\common;
  class Demo{
    private $name;
    public function __construct($name = '小老虎'){
      $this->name = $name;
    }

    public function setName($name){
      $this->name = $name;
    }

    public function getName(){
      return '调用的方法是:'.__METHOD__.'属性是'.$this->name;
    }
  }
