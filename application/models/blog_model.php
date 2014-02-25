<?php
class blog_model extends CI_Model {

  public function get_blog($id = FALSE){
    if ($id === FALSE){
      $this->db->order_by('id','DESC'); 
      $this->db->select('id,title,time');
      $query = $this->db->get('blog');
      return $query->result_array();
    }
  
    $query = $this->db->get_where('blog', array('id' => $id));
    return $query->row_array();
  }

  public function get_rss(){
      $this->db->order_by('id','DESC'); 
      $query = $this->db->get('blog');
      return $query->result_array();
  }
}