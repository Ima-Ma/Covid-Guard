<?php
    include("header.php");
    include("connection.php");

?>

<div class="main-panel">
			<div class="content">
				<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title">Dashboard</h4>
						
					</div>
                    
					<div class="row">
						<div class="col-sm-6 col-md-3">
							<div class="card card-stats card-round">
								<div class="card-body ">
									<div class="row align-items-center">
										<div class="col-icon">
											<div class="icon-big text-center icon-primary bubble-shadow-small">
                                            <i class="fa-solid fa-virus"></i>
											</div>
										</div>
										<div class="col col-stats ml-3 ml-sm-0">
											<div class="numbers">
												<p class="card-category">Vaccine Available</p>
												<h1 class="card-title"><?php 
												$sql = "select id from vaccine_list order by id";
												$result = mysqli_query($conn , $sql);
												$row = mysqli_num_rows($result);
												echo "<h1>$row</h1>";
												?></h1>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-3">
							<div class="card card-stats card-round">
								<div class="card-body">
									<div class="row align-items-center">
										<div class="col-icon">
											<div class="icon-big text-center icon-info bubble-shadow-small">
                                            <i class="fa-solid fa-hospital"></i>
											</div>
										</div>
										<div class="col col-stats ml-3 ml-sm-0">
											<div class="numbers">
												<p class="card-category">Hospitals Available</p>
												<h4 class="card-title"><?php
												$sql = "select id from hospital_req order by id";
												$result = mysqli_query($conn , $sql);
												$row = mysqli_num_rows($result);
												echo "<h1>$row</h1>";
												?>
												</h4>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-3">
							<div class="card card-stats card-round">
								<div class="card-body">
									<div class="row align-items-center">
										<div class="col-icon">
											<div class="icon-big text-center icon-info bubble-shadow-small">
                                            <i class="fa-solid fa-user"></i>
											</div>
										</div>
										<div class="col col-stats ml-3 ml-sm-0">
											<div class="numbers">
												<p class="card-category">User List</p>
												<h4 class="card-title"><?php
												$sql = "select id from user_register order by id";
												$result = mysqli_query($conn , $sql);
												$row = mysqli_num_rows($result);
												echo "<h1>$row</h1>";
												?>
												</h4>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-3">
							<div class="card card-stats card-round">
								<div class="card-body">
									<div class="row align-items-center">
										<div class="col-icon">
											<div class="icon-big text-center icon-info bubble-shadow-small">
                                            <i class="fa-solid fa-lock"></i>
											</div>
										</div>
										<div class="col col-stats ml-3 ml-sm-0">
											<div class="numbers">
												<p class="card-category">Admin Register</p>
												<h4 class="card-title"><?php
												$sql = "select id from login order by id";
												$result = mysqli_query($conn , $sql);
												$row = mysqli_num_rows($result);
												echo "<h1>$row</h1>";
												
												?></h4>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="card card-stats card-round">
								<div class="card-body">
									<div class="row align-items-center">
										<div class="col-icon">
											<div class="icon-big text-center icon-info bubble-shadow-small">
                                            <i class="fa-solid fa-calendar-check"></i>
											</div>
										</div>
										<div class="col col-stats ml-3 ml-sm-0">
											<div class="numbers">
												<p class="card-category">Appointment Register </p>
												<h4 class="card-title"><?php
												$sql = "select id from appointment_list order by id";
												$result = mysqli_query($conn , $sql);
												$row = mysqli_num_rows($result);
												echo "<h1>$row</h1>";
												
												?></h4>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						
					
					
					
    <div class="container col-lg-6 mt-3">
        <div class="input-group mb-3">
            <input id="input" type="text" class="form-control" placeholder="Task To Do!" aria-label="Recipient's username" aria-describedby="button-addon2">
            <button id="add_btn" class="btn btn-primary mx-2" type="button" id="button-addon2">Add</button>
          </div>
          <ul id="parentList" class="list-group">
			<li class="list-group-item d-flex justify-content-between my-1">
				<p>Staff Management</p>
                <h2 id="btn1" class="text-primary" onclick="removeFood(this)"><i class="float-right fa-solid fa-x"></i></h2>
            </li>
			<li class="list-group-item d-flex justify-content-between my-1">
				<p>Patient Management</p>
                <h2 id="btn1" class="text-primary" onclick="removeFood(this)"><i class="float-right fa-solid fa-x"></i></h2>
            </li>
          </ul>
    </div>
    <script src="./app.js"></script>
					
				</div>
			</div>
			
		</div>
		
<?php
    include("footer.php");
?>
+