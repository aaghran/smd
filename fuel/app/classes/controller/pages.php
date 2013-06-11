<?php

class Controller_Pages extends Controller_Template {

    public function action_index() {
        $view = Model_Organization::get_links();
        $this->template->title = 'Home ';
        $this->template->content = View::forge('pages/index', array(
                    'view' => $view
        ));
    }

    public function action_view($id) {
        $view = Model_Organization::get_views($id);
        $this->template->title = 'Organization  &raquo; View all';
        $this->template->content = View::forge('pages/view', array(
                    'view' => $view
        ));
    }

    public function action_insert($id) {
        if ($id == 0) {
            $data["subnav"] = array('insert' => 'active');
            $this->template->title = 'Organization &raquo; Insert';
            $this->template->content = View::forge('pages/insert_new', array(
                    'view' => 1
        ));
        } else {
                $data["subnav"] = array('insert' => 'active');
            $this->template->title = 'Pages &raquo; Insert';
            $this->template->content =View::forge('pages/insert', array(
                    'view' => 1
        ));
        }
    }

    public function action_about() {
        $data["subnav"] = array('about' => 'active');
        $this->template->title = 'Pages &raquo; About';
        $this->template->content = View::forge('pages/about', $data);
    }

    public function action_contact() {
        $data["subnav"] = array('contact' => 'active');
        $this->template->title = 'Pages &raquo; Contact';
        $this->template->content = View::forge('pages/contact', $data);
    }

}
