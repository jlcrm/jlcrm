<?php
namespace app\index\controller;

class Menu
{
    /**
     * @return \think\response\View
     */
    public function index()
    {
      var_dump( input('post.menuGroupId') );
    }
    public function menu()
    {
      return view();
    }
}
