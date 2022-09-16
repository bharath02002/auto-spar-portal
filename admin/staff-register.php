
<!-- create a new account -->
<div class="col-md-6 col-sm-6 create-new-account">
	<h4 class="checkout-subtitle">create a new staff account</h4>
	<form class="register-form outer-top-xs" role="form" method="post" action="registerstaff.php" >
<div class="form-group">
	    	<label class="info-title" for="fullname">Full Name <span>*</span></label>
	    	<input type="text" class="form-control unicase-form-control text-input" id="fullname" name="fullname" required="required">
	  	</div>


		<div class="form-group">
	    	<label class="info-title" for="exampleInputEmail2">Email Address <span>*</span></label>
	    	<input type="email" class="form-control unicase-form-control text-input" id="email" onBlur="userAvailability()" name="emailid" required >
	    	       <span id="user-availability-status1" style="font-size:12px;"></span>
	  	</div>
<div class="form-group">
	    	<label class="info-title" for="fullname">Address <span>*</span></label>
	    	<input type="text" class="form-control unicase-form-control text-input" id="address" name="address" required="required">
	  	</div>
<div class="form-group">
	    	<label class="info-title" for="contactno">Contact No. <span>*</span></label>
	    	<input type="text" class="form-control unicase-form-control text-input" id="contactno" name="contactno" maxlength="10" required >
	  	</div>


<div class="form-group">
	    	<label class="info-title" for="confirmpassword">Confirm Admin Password. to register <span>*</span></label>
	    	<input type="password" class="form-control unicase-form-control text-input" id="confirmpassword" name="confirmpassword" required >
	  	</div>


	  	<button type="submit" name="staffregister" class="btn-upper btn btn-primary checkout-page-button" >Register</button>
	</form>
</div>	
<!-- create a new account -->
	<script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
	<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
	<script src="scripts/datatables/jquery.dataTables.js"></script>