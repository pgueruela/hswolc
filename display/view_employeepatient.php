<?php 
include '../includes/header.php';
include '../includes/admin_navigationbar.php';
include '../includes/admin_sidebar.php';
?>

<div class="col-md-9">
  <div class="form-group">
    <h2 style="text-align: right;">Employees</h2>
    <div class="row">
      <div class="col-md-6">
        <input class="form-control" type="text" name="search_employee" id="search_employee" placeholder="Search employee">
      </div>
    </div>


  </div>
  <div id="result"></div>

<script>
$(document).ready(function(){

 load_data();

 function load_data(query)
 {
  $.ajax({
   url:"fetch_employeepatient.php",
   method:"POST",
   data:{query:query},
   success:function(data)
   {
    $('#result').html(data);
   }
  });
 }
 $('#search_employee').keyup(function(){
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

</div>

<?php 
include '../includes/footer.php';
 ?>