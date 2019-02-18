<?php 

include 'includes/header.php';
include 'includes/admin_navigationbar.php';
include 'includes/admin_sidebar.php';
 
if (!isset($_SESSION['id'])) {
	header("Location: login_account.php");
	exit();
}

 ?>
<!-- Dashboard -->
		<div class="col-md-9">
			<div class="card">
				<div class="card-body">
				    <h4>Services and Wealth Offices Lorma Colleges Information System</h4>
				 </div>
			</div>
			<h5>Logs</h5>
			<div>
				<table>
					<th></th>
				</table>
			</div>
			</div>
		</div>
<?php 

include 'includes/footer.php';
 ?>