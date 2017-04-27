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
        $kat_st=1;
        if($this->input->post('kat_sel') === 'darbas') $kat_st = 1;
        else if($this->input->post('kat_sel') === 'nekilnojamas_turtas') $kat_st = 2;
        else if($this->input->post('kat_sel') === 'kompiuteriai') $kat_st = 3;
      $data = array(
        'pavadinimas' => $this->input->post('pavadinimas'),
        'kategorija' => $kat_st

      );

      return $this->db->insert('skelbimai', $data);
    }

    public function update_post(){
        $kat_st=1;
        if($this->input->post('kat_sel') === 'darbas') $kat_st = 1;
        else if($this->input->post('kat_sel') === 'nekilnojamas_turtas') $kat_st = 2;
        else if($this->input->post('kat_sel') === 'kompiuteriai') $kat_st = 3;
        $data = array(
          'pavadinimas' => $this->input->post('pavadinimas'),
          'kategorija' => $kat_st

        );
        $this->db->where('id', $this->input->post('id'));
        return $this->db->update('skelbimai', $data);

    }

  }
 ?>
