<?php $this->load->view('includes/header'); ?>

<div class="row px-5">
  <div class="col-md-12 px-5">
    <div class="card shadow-sm font-monospace">
      <div class="card-body">
        <h5 class="card-title text-center mb-3 text-uppercase">Edit User Info</h5>
        <?php
        if ($this->session->flashdata('success')) { ?>
          <div class="alert alert-success alert-dismissible fade show fw-semibold" role="alert">
            <?= $this->session->flashdata('success') ?>
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
        <form method="post" action="<?= base_url() ?>UserController/editUser/<?= $id ?>">
          <div class="mb-3">
            <label for="name" class="form-label">Username</label>
            <input type="text" class="form-control" id="name" name="name" value="<?= $user_tbl->name ?>"
              aria-describedby="emailHelp" required>
          </div>

          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="<?= $user_tbl->email ?>" required>
          </div>

          <div class="mb-3">
            <label for="contact_no" class="form-label">Contact No.</label>
            <input type="text" class="form-control" id="contact_no" name="contact_no"
              value="<?= $user_tbl->contact_no ?>" aria-describedby="emailHelp" required>
          </div>
          <button type="submit" class="btn btn-primary btn-sm shadow-sm fw-semibold fs-6">Update</button>
          <a href="<?= base_url() ?>UserController/index"
            class="btn btn-sm btn-outline-primary fw-semibold fs-6">Back</a>
        </form>
      </div>
    </div>
  </div>
</div>

<?php $this->load->view('includes/footer'); ?>