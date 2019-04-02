<!-- Delete pop up modal -->
      <div class="modal fade" id="delete_medical_laboratories" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Delete</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
               <div class="modal-body">
                    <div class="container">
                      <form method="post">
                        <input type="hidden" id="ml_id" name="ml_id">

                        <div class="row">
                          <div class="col-md-12">
                            <p>Are you sure you want to delete this image?</p>
                          </div>
                        </div>

                         <!-- Submit button -->
                        <div class="row">
                          <div class="col-md-12">
                            <button type="submit" class="btn btn-danger" name="delete_amr">Delete</button>
                          </div>
                        </div>
                      </form>
                    </div>    
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
          </div>
        </div>

        <script type="text/javascript">
          //Delete image
         $('#delete_medical_laboratories').on('show.bs.modal', function (event) {
                    var button = $(event.relatedTarget) // Button that triggered the modal
                    var ml_id = button.data('ml_id');
                    var modal = $(this)
                    modal.find('.modal-body #ml_id').val(ml_id);
        });

        </script>

        <?php 
        if (isset($_POST['delete_amr'])) {
            $ml_id = $_POST['ml_id'];
            $conn->query("DELETE FROM medical_lab_tbl WHERE id = $ml_id");        
        }
        ?>




