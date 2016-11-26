<?php


class Home extends CI_Controller
{
    public function index()
    {
        $this->load->view('layout/header_view');
        $this->load->view('Home_View');
        $this->load->view('layout/footer_View');
    }

    public function test()
    {
        $this->load->view('layout/header_view');
        $this->load->view('layout/test_view');
        $this->load->view('layout/footer_View');
    }
}