<?php
namespace Admin\Controller;

use Think\Controller;
class PhotoController extends CommonController
{
    public function index()
    {
        $links = D('photo');
        $count = $links->count();
        $Page = new \Think\Page($count, 15);
        $show = $Page->show();
        $list = $links->order('id DESC')->limit($Page->firstRow . ',' . $Page->listRows)->select();
        $this->assign('list', $list);
        $this->assign('page', $show);
        $this->display();
    }
    public function add()
    {
        $this->display();
    }
    //上传照片处理
    public function doadd()
    {
        $links = D('photo');
        $data = $links->create();
        $data['time'] = time();
        if ($_FILES['pic']['tmp_name'] != '') {
            $upload = new \Think\Upload();
            $upload->maxSize = 3145728;
            $upload->exts = array('jpg', 'gif', 'png', 'jpeg');
            $upload->rootPath = './Uploads/';
            $upload->savePath = '/';
            $info = $upload->uploadOne($_FILES['pic']);
            if (!$info) {
                $this->error($upload->getError());
            } else {
                $data['pic'] = $info['savepath'] . $info['savename'];
            }
        }
        $result = $links->add($data);
        if ($result > 0) {
            $this->success('添加成功！', U('index'));
        } else {
            $this->error('添加失败！');
        }
    }


    public function edit($id)
    {
        $links = D('photo');
        $l = $links->find($id);
        $this->assign('l', $l);
        $this->display();
    }
    public function doedit()
    {
        $links = D('photo');
        $data = $links->create();
        if ($_FILES['pic']['tmp_name'] != '') {
            $upload = new \Think\Upload();
            $upload->maxSize = 3145728;
            $upload->exts = array('jpg', 'gif', 'png', 'jpeg');
            $upload->rootPath = './Uploads/';
            $upload->savePath = '/';
            $info = $upload->uploadOne($_FILES['pic']);
            if (!$info) {
                $this->error($upload->getError());
            } else {
                $data['pic'] = $info['savepath'] . $info['savename'];
            }
        }
        $result = $links->save($data);
        if ($result > 0) {
            $this->success('修改成功！', U('index'));
        } else {
            $this->error('修改失败！');
        }
    }
    public function delete($id)
    {
        $links = D('photo');
        if ($links->delete($id)) {
            $this->success('删除成功!', U('index'));
        } else {
            $this->error('删除失败！');
        }
    }
}