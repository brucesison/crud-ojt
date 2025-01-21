<?php $this->load->view('includes/header'); ?>

<div class="row px-5 mb-5 font-monospace">
  <div class="col-md-12 px-5">
    <div class="card shadow-sm">
      <div class="card-body">
        <h5 class="card-title text-center mb-3 text-uppercase">Add User</h5>
        <form method="post" action="<?= base_url() ?>UserController/addUser">
          <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" name="name" id="username" aria-describedby="emailHelp" required>
          </div>

          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" id="email" required>
          </div>

          <div class="mb-3">
            <label for="contact_no" class="form-label">Contact No.</label>
            <input type="text" class="form-control" name="contact_no" id="contact_no" aria-describedby="emailHelp"
              required>
          </div>
          <button type="submit" class="btn btn-primary btn-sm shadow-sm fw-semibold fs-6">Add User</button>
          <a href="<?= base_url() ?>UserController/index"
            class="btn btn-sm btn-outline-primary fw-semibold fs-6">Back</a>
        </form>
      </div>
    </div>
  </div>
</div>

<?php $this->load->view('includes/footer'); ?>