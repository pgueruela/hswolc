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
			<div>
				<p><b>Health Services and Wealth Office Lorma Collegs Information System</b></p>
				<hr>
				<p>Logs</p>

				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</p>

			</div>
		</div>
<?php 

include 'includes/footer.php';
 ?>