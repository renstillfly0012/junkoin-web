<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function index()
    {
        $this->load->view('includes/top');
        $this->load->view('main/index');
        $this->load->view('includes/bottom');
    }

    public function dashboard()
    {

        $this->load->view('includes/admin_top');
        $this->load->view('includes/admin_nav');
        $this->load->view('admin/dashboard');
        $this->load->view('includes/bottom');
    }
    
    public function viewUsers()
    {

        $this->load->view('includes/admin_top');
        $this->load->view('includes/admin_nav');
        $this->load->view('admin/admin_user');
        $this->load->view('includes/bottom');
    }
    
    public function viewCompanies()
    {

        $this->load->view('includes/admin_top');
        $this->load->view('includes/admin_nav');
        $this->load->view('admin/admin_company');
        $this->load->view('includes/bottom');
    }

    public function viewDiscounts()
    {

        $this->load->view('includes/admin_top');
        $this->load->view('includes/admin_nav');
        $this->load->view('admin/admin_discount');
        $this->load->view('includes/bottom');
    }

    public function viewGC()
    {

        $this->load->view('includes/admin_top');
        $this->load->view('includes/admin_nav');
        $this->load->view('admin/admin_gc');
        $this->load->view('includes/bottom');
    }

   


    public function login()
    {
        //$this->dd($this->input->post());
        $data = array(
            'username' => $this->input->post('username'), //$_POST['username]
            'password' => $this->input->post('password'),
        );
        // $this->dd($data);
        $this->load->model('User_model');
        $this->User_model->login($data);
        if ($this->session->login) {
            redirect('item/index');
        } else {
            $this->index();
        }
    }

    public function logout()
    {
        session_destroy();
        $this->index();
    }

    public function dd($data)
    {
        echo '<pre>';
        print_r($data);
        echo '</pre>';
    }
}
