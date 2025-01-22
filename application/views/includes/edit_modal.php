<div class="modal fade" id="editUser" tabindex="-1" aria-labelledby="editUserLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="editUserLabel">Edit User</h1>
      </div>
      <form id="editForm">
        <input type="hidden" name="id" id="editId">
        <div class="modal-body">
          <div class="form-group mb-3">
            <label>Username</label>
            <input type="text" class="form-control" id="editName" name="name" placeholder="Name here" required>
          </div>
          <div class="form-group mb-3">
            <label>Email</label>
            <input type="email" class="form-control" id="editEmail" name="email" placeholder="Email here" required>
          </div>
          <div class="form-group mb-3">
            <label>Contact No.</label>
            <input type="text" class="form-control" id="editContact" name="contact_no" placeholder="Contact no. here"
              required>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Update</button>
        </div>
      </form>
    </div>
  </div>
</div>