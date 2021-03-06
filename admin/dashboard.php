<?php 
	session_start();
	if(!isset($_SESSION['email'])){
        header('location: ../login.php');
    }

	
?>
      
<?php if($_SESSION['role'] == "admin"): ?>
	<?php require 'master.php' ?>
	<div class="container-fluid">
	  <div class="d-sm-flex align-items-center justify-content-between mb-4">
	    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
	    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
	 </div>


	<div class="row">
		<div class="col-xl-8 col-lg-7">
		  <div class="card shadow mb-4">
		 
		    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
		      <h6 class="m-0 font-weight-bold text-primary">Earnings Overview</h6>
		      <div class="dropdown no-arrow">
		        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		          <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
		        </a>
		      </div>
		    </div>
		    <div class="card-body">
		      <div class="chart-area">
		      </div>
		    </div>
		  </div>
		</div>
	</div>
<?php elseif($_SESSION['role'] != "admin"): ?>
	<?php header('Location : ../login.php') ?>

<?php endif ?>

