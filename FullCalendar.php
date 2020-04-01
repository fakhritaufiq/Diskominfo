<?php

class Fullcalendar extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('FullCalendar_model');
    }

    function index()
    {
        $d1 = $this->FullCalendar_model->search1();
        $d2 = $this->FullCalendar_model->search2();
        $d3 = $this->FullCalendar_model->search3();
        $d4 = $this->FullCalendar_model->search4();
        $d5 = $this->FullCalendar_model->search5();
        $d6 = $this->FullCalendar_model->search6();
        $d7 = $this->FullCalendar_model->search7();
        $data["tanggalan1"] = $d1;
        $data["tanggalan2"] = $d2;
        $data["tanggalan3"] = $d3;
        $data["tanggalan4"] = $d4;
        $data["tanggalan5"] = $d5;
        $data["tanggalan6"] = $d6;
        $data["tanggalan7"] = $d7;
        json_encode($data);
        $this->load->view('Agenda', $data);
    }
}
