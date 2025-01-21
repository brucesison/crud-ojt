<?php
defined('BASEPATH') or exit('No direct script access allowed');

class UserController extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('User_model');
  }

  public function index()
  {
    $data['user_tbl'] = $this->User_model->getAllUsers();
    $this->load->view('user/index', $data);
  }

  public function addpage()
  {
    $this->load->view('user/addpage');
  }

  public function addUser()
  {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $data = array(
        'name' => $this->input->post('name'),
        'email' => $this->input->post('email'),
        'contact_no' => $this->input->post('contact_no')
      );

      $status = $this->User_model->insertUser($data);
      if ($status) {
        $this->session->set_flashdata('success', 'Successfully added!');
        redirect(base_url('UserController/index'));
      } else {
        $this->session->set_flashdata('error', 'Failed to add user!');
        $this->load->view('user/addpage');
      }
    } else {
      $this->load->view('user/addpage');
    }
  }

  public function editUser($id)
  {
    $data['user_tbl'] = $this->User_model->getUser($id);
    $data['id'] = $id;
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $data = array(
        'name' => $this->input->post('name'),
        'email' => $this->input->post('email'),
        'contact_no' => $this->input->post('contact_no')
      );

      $status = $this->User_model->updateUser($id, $data);
      if ($status) {
        $this->session->set_flashdata('success', 'Successfully Updated!');
        redirect(base_url('UserController/editUser/' . $id));
      } else {
        $this->session->set_flashdata('error', 'Failed to update!');
        $this->load->view('user/edit_page');
      }
    }

    $this->load->view('user/editpage', $data);
  }

  public function deleteUser($id)
  {
    if (is_numeric($id)) {
      $status = $this->User_model->deleteUser($id);
      if ($status) {
        $this->session->set_flashdata('deleted', 'Successfully Deleted!');
        redirect(base_url('UserController/index/'));
      } else {
        $this->session->set_flashdata('error', 'Failed to delete!');
        redirect(base_url('UserController/index/'));
      }
    }
  }

}
