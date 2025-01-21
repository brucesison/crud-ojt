<?php

class User_model extends CI_Model
{
  public function insertUser($data)
  {
    return $this->db->insert('user_tbl', $data);
  }

  public function getAllUsers()
  {
    $this->db->select('*');
    $this->db->from('user_tbl');
    return $this->db->get()->result_array();
  }

  public function getUser($id)
  {
    $this->db->select('*');
    $this->db->from('user_tbl');
    $this->db->where('id', $id);
    return $this->db->get()->row();
  }

  public function updateUser($id, $data)
  {
    $this->db->where('id', $id);
    return $this->db->update('user_tbl', $data);
  }

  public function deleteUser($id)
  {
    return $this->db->delete('user_tbl', array('id' => $id));
  }
}