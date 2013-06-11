<?php

class Controller_Admin extends Controller_Template {

    public $template = 'template_admin';

    public function action_user() {
        $data["subnav"] = array('user' => 'active');
        $this->template->title = 'Admin &raquo; User';
        $this->template->content = View::forge('admin/user', $data);
    }

    public function action_approve() {
        $data["subnav"] = array('approve' => 'active');
        $this->template->title = 'Admin &raquo; Approve';
        $this->template->content = View::forge('admin/approve', $data);
    }

}
