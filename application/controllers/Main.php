<?php
class Main extends CI_Controller
{

    public function index()
    {
        $this->load->helper('url');
        $this->load->view('editor.html');
    }

    public function ui()
    {
        $this->load->helper('url');
        $this->load->view('ui.html');
    }
}
