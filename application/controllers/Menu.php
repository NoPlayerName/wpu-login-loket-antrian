<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Controller
{
    public function __construct()
    {

        parent::__construct();
        check_login();
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Menu Management';


        $data['menu'] = $this->db->get('user_menu')->result_array();
        $this->form_validation->set_rules('menu', 'Menu', 'required');
        if ($this->form_validation->run() == false) {
            # code...
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('menu/index', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Menu_model->addNewmenu();

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New menu added!</div>');
            redirect('menu');
        }
    }

    public function hapusmenu($id)
    {
        $this->Menu_model->deletMenu($id);

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Deleted menu succes!</div>');
        redirect('menu');
    }

    public function editmenu($id)
    {
        $this->Menu_model->menuEdit($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Update Succes!</div>');
        redirect('menu');
    }

    public function getsubmenubyid()
    {
        $id =  $this->input->post('id');
        echo json_encode($this->Menu_model->getSubmenuByid($id));
    }

    public function editsubmenu()
    {
        $this->Menu_model->editSubmenu();
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Sub menu has been update!</div>');
        redirect('menu/submenu');
    }

    public function submenu()
    {


        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Submenu Management';
        // untuk menambahkan model

        $data['subMenu'] = $this->Menu_model->getSubMenu();


        // $data['menu'] = $this->db->get('user_menu')->result_array();
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('menu_id', 'Menu', 'required');
        $this->form_validation->set_rules('url', 'URL', 'required');
        $this->form_validation->set_rules('icon', 'Icon', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('menu/submenu', $data);
            $this->load->view('templates/footer');
            # code...
        } else {

            $this->Menu_model->addSubmenu();

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New sub menu added!</div>');
            redirect('menu/submenu');
        }
    }
    public function deletsubmenu($id)
    {
        $this->Menu_model->deletSubmenu($id);

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Deleted menu succes!</div>');
        redirect('menu/submenu');
    }
}
