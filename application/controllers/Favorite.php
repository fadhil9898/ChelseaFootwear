<?php
class Favorite extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model(array('m_user'));
        if (!$this->session->userdata('u_name')) {
            redirect('login');
        }
    }
    

    function index() {
        $this->load->view('favorite');
    }
}
?>