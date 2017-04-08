<head>
	<title>Edit Vehicle - Logi</title>
</head>

<!--Fields must be added to this form if an extra field is added to the vehicles table in the database-->
<?php echo validation_errors(); ?>
<?php $attributes = array('class' => 'form-horizontal'); ?>
<?php echo form_open('vehicles/update', $attributes); ?>
	<div class="form-group">
		<input type="hidden" name="vehID" value="<?php echo $vehicle['vehID']; ?>">
		<label class="control-label col-sm-2">Vehicle Name</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="name" placeholder="Eg. HBY18" value="<?php echo strtoupper($vehicle['name']); ?>">
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">Vehicle Rego</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="rego" placeholder="Eg. BK95LD" value="<?php echo strtoupper($vehicle['rego']); ?>">
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">Make</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="make" placeholder="Eg. Mitsubishi" value="<?php echo $vehicle['make']; ?>">
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">Year</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="year" placeholder="Eg. 2007" value="<?php echo $vehicle['year']; ?>">
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">Model</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="model" placeholder="Eg. Pajero" value="<?php echo $vehicle['model']; ?>">
			</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">Capacity</label>
		<div class="col-sm-10">
			<select id="capacity" name="capacity" class="form-control" >
				<option>1</option>
				<option>2</option>
				<option>3</option>
				<option>4</option>
				<option>5</option>
				<option>6</option>
				<option>7</option>
			</select>
			<script>
				$(function() {
					$( '#capacity' ).val('<?php echo $vehicle['capacity']; ?>'); 
				});
		    </script>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">LR License Required</label>
		<div class="col-sm-10">
			<select id="lr" name="lr" class="form-control" value="<?php echo $vehicle['lr']; ?>">
				<option>No</option>
				<option>Yes</option>
			</select>
			<script>
				$(function() {
					$( '#lr' ).val('<?php echo $vehicle['lr']; ?>'); 
				});
		    </script>			
		</div>
	</div>
	<button type="submit" class="btn btn-default">Update</button>
</form>