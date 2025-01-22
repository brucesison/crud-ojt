</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
  integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
  integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<!-- DataTables JS -->
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>

<!-- ajax -->
<script type="text/javascript">
  $('#createForm').submit(function (event) {
    event.preventDefault();
    $.ajax({
      url: '<?php echo base_url('UserController/createUser'); ?>',
      data: $('#createForm').serialize(),
      type: 'post',
      async: false,
      dataType: 'json',
      success: function (response) {
        $('#addUser').modal('hide');
        $('#createForm')[0].reset();
        alert('Successfully added!');
        $('#example').DataTable().ajax.reload();
      },
      error: function () {
        alert('Error');
      }
    });
  });

  $(document).ready(function () {
    $('#example').DataTable({
      "ajax": "<?php echo base_url('UserController/fetchDatafromDatabase'); ?>",
      "order": [],
    });
  });

  function editFun(id) {
    $.ajax({
      url: "<?php echo base_url('UserController/getEditData'); ?>",
      method: "post",
      data: { id: id },
      dataType: "json",
      success: function (response) {
        $('#editId').val(response.id);
        $('#editName').val(response.name);
        $('#editEmail').val(response.email);
        $('#editContact').val(response.contact_no);
        $('#editUser').modal('show');
      }
    })
  }

  $('#editForm').submit(function (event) {
    event.preventDefault();
    $.ajax({
      url: '<?php echo base_url('UserController/updateUser'); ?>',
      data: $('#editForm').serialize(),
      type: 'post',
      async: false,
      dataType: 'json',
      success: function (response) {
        $('#editUser').modal('hide');
        $('#editForm')[0].reset();
        alert('Successfully updated!');
        $('#example').DataTable().ajax.reload();
      },
      error: function () {
        alert('Error');
      }
    });
  });

  function deleteFun(id) {
    if (confirm('Are you sure?') == true) {
      $.ajax({
        url: '<?php echo base_url('UserController/deleteUser'); ?>',
        method: "post",
        dataType: "json",
        data: { id: id },
        success: function (response) {
          alert('Successfully Deleted!');
          $('#example').DataTable().ajax.reload();
        },
        error: function () {
          alert('Error');
        }

      })
    }
  }
</script>

</body>

</html>