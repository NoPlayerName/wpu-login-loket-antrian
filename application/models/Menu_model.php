<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu_model extends CI_Model
{

    public function getSubMenu()
    {

        $query = " SELECT `user_sub_menu`.*, `user_menu`.`menu`
                    FROM `user_sub_menu` JOIN `user_menu`
                    ON `user_sub_menu`.`menu_id` = `user_menu`.`id`
                ";
        return $this->db->query($query)->result_array();
    }

    public function getSubmenuByid($id)
    {

        $query = " SELECT `user_sub_menu`.*, `user_menu`.`menu`
                    FROM `user_sub_menu` JOIN `user_menu`
                    ON `user_sub_menu`.`menu_id` = `user_menu`.`id` WHERE `user_sub_menu`.`id` = $id
                ";
        return $this->db->query($query)->row_array();
    }

    public function menuEdit($id)
    {
        $menu = $this->input->post('menu');
        $where = $id;

        $this->db->set('menu', $menu);
        $this->db->where('id', $where);
        $this->db->update('user_menu');
    }

    public function deletMenu($id)
    {
        $where = array('id' => $id);
        $this->db->delete('user_menu', $where);
    }

    public function addNewmenu()
    {
        $this->db->insert('user_menu', ['menu' => $this->input->post('menu')]);
        // $this->db->insert();
    }

    public function addSubmenu()
    {
        if (!$this->input->post('is_active')) {
            $is_active = 0;
        } else {
            $is_active = $this->input->post('is_active');
        }
        $data = [
            'title' => $this->input->post('title'),
            'menu_id' => $this->input->post('menu_id'),
            'url' => $this->input->post('url'),
            'icon' => $this->input->post('icon'),
            'is_active' => $is_active

        ];

        $this->db->insert('user_sub_menu', $data);
    }

    public function deletSubmenu($id)
    {
        $where = array('id' => $id);
        $this->db->delete('user_sub_menu', $where);
    }

    public function editSubmenu()
    {
        if (!$this->input->post('is_active')) {
            $is_active = 0;
        } else {
            $is_active = $this->input->post('is_active');
        }
        $data = [
            'title' => $this->input->post('title'),
            'menu_id' => $this->input->post('menu_id'),
            'url' => $this->input->post('url'),
            'icon' => $this->input->post('icon'),
            'is_active' => $is_active

        ];
        $id = $this->input->post('id');
        $this->db->where('id', $id);
        $this->db->update('user_sub_menu', $data);
    }
}
