<?php
namespace app\index\controller;
use think\Model;
class Menu
{
    /**
     * @return \think\response\View
     */
    public function index()
    {
    	//echo '加密:'.encrypt($str, 'E', $key); 
		//echo '解密：'.encrypt($str, 'D', $key);
    	$mm = model('common')->encrypt("12131",'E');
    	echo model('common')->encrypt($mm,'D');
    	var_dump( input('post.menuGroupId') );
    }
    public function menu()
    {
      return view();
    }
}
