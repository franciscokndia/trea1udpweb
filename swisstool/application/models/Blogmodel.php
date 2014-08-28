<?php
class Blogmodel extends CI_Model {

    var $title   = '';
    var $content = '';

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    function get_last_ten_entries()
    {
		
        $query = $this->db->get('Blogmodel', 10);
        return $query->result();
    }
    
    function getbyid($id)
    {
     $query=$this->db->get_where('Blogmodel',array('id'=>$id));
     return $query->row();
    }

    function insert_entry()
    {
        $this->title   = $_POST['title']; 
        $this->content = $_POST['content'];


        $this->db->insert('Blogmodel', $this);
    }

    function update_entry()
    {
        $this->title   = $_POST['title'];
        $this->content = $_POST['content'];
        $this->db->update('Blogmodel', $this, array('id' => $_POST['id']));
    }

}
