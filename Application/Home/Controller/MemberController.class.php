<?php

namespace Home\Controller;

/**
 * 用户模块控制器
 *
 * @author houpanqi
 */
class MemberController extends HomeController{
    
    /* 验证码，用于登录和注册 */
	public function verify(){
		$verify = new \Think\Verify(['length'=>4,'imageH'=>36,'imageW'=>120,'fontSize'=>16,'useCurve'=>false,'useNoise'=>false]);
		$verify->entry(1);
	}

    public function member() {
        if ($this->_uid == 0) {
            $this->error('您还没有登录，请先登录！', U('login'));
        }
        $this->display();
    }

    public function login($username = '', $password = '', $verify = '') {
        $title = "登录";
        if ($this->_uid > 0) {
            $this->error('您有登录！');
        }
        if(IS_POST){ 
            /* 检测验证码 */
			if(!check_verify($verify)){
				$this->error('验证码输入错误！');
			}
		} else { //显示登录表单
			
		}
        $this->assign(['title'=>$title]);
        $this->display();
    }
}
