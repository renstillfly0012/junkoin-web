<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {
    public function login($data){
        $this->db->where($data);
        $q = $this->db->get('users');
        $user = $q->row();
        //print_r($user); die();
        if($q->num_rows() > 0){
            $this->session->set_userdata('login',true);
            $this->session->set_userdata('name',$user->name);
        } else {
            session_destroy();
        }
    }

    public function edit($id) {
        $this->load->model('Item_model');
        $data['item'] = $this->Item_model->get_item($id);

        $name = $this->input->post('name');
        $description = $this->input->post('description');
        $price = $this->input->post('price');

        $this->load->model('Item_model');
        $this->Item_model->update($id,$name,$description,$price);
        redirect('item/index');

        $this->load->library('form_validation');

        //here are the validation entry
        $this->form_validation->set_rules('name', 'Item Name', 'required');
        $this->form_validation->set_rules('description', 'Item Description', 'required');
        $this->form_validation->set_rules('price', 'Item Price', 'required|numeric|greater_than[0]');

        if ($this->form_validation->run() == FALSE) {
            $this->viewedit($id);
        } else {
            $this->load->model('Item_model');
            $this->Item_model->update($id, $name, $description, $price);
            redirect('item/index');
        }
    }

}