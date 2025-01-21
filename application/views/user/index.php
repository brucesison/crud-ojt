<?php $this->load->view('includes/header'); ?>

<div class="row px-5 mb-5 font-monospace">
  <div class="col-md-12 mb-3">
    <a href="<?= base_url() ?>UserController/addpage"
      class="btn btn-sm btn-primary shadow-sm text-uppercase fw-semibold">Add
      User</a>
  </div>
  <div class="col-md-12">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title text-center mb-3 text-uppercase">User List</h5>
        <?php
        if ($this->session->flashdata('success')) { ?>
          <div class="alert alert-success alert-dismissible fade show fw-semibold" role="alert">
            <?= $this->session->flashdata('success') ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        <?php }
        ?>
        <?php
        if ($this->session->flashdata('deleted')) { ?>
          <div class="alert alert-success alert-dismissible fade show fw-semibold" role="alert">
            <?= $this->session->flashdata('deleted') ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        <?php }
        ?>
        <?php
        if ($this->session->flashdata('error')) { ?>
          <div class="alert alert-danger alert-dismissible fade show fw-semibold" role="alert">
            <?= $this->session->flashdata('error') ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        <?php }
        ?>
        <div class="table-responsive">
          <table id="example" class="table table-striped table-responsive">
            <thead class="bg-primary bg-gradient text-light">
              <tr>
                <th>#</th>
                <th>Username</th>
                <th>Email</th>
                <th>Contact No.</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php $i = 1;
              foreach ($user_tbl as $row) { ?>
                <tr>
                  <td><?= $i++ ?></td>
                  <td><?= $row['name'] ?></td>
                  <td><?= $row['email'] ?></td>
                  <td><?= $row['contact_no'] ?></td>
                  <td>
                    <a href="<?= base_url() ?>UserController/editUser/<?= $row['id'] ?>"
                      class="btn btn-sm btn-primary btn-sm shadow-sm fw-semibold">Edit</a>
                    <a href="<?= base_url() ?>UserController/deleteUser/<?= $row['id'] ?>"
                      class="btn btn-sm btn-danger btn-sm shadow-sm fw-semibold"
                      onclick="return confirm('Are you sure want to delete this user ?')">Delete</a>
                  </td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

<?php $this->load->view('includes/footer'); ?>