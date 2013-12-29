<?php
class admin_model extends CI_Model {

  public function __construct()
  {
    $this->load->database();
  }

  public function login()
  {
    $pwd_md5 = md5($this->input->post('user').$this->input->post('password'));

    $query = $this->db->get_where('user', array('user' => $this->input->post('user'),'password' => $pwd_md5));
    $login = count($query->result());
    if($login == 1){
      return $this->input->post('user');
    }else{
      return FALSE;
    }
  }

  public function set_blog(){
    $data = array(
      'title' => $this->input->post('title'),
      'body' => $this->input->post('body')
    );
    return $this->db->insert('blog', $data);
  }

  public function edit(){
    $data = array(
      'title' => $this->input->post('title'),
      'body' => $this->input->post('body')
    );
    $this->db->where('id', $this->input->post('id'));
    $this->db->update('blog', $data);
    return $this->input->post('id');
  }
}