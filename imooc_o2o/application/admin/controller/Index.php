<?php
namespace app\admin\controller;
use think\Controller;
class Index extends  Controller
{
    public function index()
    {
        return $this->fetch();
    }
	public function test() {
        \phpmailer\Email::send("2319963317@qq.com",'tp5-emaiil','岸婆玲');
        return '发送邮件成功！！';
        print_r(\Map::getLngLat('北京昌平沙河地铁'));
		 return 'singwa';
	}
    public function map() {
        return \Map::staticimage('北京昌平沙河地铁');
    }
    public function welcome() {
        //return $this->fetch();
        return "欢迎来到o2o主后台首页!";
    }
}
