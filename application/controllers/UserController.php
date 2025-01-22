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
    $data['title'] = "User List";
    $this->load->view('user/index', $data);
  }

  // public function addpage()
  // {
  //   $data['title'] = "Add User";
  //   $this->load->view('user/addpage', $data);
  // }

  // public function addUser()
  // {
  //   if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  //     $data = array(
  //       'name' => $this->input->post('name'),
  //       'email' => $this->input->post('email'),
  //       'contact_no' => $this->input->post('contact_no')
  //     );

  //     $status = $this->User_model->insertUser($data);
  //     if ($status) {
  //       $this->session->set_flashdata('success', 'Successfully added!');
  //       redirect(base_url('UserController/index'));
  //     } else {
  //       $this->session->set_flashdata('error', 'Failed to add user!');
  //       $this->load->view('user/addpage');
  //     }
  //   } else {
  //     $this->load->view('user/addpage');
  //   }
  // }

  // public function editUser($id)
  // {
  //   $data['user_tbl'] = $this->User_model->getUser($id);
  //   $data['id'] = $id;
  //   if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  //     $data = array(
  //       'name' => $this->input->post('name'),
  //       'email' => $this->input->post('email'),
  //       'contact_no' => $this->input->post('contact_no')
  //     );

  //     $status = $this->User_model->updateUser($id, $data);
  //     if ($status) {
  //       $this->session->set_flashdata('success', 'Successfully Updated!');
  //       redirect(base_url('UserController/editUser/' . $id));
  //     } else {
  //       $this->session->set_flashdata('error', 'Failed to update!');
  //       $this->load->view('user/edit_page');
  //     }
  //   }

  //   $data['title'] = "Edit User";
  //   $this->load->view('user/editpage', $data);
  // }

  // public function deleteUser($id)
  // {
  //   if (is_numeric($id)) {
  //     $status = $this->User_model->deleteUser($id);
  //     if ($status) {
  //       $this->session->set_flashdata('deleted', 'Successfully Deleted!');
  //       redirect(base_url('UserController/index/'));
  //     } else {
  //       $this->session->set_flashdata('error', 'Failed to delete!');
  //       redirect(base_url('UserController/index/'));
  //     }
  //   }
  // }

  // new function

  public function fetchDatafromDatabase()
  {
    $resultList = $this->User_model->fetchAllData();

    $button = '';
    $result = array();
    $i = 1;

    if (!empty($resultList)) {
      foreach ($resultList as $key => $value) {
        $button = '<button class="btn btn-primary btn-sm shadow-sm fw-semibold" onclick="editFun(' . $value['id'] . ')">Edit</button>
      <button class="btn btn-danger btn-sm shadow-sm fw-semibold" onclick="deleteFun(' . $value['id'] . ')">Delete</button>';
        $result['data'][] = array(
          $i++,
          $value['name'],
          $value['email'],
          $value['contact_no'],
          $button
        );
      }
    } else {
      $result['data'] = array();
    }

    echo json_encode($result);
  }

  public function createUser()
  {
    $data = array(
      'name' => $this->input->post('name'),
      'email' => $this->input->post('email'),
      'contact_no' => $this->input->post('contact_no')
    );

    $status = $this->User_model->createData($data);
    if ($status) {
      echo json_encode(true);
    } else {
      echo json_encode(false);
    }
  }

  public function getEditData()
  {
    $id = $this->input->post('id');
    $resultData = $this->User_model->fetchSingleData(array('id' => $id));
    echo json_encode($resultData);
  }

  public function updateUser()
  {
    $id = $this->input->post('id');
    $data = array(
      'name' => $this->input->post('name'),
      'email' => $this->input->post('email'),
      'contact_no' => $this->input->post('contact_no')
    );

    $update = $this->User_model->updateData($data, array('id' => $id));
    echo json_encode($update);

  }

  public function deleteUser()
  {
    $id = $this->input->post('id');
    $delete = $this->User_model->deleteData(array('id' => $id));
    if ($delete) {
      echo json_encode(true);
    } else {
      echo json_encode(false);
    }

  }

}
