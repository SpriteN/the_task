<?php
  class Post_model extends CI_Model{
    public function __construct(){
      $this->load->database();
    }
    public function get_posts($id = FALSE){
      if($id === FALSE){
        $query = $this->db->get('skelbimai');
        return $query->result_array();
      }
      $query = $this->db->get_where('skelbimai', array('id' => $id));
      return $query->row_array();
    }

    public function create_post(){
      $data = array(
        'pavadinimas' => $this->input->post('pavadinimas'),
        'kategorija' => $this->input->post('kat_sel'),
        'subkategorija' => $this->input->post('sub_sel'),
        'komentaras' => $this->input->post('komentaras'),

      );

      return $this->db->insert('skelbimai', $data);
    }

    public function update_post(){
      $data = array(
        'pavadinimas' => $this->input->post('pavadinimas'),
        'kategorija' => $this->input->post('kat_sel'),
        'subkategorija' => $this->input->post('sub_sel'),
        'komentaras' => $this->input->post('komentaras'),

        );
        $this->db->where('id', $this->input->post('id'));
        return $this->db->update('skelbimai', $data);

    }

  }
 ?>
