<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Moons_model extends CI_Model {


    public function create()
    {
        $data = array(   
        
            'nama_lengkap' => $this->input->post('nama', true),
            'alamat' => $this->input->post('alamat', true),
            'no_hp' => $this->input->post('nohp', true),
            'no_ktp' => $this->input->post('noktp', true),
            'no_kk' => $this->input->post('nokk', true),
            'kota' => $this->input->post('kota', true),
            'provinsi' => $this->input->post('provinsi', true),
            'kode_pos' => $this->input->post('kodepos', true) 
            
        
        
        
        );

        $this->db->insert('form_cost',$data);
    }



    public function getAllPengajuan()
    {
        return $this->db->get('form_cost')->result_array();
    }


    public function hapusData($id)
    {
        
        $this->db->delete('form_cost',['id_form' => $id]);
    }

    public function editData($id)
    {
        return $this->db->get('form_cost',['id_form' => $id])->row_array();
    }

    public function uploadImage()
    {
        $config['upload_path'] = './assets/upload/';
        $config['allowed_types'] = 'jpeg|jpg|png';
        $config['max_size']     = '100';
        $config['max_width'] = '1024';
        $config['max_height'] = '768';

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('image')) {
            return $this->upload->data("file name");
        }

        return "default.jpg";

    }
}