<?php

class Peoples extends CI_Controller { 
    public function index($start = 1)
    {
        $this->load->model("Peoples_model","peoples");
        $this->load->library('pagination');
        $data['tittle'] = 'Daftar Orang';
        $data["pill"] = 3;
        $config["base_url"] = "http://localhost/tugas-3/peoples/index";
        $config["total_rows"] = $this->peoples->count();
        $config["per_page"] = 12;

        $config["full_tag_open"] = '<nav><ul class="pagination">';
        $config["full_tag_close"] = "</ul></nav>";

        $config["first_link"] = "First";
        $config["first_tag_open"] = '<li class="page-item">';
        $config["first_tag_close"] = '</li>';

        $config["last_link"] = "Last";
        $config["last_tag_open"] = '<li class="page-item">';
        $config["last_tag_close"] = '</li>';

        $config["next_link"] = "&raquo;";
        $config["next_tag_open"] = '<li class="page-item">';
        $config["next_tag_close"] = '</li>';

        $config["prev_link"] = "&laquo;";
        $config["prev_tag_open"] = '<li class="page-item">';
        $config["prev_tag_close"] = '</li>';

        $config["cur_tag_open"] = '<li class="page-item active"><a class="page-link" href="#">';
        $config["cur_tag_close"] = '</a></li>';

        $config["num_tag_open"] = '<li class="page-item">';
        $config["num_tag_close"] = '</li>';

        $config["attributes"] = array("class" => "page-link");

        $this->pagination->initialize($config);
        $data["start"] = $start;
        $data["peoples"] = $this->peoples->get($config["per_page"],$start);
        $this->load->view('templates/header', $data);
        $this->load->view('peoples', $data);
        $this->load->view('templates/footer');
    }
}