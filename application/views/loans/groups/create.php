<head>
	<title>Create Equipment - Logi</title>
</head>
<h2 style="text-transform: uppercase;">Create Loan Group</h2>
<!--<?php //echo validation_errors(); ?>-->
<?php $attributes = array('class' => 'form-horizontal'); ?>
<?php echo form_open('loangroup/create', $attributes); ?>
<!--This form needs to be changed to be relevant for equipment, once its done it can be copied to the update page and modifed to pull in current data-->
	<div class="form-group">
		<label class="control-label col-sm-2">Group Name</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="loan_group_name" placeholder="Eg. Initial Uniform Issue">
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">Group Owner</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="loan_equipment" placeholder="SELECT A USERNAME">
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">Last Modified By User</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="loan_equipment" value="<?php echo $this->ion_auth->user()->row()->username; ?>" hidden>
		</div>
	</div>	
	<button type="submit" class="btn btn-default">Create</button>
</form>