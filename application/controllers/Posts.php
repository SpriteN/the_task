<?php
  class Posts extends CI_Controller{
    public function index(){
      $data['title'] = 'posts';
      $data['posts'] = $this->post_model->get_posts();
      //print_r($data['posts']);
      $this->load->view('templates/header');
      $this->load->view('posts/index',$data);
      $this->load->view('templates/footer');
    }

    public function create(){
      $data['title'] = 'create post';

      $this->form_validation->set_rules('pavadinimas', 'Pavadinimas', 'required');
      $this->form_validation->set_rules('kat_sel', 'Kategorija', 'required');
      $this->form_validation->set_rules('sub_sel', 'Subkategorija', 'required');
      $this->form_validation->set_rules('komentaras', 'Kategorija', 'required');

      if($this->form_validation->run() === FALSE){
        $this->load->view('templates/header');
        $this->load->view('posts/create',$data);
        $this->load->view('templates/footer');
      }
      else {
        $this->post_model->create_post();
        redirect('posts');
      }
    }


    public function edit($id){
      echo $id;
      $data['post'] = $this->post_model->get_posts($id);
      if(empty($data['post'])){
        show_404();
      }

      $data['title'] = 'edit post';
      $this->load->view('templates/header');
      $this->load->view('posts/edit',$data);
      $this->load->view('templates/footer');
    }

    public function update(){
      //echo $id;
      $this->post_model->update_post();
      redirect('posts');
    }

  }

 ?>
