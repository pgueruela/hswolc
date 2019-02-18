<?php 
include '../includes/header.php';
include '../includes/admin_navigationbar.php';
include '../includes/admin_sidebar.php';

?>

<div class="col-md-9">
  <div class="card">
    <div class="card-body">
      <h4>Students</h4>
    </div>
  </div>

  <div class="card">
    <div class="card-body">
      <div>
          <div class="form-group">
            <div class="row">
              <div class="col-md-6">
                <input class="form-control" type="text" name="search_student" id="search_student" placeholder="Seach student">
              </div>
            </div>
          </div>
          <div id="result"></div>
      </div>
    </div>
<script>
$(document).ready(function(){

 load_data();

 function load_data(query)
 {
  $.ajax({
   url:"fetch_studentpatient.php",
   method:"POST",
   data:{query:query},
   success:function(data)
   {
    $('#result').html(data);
   }
  });
 }
 $('#search_student').keyup(function(){
  var search = $(this).val();
  if(search != '')
  {
   load_data(search);
  }
  else
  {
   load_data();
  }
 });
});
</script>

</div>

<?php 
include '../includes/footer.php';
 ?>