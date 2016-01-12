<?php
/**
 * Description of HomeController
 *
 * @author Administrator
 */
namespace Home\Controller;
use Think\Controller;

class HomeController extends Controller{
    
    /* login user id */
    protected $_uid;

    /* 空操作，用于输出404页面 */
    public function _empty(){
        $this->redirect('Index/index');
    }

    protected function _initialize(){
        /* 读取站点配置 */
        $config = api('Config/lists');
        C($config); //添加配置
        if(!C('WEB_SITE_CLOSE')){
            $this->error('站点已经关闭，请稍后访问~');
        }
        /* get login status/id */
        $this->_uid = is_login();
    }

}
