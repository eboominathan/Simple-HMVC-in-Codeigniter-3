<title>..::Boominathan HMVC Codeigniter3 For Beginners::..</title>
<div class"col-lg-6">
<div class="alert alert-warning">

<h4>Add Student</h4>
</div>
</div>
<!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/bootstrap.css">
<link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet"> -->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<?php $msg = $this->session->flashdata('msg'); if((isset($msg)) && (!empty($msg))) { ?>
                <div class="alert alert-success" >

                  <a href="#" class="close" data-dismiss="alert">&times;</a>
                <?php print_r($msg); ?>
                </div>
                <?php } ?>
                <?php $msg = $this->session->flashdata('msg1'); if((isset($msg)) && (!empty($msg))) { ?>
                <div class="alert alert-error" >

                  <a href="#" class="close" data-dismiss="alert">&times;</a>
                <?php print_r($msg); ?>
                </div>
                <?php } ?>
<form class="form-horizontal" action="<?php echo base_url();?>student/insert_student" method="post">
<div class="pull-left">
 		<div class="form-group">
 			<label class="col-sm-5 control-label">Full Name</label>
  			<div class="col-md-7" >
				<input type="text" class="form-control" name="name" required>
			</div>
		</div>
		<div class="form-group">
 			<label class="col-sm-5 control-label">Resident Address </label>
  			<div class="col-md-7" >
				<textarea class="form-control" name="address" required></textarea>
			</div>
		</div>
		<div class="form-group">
 			<label class="col-sm-5 control-label">Gender </label><br>
 			<div class="col-md-5" >
 			<div class="pull-left">
 				
				<input type="radio" class="form-control" name="gender" value="Male">
				Male
				</div>
				<div class="pull-left">
				<input type="radio" class="form-control"  name="gender"value="Female"> 
				Female
				</div>
			</div>
			</div>
			<div class="form-group">
 				<label class="col-sm-7 control-label">Expected Year of Passing</label><br>
  				<div class="col-md-5" >
		  			<select name="year" class="form-control" required>
		  					<option  value="">Select Year</option>
				  			<option value="2010">2010</option>
				  			<option value="2011">2011</option>
				  			<option value="2012">2012</option>
				  			<option value="2013">2013</option>
				  			<option value="2014">2014</option>
				  			
		  			</select>
  				</div>
  			</div>
		<div class="form-group">
 				<label class="col-sm-7 control-label">Extra Curricular Interest</label><br>
  			<div class="col-md-4" >
  			<label class="col-sm-7 control-label">Sports</label>
	  			<input type="checkbox" class="form-control"  name="interest[]" value="Sports">
	  			<label class="col-sm-7 control-label">Programming</label>
	  			<input type="checkbox"class="form-control"  name="interest[]"  value="Programming">
	  			<label class="col-sm-7 control-label">Arts</label>
	  			<input type="checkbox" class="form-control" name="interest[]"  value="Arts">
	  				<label class="col-sm-7 control-label">Music</label>
	  			<input type="checkbox" class="form-control" name="interest[]" value="Music">

  			</div>
  		</div>
  		<div class="footer" align="center">
  		
  		<input type="submit" value="Add" class="btn btn-primary">
  		<input type="reset" value="Cancel" class="btn btn-default">
  		</div>
		</div>
	</div>
</form>


</body>
</html>