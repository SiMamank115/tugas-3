<?php
class Contact extends CI_Controller
{
    public function index()
    {
        $data["tittle"] = "Contact page";
        $data["pill"] = 3;
        $this->load->view("templates/header", $data);
        $this->load->view("contact", $data);
        $this->load->view("templates/footer", $data);
    }
}
