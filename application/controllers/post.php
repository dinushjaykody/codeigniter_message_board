<?php   if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Post extends CI_Controller
{
    /**
    * constructor for Controller class
    */
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');

    }
    public function index()
    {

        $this->load->view('header');


        $this->load->model("post_model","model");
        $posts = $this->model->getAll();

        $data = array("posts" => $posts);
        $this->load->view("forms/all",$data);
        $this->load->view('footer');

    }

    public function view($id){

        $this->load->model("post_model","model");
        $post = $this->model->get($id);

        if ($post){
             $this->load->view('header');
             $data = array("post"=>$post);
             $this->load->view("forms/view",$data);
             $this->load->view('footer');
        } else {
            show_404();
        }
    }
    /**
    * show_add() is to display the form
    */
    public function show_add()
    {
        $this->load->view('header');

        $this->load->helper('form');

        $this->load->view('forms/add');

        $this->load->view('footer');
    }

    /**
    * do_add() is to add the details to the post table in the database
    */
    public function do_add()
    {
        $this->load->library('input');
        $title = $this->input->post('title');
        $text = $this->input->post('text');

        $this->load->model("post_model","model");
        $this->model->add($title,$text);

        redirect(site_url('post'));


    }

    public function delete($id)
    {
        $this->load->model("post_model","model");
        $this->model->delete($id);

        redirect(site_url('post'));

    }

    public function show_update($id)
    {
        $this->load->view('header');
        $this->load->model("post_model","model");
        $posts =  $post = $this->model->get($id);


       $data = array("posts" => $posts);
        $this->load->helper('form');
        $this->load->view('forms/update',$data);

        $this->load->view('footer');

    }

    public function do_update(){



        $this->load->library('input');
        $title = $this->input->post('title');
        $text = $this->input->post('text');
        $id = $this->input->post('id');

        $this->load->model("post_model","model");
        $this->model->update($id,$title,$text);



        redirect(site_url('post'));

    }
}
?>