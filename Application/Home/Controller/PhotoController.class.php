<?php
namespace Home\Controller;

use Think\Controller;
class PhotoController extends BaseController
{
    public function index()
    {

        $links = D('photo');
        $count = $links->count();
        $Page = new \Think\Page($count, 18);
        $show = $Page->show();
        $list = $links->order('id DESC')->limit($Page->firstRow . ',' . $Page->listRows)->select();
        $this->assign('list', $list);
        $this->assign('page', $show);
        $this->display();


    }




}