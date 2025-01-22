<?php $this->load->view('includes/header'); ?>

<div class="row px-5 mb-5 font-monospace">
  <div class="col-md-12 mb-3">
    <button class="btn btn-sm btn-primary shadow-sm text-uppercase fw-semibold" data-bs-toggle="modal"
      data-bs-target="#addUser">Add
      User</button>

    <!-- add user modal -->
    <?php $this->load->view('includes/add_modal'); ?>

  </div>

  <div class="col-md-12">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title text-center mb-3 text-uppercase">User List</h5>
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
          </table>

          <!-- edit user modal -->
          <?php $this->load->view('includes/edit_modal'); ?>

        </div>
      </div>
    </div>
  </div>
</div>

<?php $this->load->view('includes/footer'); ?>