<head>
	<title>Edit Equipment - Logi</title>
</head>

<!--Fields must be added to this form if an extra field is added to the vehicles table in the database-->
<?php echo validation_errors(); ?>
<?php $attributes = array('class' => 'form-horizontal'); ?>
<?php echo form_open('equipment/update', $attributes); ?>
	


	<div class="form-group">
		<label class="control-label col-sm-2">Equipment ID</label>
		<div class="col-sm-10">
			<input type="text" id="disabledInput" class="form-control" name="equipmentID" value="<?php echo $equipment['equipmentID']; ?>" disabled>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">Material Number</label>
		<div class="col-sm-10">
			<input type="text" id="disabledInput" class="form-control" name="material_number" value="<?php echo $equipment['material_number']; ?>" disabled>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">Asset Number</label>
		<div class="col-sm-10">
			<input type="text" id="disabledInput" class="form-control" name="asset_number" value="<?php echo $equipment['asset_number']; ?>" disabled>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">Barcode Number</label>
		<div class="col-sm-10">
			<input type="text" id="disabledInput" class="form-control" name="barcode_number" value="<?php echo $equipment['barcode_number']; ?>" disabled>
		</div>
	</div>






	<div class="form-group">
		<label class="control-label col-sm-2">Name</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="name" placeholder="Eg. Axe - Felling" value="<?php echo $equipment['name']; ?>">
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">Description</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="description" placeholder="Eg. BK95LD" value="<?php echo $equipment['description']; ?>">
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">Brand</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="make" placeholder="Eg. Mitsubishi" value="<?php echo $equipment['brand']; ?>">
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">Supplier</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="supplier" placeholder="Eg. Blackwells" value="<?php echo $equipment['supplier']; ?>">
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">Category</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="model" placeholder="Eg. Pajero" value="<?php echo $equipment['category']; ?>">
			</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">In Service</label>
		<div class="col-sm-10">
			<select id="capacity" name="capacity" class="form-control" >
				<option>Yes</option>
				<option>No</option>
			</select>
			<script>
				$(function() {
					$( '#capacity' ).val('<?php echo $equipment['in_service']; ?>'); 
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