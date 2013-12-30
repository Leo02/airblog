<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Blog extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function view($id){
        $data['blog_item'] = $this->blog_model->get_blog($id);

        if (empty($data['blog_item'])){
            show_404();
        }
        if ($this->session->userdata('user')) {
            $data['user'] = $this->session->userdata('user');
        }
        $this->load->view('templates/header', $data);
        $this->load->view('blog/view', $data);
        $this->load->view('templates/footer');
    }

    public function index(){
        $data['blog'] = $this->blog_model->get_blog();
        if ($this->session->userdata('user')) {
            $data['user'] = $this->session->userdata('user');
        }
        $this->load->view('templates/header', $data);
        $this->load->view('blog/index', $data);
        $this->load->view('templates/footer');
    }

    public function about_me(){
        $data['blog_item'] = $this->blog_model->get_blog('2');
        if ($this->session->userdata('user')) {
            $data['user'] = $this->session->userdata('user');
        }
        $this->load->view('templates/header', $data);
        $this->load->view('blog/view', $data);
        $this->load->view('templates/footer');
    }

    public function rss(){
        $data['blog_item'] = $this->blog_model->get_rss();
        $data['base_url'] = base_url();
        $this->load->view('blog/rss', $data);
    }
}