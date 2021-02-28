<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{

    public function userEdit($image_old)
    {
        $name = $this->input->post('name');
        $email = $this->input->post('email');

        //cek jika ada gambar di upload
        $upload_image = $_FILES['image']['name'];

        if ($upload_image) {
            $config['upload_path'] = './assets/img/profile/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size']     = '1024';
            // $config['max_width'] = '1024';
            // $config['max_height'] = '768';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('image')) {

                $old_image = $image_old;
                if ($old_image != 'default.jpg') {
                    unlink(FCPATH . 'assets/img/profile/' . $old_image);
                }

                $new_image = $this->upload->data('file_name');
                $this->db->set('image', $new_image);
            } else {

                echo $this->upload->display_errors();
            }
        }

        $this->db->set('name', $name);
        $this->db->where('email', $email);
        $this->db->update('user');
    }

    public function changePassword($email, $oldpasssword)
    {
        $current_password = $this->input->post('current_password');
        $new_password = $this->input->post('new_password1');

        if (!password_verify($current_password, $oldpasssword)) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Worng Current Password!</div>');
            redirect('user/changepassword');
        } else {
            if ($current_password == $new_password) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">New Password cannot be the same as current password!</div>');
                redirect('user/changepassword');
            } else {
                $password_hash = password_hash($new_password, PASSWORD_DEFAULT);
                $this->db->set('password', $password_hash);
                $this->db->where('email', $email);
                $this->db->update('user');
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Password Changed!</div>');
                redirect('user/changepassword');
            }
        }
    }
}
