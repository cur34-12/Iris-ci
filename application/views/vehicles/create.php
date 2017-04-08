<head>
	<title>Create Vehicle - Logi</title>
</head>

<?php echo validation_errors(); ?>

<?php echo form_open('vehicles/create'); ?>
	<div class="form-group">
		<label>Vehicle Name</label>
		<input type="text" class="form-control" name="name" placeholder="Eg. HBY18">
	</div>
	<div class="form-group">
		<label>Vehicle Rego</label>
		<input type="text" class="form-control" name="rego" placeholder="Eg. BK95LD">
	</div>
	<div class="form-group">
		<label>Make</label>
		<input type="text" class="form-control" name="make" placeholder="Eg. Mitsubishi">
	</div>
	<div class="form-group">
		<label>Model</label>
		<input type="text" class="form-control" name="model" placeholder="Eg. 2006 Pajero">
	</div>
	<div class="form-group">
		<label>Capacity</label>
		<select name="capacity" class="form-control">
			<option>1</option>
			<option>2</option>
			<option>3</option>
			<option>4</option>
			<option>5</option>
			<option>6</option>
			<option>7</option>
		</select>
	</div>
	<div class="form-group">
		<label>LR License Required?</label>
		<select name="lr" class="form-control">
			<option>No</option>
			<option>Yes</option>
		</select>
	</div>
	<button type="submit" class="btn btn-default">Create</button>
</form>