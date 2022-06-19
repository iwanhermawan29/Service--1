<?php

class Posts extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Posts_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Daftar Article';
        $data['posts'] = $this->Posts_model->getAllPosts();
        if( $this->input->post('keyword') ) {
            $data['posts'] = $this->Posts_model->cariDataPosts();
        }
        $this->load->view('templates/header', $data);
        $this->load->view('posts/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Form Tambah Data Posts';

        $this->form_validation->set_rules('title', 'Title', 'required|min_length[20]');
        $this->form_validation->set_rules('content', 'Content', 'required|min_length[200]');
        $this->form_validation->set_rules('category', 'Category', 'required|min_length[3]');
        $this->form_validation->set_rules('status', 'Status', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('posts/tambah');
            $this->load->view('templates/footer');
        } else {
            $this->Posts_model->tambahDataPosts();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('posts');
        }
    }

    public function hapus($id)
    {
        $this->Posts_model->hapusDataPosts($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('posts');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Data Posts';
        $data['posts'] = $this->Posts_model->getPostsById($id);
        $this->load->view('templates/header', $data);
        $this->load->view('posts/detail', $data);
        $this->load->view('templates/footer');
    }

    public function ubah($id)
    {
        $data['judul'] = 'Form Ubah Data Posts';
        $data['posts'] = $this->Posts_model->getPostsById($id);
        $data['status'] = ['Publish', 'Draft', 'Thrash'];

        $this->form_validation->set_rules('title', 'Title', 'required|min_length[20]');
        $this->form_validation->set_rules('content', 'Content', 'required|min_length[200]');
        $this->form_validation->set_rules('category', 'Category', 'required|min_length[3]');
        $this->form_validation->set_rules('status', 'Status', 'required');
        $this->form_validation->set_rules('id', 'Id', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('posts/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Posts_model->ubahDataPosts();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('posts');
        }
    }

}
