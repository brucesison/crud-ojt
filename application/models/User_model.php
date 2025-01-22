<?php

class User_model extends CI_Model
{
  // public function insertUser($data)
  // {
  //   return $this->db->insert('user_tbl', $data);
  // }

  // public function getAllUsers()
  // {
  //   $this->db->select('*');
  //   $this->db->from('user_tbl');
  //   return $this->db->get()->result_array();
  // }

  // public function getUser($id)
  // {
  //   $this->db->select('*');
  //   $this->db->from('user_tbl');
  //   $this->db->where('id', $id);
  //   return $this->db->get()->row();
  // }

  // public function updateUser($id, $data)
  // {
  //   $this->db->where('id', $id);
  //   return $this->db->update('user_tbl', $data);
  // }

  // public function deleteUser($id)
  // {
  //   return $this->db->delete('user_tbl', array('id' => $id));
  // }

  // new function

  public function fetchAllData()
  {
    $query = $this->db->select('*')->from('user_tbl')->get();
    return $query->result_array();
  }

  public function fetchSingleData($id)
  {
    $query = $this->db->select('*')
      ->from('user_tbl')
      ->where($id)
      ->get();
    return $query->row_array();
  }

  public function createData($data)
  {
    return $this->db->insert('user_tbl', $data);
  }

  public function updateData($data, $id)
  {
    return $this->db->update('user_tbl', $data, $id);
  }

  public function deleteData($id)
  {
    return $this->db->delete('user_tbl', $id);
  }
}