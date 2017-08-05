<?php
namespace app\index\controller;

class Menu
{
    /**
     * @return \think\response\View
     */
    public function index()
    {
    	$str = 'abc'; 
		$key = 'www.helloweba.com'; 
		$token = encrypt($str, 'E', $key); 
		echo '加密:'.encrypt($str, 'E', $key);
		echo "<br />--------------------------------------------------------------<br />";
		echo '解密：'.encrypt($token, 'D', $key);
		
    	echo "<br />--------------------------------------------------------------<br />";
    	var_dump( input('post.menuGroupId') );
    }
    public function menu()
    {
      return view();
    }
}
