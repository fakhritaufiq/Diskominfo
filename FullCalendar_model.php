<?php

class Fullcalendar_model extends CI_Model
{
    public function search1()
    {
        // $tgl1 = "2017-05-18";
        $tgl1 = $_POST["amount"];
        echo json_encode($tgl1);
        $this->db->select("*");
        $this->db->from("bf_agenda");
        $this->db->where("tgl_agenda", $tgl1);
        $query = $this->db->get();
        return $query->result_array();
    }
    // $this->input->post("col2")
    public function search2()
    {
        $this->db->select("*");
        $this->db->from("bf_agenda");
        $this->db->where("tgl_agenda", $this->input->post("col2"));
        $query = $this->db->get();
        return $query->result_array();
    }
    public function search3()
    {
        $this->db->select("*");
        $this->db->from("bf_agenda");
        $this->db->where("tgl_agenda", $this->input->post("z"));
        $query = $this->db->get();
        return $query->result_array();
    }
    public function search4()
    {
        $this->db->select("*");
        $this->db->from("bf_agenda");
        $this->db->where("tgl_agenda", $this->input->post("z"));
        $query = $this->db->get();
        return $query->result_array();
    }
    public function search5()
    {
        $this->db->select("*");
        $this->db->from("bf_agenda");
        $this->db->where("tgl_agenda", $this->input->post("z"));
        $query = $this->db->get();
        return $query->result_array();
    }
    public function search6()
    {
        $tgl1 = "2019-10-10";
        $this->db->select("*");
        $this->db->from("bf_agenda");
        $this->db->where("tgl_agenda", $tgl1);
        $query = $this->db->get();
        return $query->result_array();
    }
    public function search7()
    {
        $tgl1 = "2017-05-18";
        $this->db->select("*");
        $this->db->from("bf_agenda");
        $this->db->where("tgl_agenda", $tgl1);
        $query = $this->db->get();
        return $query->result_array();
    }
}
