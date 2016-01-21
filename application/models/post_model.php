<?php   if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Post_model extends CI_Model
{
   public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    /**
    * add() to add a post details to the database
    */
    public function add($title,$text)
    {
        $data = array(
            "title" => $title,
            "text"  => $text,
            "date"  => time()
        );

        $this->db->insert("post",$data);
    }

     /**
    * getAll() to return post details
    */

    public function getAll()
    {
        $this->db->order_by("id","desc");
        return $this->db->get("post")->result_array();

    }

    public function get($id)
    {
        $this->db->where("id",$id);
        $result= $this->db->get("post")->result_array();

        if(count($result==1)){
            return $result[0];
        } else {
          return FALSE;
        }

    }

    public function delete($id)
    {
        $data  = array(
            "id" => $id
        );

        $this->db->delete("post",$data);

    }

    public function update($id,$title,$text)
    {

        $this->db->where('id',$id);
        $data = array(
            'title' =>$title,
            'text' =>$text
        );
        $this->db->update('post',$data);

    }

}
