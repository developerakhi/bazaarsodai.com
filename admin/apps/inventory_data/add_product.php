<div class="static-content-wrapper">
         <div class="static-content">
            <div class="page-content">
               <ol class="breadcrumb">
					<li><a href="index.php">Home</a></li>
						<li class="active"><a href="#">Add New</a></li>
                         </ol>
						  <div class="page-heading">
                               <h1>Add New Product</h1>
              </div>
             
<div class="container-fluid">
<a href="view-all-member.php" class="btn btn-lg btn-danger btn-raised btn-label" ><i class="fa fa-group"></i> View All Epmloyee<div class="ripple-container"></div></a>


<form action="post.php" enctype="multipart/form-data"  method="POST" id="demos" class="form-horizontal row-border">

	<div data-widget-group="group1">		
		<div class="panel panel-default" data-widget='{"draggable": "false"}'>
			<div class="panel-heading">
			<h2>Product's Details </h2>
			<div class="panel-ctrls" data-actions-container="" data-action-collapse='{"target": ".panel-body"}'></div>
			</div>
			<div class="panel-editbox" data-widget-controls=""></div>
				<div class="panel-body">
			
				<div class="form-group" style="margin-top: 0px;">
					<label class="col-sm-2 control-label"></label>
					<div class="col-sm-8">

					<span id="picture_error"></span>
					<div id="picture_preview"></div>
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-sm-2 control-label">Item's Code</label>
					<div class="col-sm-8">
						<input type="text" name="item_code" placeholder="Item's Code" class="form-control">
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-sm-2 control-label">Item's Title</label>
					<div class="col-sm-8">
						<input type="text" name="product_name" placeholder="Item's Title" class="form-control">
					</div>
				</div>
				
				
				<div class="form-group">
					<label class="col-sm-2 control-label">Date Of Birth</label>
					<div class="col-sm-8">
		
						<input type="text" name="birth" class="form-control" placeholder="Date Of Birth" id="datepicker">
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-sm-2 control-label">Mobile</label>
					<div class="col-sm-8">
						<input type="text" name="mobile" class="form-control" placeholder="Mobile Number">
					</div>
				</div>
				
				
			<div class="form-group">
					<label class="col-sm-2 control-label">Gender</label>
					<div class="col-sm-8">
							<div class="radio radio-inline radio-primary">
								<label>
									<input type="radio" name="gender" value="Male" checked>
									Male
								</label>
							</div>
						<div class="radio radio-inline radio-primary">
							<label>
								<input type="radio" name="gender" value="Female">
								Female
							</label>
						</div>
					</div>
			</div>
			
			<div class="form-group">
					<label class="col-sm-2 control-label">Local Address</label>
					<div class="col-sm-8">
						<textarea name="l_address" id="txtarea1" cols="50" placeholder="Local Address" rows="4" class="form-control"></textarea>
					</div>
				</div>
			
			<div class="form-group">
					<label class="col-sm-2 control-label">City</label>
					<div class="col-sm-3">
						<input type="text" name="city" class="form-control" placeholder="City">
					</div>
					
					<div class="col-sm-5">
					<input type="text" name="district" class="form-control" placeholder="district" id="district">
					</div>
				</div>
			
			<div class="form-group">
					<label class="col-sm-2 control-label">Permanent Address</label>
					<div class="col-sm-8">
						<textarea name="p_address" id="txtarea1" cols="50" rows="4" placeholder="Permanent Address" class="form-control"></textarea>
					</div>
				</div>
				
			<br/>
		</div>
	</div>

	
	
	<!-- Start Part 02 Company Details-->
	
	<div class="panel panel-default" data-widget='{"draggable": "false"}'>
			<div class="panel-heading" style="background-color: #218487;">
			<h2>Company Details </h2>
			<div class="panel-ctrls"></div>
		</div>
		
		<div class="panel-editbox" data-widget-controls=""></div>
			<div class="panel-body">
				<div class="form-group">
					<label class="col-sm-2 control-label">Employee ID</label>
					<div class="col-sm-8">
						<input type="text" name="employee_id" placeholder="Employee ID" class="form-control">
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-sm-2 control-label">Designation</label>
					<div class="col-sm-8">
						<input type="text" name="designation" placeholder="Designation" class="form-control">
					</div>
				</div>
				
			<div class="form-group">
					<label class="col-sm-2 control-label">Joining Date</label>
					<div class="col-sm-8">
		
						<input type="text" name="joining_date" class="form-control" placeholder="Joining Date" id="datepicker2">
					</div>
				</div>

			<div class="form-group">
					<label class="col-sm-2 control-label">Salary</label>
					<div class="col-sm-8">
						<input type="text" name="salary" class="form-control" placeholder="Salary">
					</div>
				</div>

			<div class="form-group">
				<label class="col-sm-2 control-label"></label>
				<div class="col-sm-8">
							<button class="btn-raised btn-success btn">Submit <div class="ripple-container"></div></button>
				</div>
			</div>
				
		<br/>
	</div>
</div>
	
	<!-- End Part 02 Company Details -->
	
</div>
</form>

		</div> <!-- .container-fluid -->
	</div> <!-- #page-content -->
</div>
             