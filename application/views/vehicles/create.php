<head>
	<title>Create Vehicle - Logi</title>
</head>
<h2 style="text-transform: uppercase;">Create Vehicle</h2>
<?php echo validation_errors(); ?>
<?php $attributes = array('class' => 'form-horizontal'); ?>
<?php echo form_open('vehicles/create', $attributes); ?>
	<div class="form-group">
		<label class="control-label col-sm-2">Vehicle Name</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="veh_name" placeholder="Eg. HBY18">
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">Vehicle Rego</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="veh_rego" placeholder="Eg. BK95LD">
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">Make</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="veh_make" placeholder="Eg. Mitsubishi">
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">Year</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="veh_year" placeholder="Eg. 2007">
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">Model</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="veh_model" placeholder="Eg. Pajero">
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">License Type</label>
		<div class="col-sm-10">
			<select id="veh_license_type" name="veh_license_type" class="form-control" >
				<option>None</option>
				<option>C</option>
				<option>LR</option>
				<option>MR</option>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">Capacity</label>
		<div class="col-sm-10">
			<select id="veh_capacity" name="veh_capacity" class="form-control">
				<option>1</option>
				<option>2</option>
				<option>3</option>
				<option>4</option>
				<option>5</option>
				<option>6</option>
				<option>7</option>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">Category</label>
		<div class="col-sm-10">
			<select id="veh_category" name="veh_category" class="form-control" >
				<option>Light Storm</option>
				<option>Medium Storm</option>
				<option>Heavy Storm</option>
				<option>Light GLR</option>
				<option>Medium GLR</option>
				<option>Heavy GLR</option>
				<option>Recon</option>
				<option>Transport</option>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">Vehicle Type</label>
		<div class="col-sm-10">
			<select id="veh_type" name="veh_type" class="form-control">
				<option>Car</option>
				<option>Truck</option>
				<option>Raft</option>
				<option>Boat</option>
				<option>Trailer</option>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">Location</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="veh_location_id" placeholder="NOT YET IMPLEMENTED">
		</div>
	</div>
	<button type="submit" class="btn btn-default">Create</button>
</form>