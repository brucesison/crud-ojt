<div class="modal fade" id="addUser" tabindex="-1" aria-labelledby="addUserLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="addUserLabel">Add User</h1>
      </div>
      <form id="createForm">
        <div class="modal-body">
          <div class="form-group mb-3">
            <label>Username</label>
            <input type="text" class="form-control" name="name" placeholder="Name here" required>
          </div>
          <div class="form-group mb-3">
            <label>Email</label>
            <input type="email" class="form-control" name="email" placeholder="Email here" required>
          </div>
          <div class="form-group mb-3">
            <label>Contact No.</label>
            <input type="text" class="form-control" name="contact_no" placeholder="Contact no. here" required>
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Add user</button>
        </div>
      </form>
    </div>
  </div>
</div>