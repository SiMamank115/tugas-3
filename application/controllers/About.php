<?php
class About extends CI_Controller
{
    public function index()
    {
        $this->load->model("Partner_model");
        $data["tittle"] = "About me";
        $data["pill"] = 2;
        $this->load->view("templates/header", $data);
        $this->load->view("about", $data);
        $this->load->view("templates/footer", $data);
    }
}
