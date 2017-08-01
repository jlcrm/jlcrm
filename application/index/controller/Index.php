<?php
namespace app\index\controller;

class Index
{
    /**
     * @return \think\response\View
     */
    public function index()
    {
    	return view();
    }
    public function m()
    {
    	echo "12313";
    	for($i=0;$i++;$i<100000000000000000){
    		echo $i*50/35;
    	}
    }
}
