				<!DOCTYPE html>
				<html>

				<head>
					<style>
					#question {
						width: 95%;
						overflow: hidden;
						padding: 10px;
						font-size: 40px;
						margin-top: 20px
					}

					.span-css {
						 display: none;   
						color: red;
					}
					</style>

					<link rel="stylesheet" href="css/bootstrap.min.css">
					<link rel="stylesheet" href="css/jquery-confirm.css">
					


				</head>

				<body>
					<script type="text/javascript" src="js/jquery-min.js"></script>
					<script type="text/javascript" src="js/popper.min.js"></script>
					<script type="text/javascript" src="js/bootstrap.min.js"></script>
					<script type="text/javascript" src="js/jquery-confirm.js"></script>
				
					<button id="btnModal">ADD</button>
					<table style="width:100%" id="tableStudent" class="table">
						<thead>
							<tr>
								<th>Student ID</th>
								<th>FirstName</th>
								<th>LastName</th>
								<th>Section</th>
								<th>Age</th>
								<th>Bday</th>
								<th>Gender</th>
						</thead>

						<tbody>
						</tbody>
					</table>

					<?php ModalStudent() ?>
				</body>






				<?php
				function ModalStudent(){
					echo'
				<div id="modal_student" class="modal fade" role="dialog" 
				class="modal hide" data-backdrop="static" data-keyboard="false">	
							<div class="modal-dialog  modal-xxl">
										<div class="modal-content">
												<div class="modal-header">
														<button type="button" id="" class="close" data-dismiss="modal">&times;</button>
												</div>

												<div class="modal-body">
															<span id="spanStudentNo"  class= "span-css">Enter Student Number</span>
															<div class="form-floating mb-3">
															<input type="email" id="txtstudentno" class="form-control" placeholder="Student Number">
															<label for="floatingInput">Student Number</label>
														   </div>

															
															<span id="spanFirstName"  class= "span-css">Enter First Name</span>
															<div class="form-floating mb-3">
															<input type="email" id="txtfirstname" class="form-control" placeholder="First Name">
															<label for="floatingInput">First Name</label>
														   </div>

															
															
															<span id="spanLastName"  class= "span-css">Enter Last Name</span>
															<div class="form-floating mb-3">
															<input type="tezt" id="txtlastname" class="form-control" placeholder="Last Name">
															<label for="floatingInput">Last Name</label>
														   </div>
															
															
															<span id="spanSection"  class= "span-css">Enter Section</span>
															<div class="form-floating mb-3">
															<input type="text" id="txtsection" class="form-control" placeholder="Student Number">
															<label for="floatingInput">Section</label>
														   </div>
															
															
															<span id="spanAge"  class= "span-css">Enter Age</span>
															<div class="form-floating mb-3">
															<input type="number" id="txtage" class="form-control" placeholder="Age">
															<label for="floatingInput">Age</label>
														   </div>
															
															<span id="spanBday"  class= "span-css">Enter Bday</span>
															<div class="form-floating mb-3">
															<input type="date" id="txtbirthday" class="form-control" placeholder="Birthday">
															<label for="floatingInput">Birthday</label>
														   </div>
															
															<span id="spanGender"  class= "span-css">Select Gender</span>
															<div class="form-floating mb-3">
															<select id="cbogender" class="form-control"   title="Select Gender">> 
															<option disabled="disabled" selected="selected">Select Gender</option>
																	<option>Male</option>
																	<option>Female</option>
															</select>		
															<label for="floatingInput">Gender</label>
														   </div>
															
										

													</div>
												
												<div class="modal-footer">r
													<button id="btnsave" class="form-control">SAVE RECORD</button>
												</div>
										</div>
								</div>
						</div>	
						';
				}
				?>


				<script type="text/javascript" src="js/student.js"></script>