<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Page extends CI_Controller
{
    public function __construct()
    {

        parent::__construct();
        check_login();
    }
    public function new_slide()
    {

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['data_slide'] = $this->db->get('image_slide')->result_array();
        $data['title'] = 'New Slide';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('page/new_slide', $data);
        $this->load->view('templates/footer');
    }
    public function upload_slide()
    {

        if ($this->input->post('is_active') == 1) {
            $image_active = 1;
        } else {
            $image_active = 0;
        }

        //cek jika ada gambar di upload
        $upload_image = $_FILES['image_slide']['name'];

        if ($upload_image) {
            $config['upload_path'] = './assets/img/slide/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size']     = '3024';
            // $config['max_width'] = '1024';
            // $config['max_height'] = '768';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('image_slide')) {
                $data = [
                    'title' => $this->input->post('title'),
                    'content' => $this->input->post('content'),
                    'img_slide' => $this->upload->data('file_name'),
                    'active' => $image_active,
                    'date_created' => time()


                ];

                $this->db->insert('image_slide', $data);
                $this->session->set_flashdata('message', '<div class="alert alert-success col-md-6" role="alert">Image Slide success to upload!!</div>');
                redirect('page/new_slide');
            } else {

                echo $this->upload->display_errors();
            }
        }
    }

    public function delete_image($id, $image)
    {

        if ($image && $id) {
            $where = array('id' => $id);
            $this->db->delete('image_slide', $where);
            unlink(FCPATH . 'assets/img/slide/' . $image);

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Image slide has been delete</div>');
            redirect('page/new_slide');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Failed to delete!</div>');
            redirect('page/new_slide');
        }
    }
}
